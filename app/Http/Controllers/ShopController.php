<?php

namespace App\Http\Controllers;
use App\Banner;
use App\Category;
use App\OrderDetail;
use App\Setting;
use App\Contact;
use App\Product;
use App\Article;
use App\Order;
use Illuminate\Http\Request;
use Cart;
class ShopController extends Controller
{
    public $categories;
    public function __construct()
    {
        //lấy dữ liệu của setting và chia sẻ global
        $setting = Setting::first();
        $this->categories = Category::where([
            'is_active' => 1,
            'type' => 1, // lấy ra danh mục sản phẩm ,
        ])->get(); // bao gồm cả menu cha và con

        view()->share([
            'setting' => $setting,
            'categories' =>  $this->categories
        ]);
    }

    //trang chu
    public function index()
    {
        $sildeBanners =  Banner::where(['is_active' => 1,'type' => 1])->get();
        $bottomBanners =  Banner::where(['is_active' => 1,'type' => 2])->get();
        $listCategories = $this->categories; // lấy toàn bộ danh mục
        $articles  = Article::where(['is_active' => 1 ])->get();

        $data = []; // chứa dữ liệu bao gồm danh muc và sản phẩm

        foreach($listCategories as $key => $category) {
            if ($category->parent_id == 0) { // kiểm tra xem có phải danh mục cha
                $data[$key]['category'] = $category; // b1 . lấy danh mục
                //$data[$key]['products'] = []; // b2 . láy toàn bộ sản phẩm của cả nhóm danh mục


                $ids = []; // mảng các id của nhóm danh mục cha
                $ids[] = $category->id;  // $ids : 1

                foreach ($listCategories as $key2 => $child) {
                    if ($child->parent_id == $category->id) {
                        $ids[] = $child->id; // $ids : 1,7

                        foreach ($listCategories as $key3 => $child2) {
                            if ($child2->parent_id == $child->id) {
                                $ids[] = $child2->id; // // $ids : 1,7,60

                            }
                        }
                    }
                }
                //SELECT * FROM `products` WHERE is_active = 1  AND category_id IN(1,7,60)
                $data[$key]['products'] = Product::where(['is_active' => 1])
                    ->whereIn('category_id' , $ids) // category_id IN(1,7,60)
                    ->limit(10)
                    ->orderBy('id', 'desc')
                    ->get();
            }
        }

        return view('shop.index',[
            'sildeBanners' => $sildeBanners,
            'data' => $data,
            'bottomBanners' => $bottomBanners,
            'articles' =>$articles
        ]);
    }
    //lien he
    public function contact()
    {
        return view('shop.contact');
    }
    //danh sach sp
    public function listProducts($slug)
    {
        $category = Category::where(['slug' => $slug, 'is_active' => 1])->firstOrFail();

        $ids = []; // chưa cả id cha và con
        $ids[] = $category->id;

        $listCategories = $this->categories; // lấy toàn bộ danh mục
        foreach ($listCategories as $child) {
            if ($child->parent_id == $category->id) {
                $ids[] = $child->id;

                foreach ($listCategories as $child2) {
                    if ($child2->parent_id == $child->id) {
                        $ids[] = $child2->id;

                        foreach ($listCategories as $child3) {
                            if ($child3->parent_id == $child2->id) {
                                $ids[] = $child3->id;
                            }
                        }
                    }
                }
            }
        }

        $products =   Product::where(['is_active' => 1])
                            ->whereIn('category_id' , $ids) // category_id IN(1,7,60) dung whereIn
                            ->latest()
                            ->paginate(9);

        return view('shop.list-products',[
            'category' => $category,
            'products' => $products
        ]);

    }

    public function detailProduct($slug)
    {
        $categories = Category::all(); // SELECT * FROM categories
        $product = Product::where(['slug' => $slug, 'is_active' => 1])->firstOrFail();
        // lấy ra những sản phẩm liên quan
        // 1. lấy những sản phẩm cùng danh mục
        // 2. loại trừ cái đang xem

        // step 2 : lấy list 10 SP liên quan
        $relatedProducts = Product::where([ ['is_active' , '=', 1],
            ['category_id', '=' , $product->category_id ],
            ['id', '<>' , $product->id]
        ])->orderBy('id', 'desc')
            ->take(10)
            ->get();
        return view('shop.detail-products', [
            'product' => $product,
            'categories' => $categories,
            'relatedProducts' => $relatedProducts
        ]);
    }
    //trang danh sach tin tuc
    public function listArticles()
    {
        $articles =   Article::where(['is_active' => 1])
            ->latest()
            ->simplePaginate(4);
        return view('shop.list-articles',[
            "articles" => $articles
        ]);
    }
    public function detailArticle($slug)
    {
        $article = Article::where(['slug' => $slug, 'is_active' => 1])->firstOrFail();
        return view('shop.detail-articles', [
            'article' => $article
        ]);
    }

    //form thêm dữ liệu khách hàng liên hệ vào bảng contact
    public function postContact(Request $request)
    {
        //validate
        $request->validate([
            'name' => 'required|max:255',

        ]);

        //luu vào csdl
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->content = $request->input('content');
        $contact->save();

        // chuyển về trang chủ
        return redirect('/');
    }
    public function addToCart($id)
    {
        //lấy ra sp
        $product = Product::findOrFail($id);
        Cart::add(
            ['id' => $product->id, 'name' => $product->name, 'qty' => 1, 'price' => $product->sale,'tax' => 0, 'priceTax' => 0, 'options' => ['tax' => 0 , 'priceTax' => 0, 'image' => $product->image]]
        );
        // chuyển về trang danh sách sản phảm trong giỏ hàng
        return redirect()->route('shop.cart');
    }

    public function cart() {
        // b1. lấy toàn bộ sản phẩm đã lưu trong giỏ
        $listProducts = Cart::content();
        // lấy tổng giá của đơn hàng
        $totalPrice = Cart::subtotal(0,",",".");
        return view('shop.cart.index',
            ['listProducts' => $listProducts,
            'totalPrice' => $totalPrice]);
    }
    //hủy đơn hàng
    public function cancelCart()
    {
        Cart::destroy();
        return redirect('/');
    }

    //xoa sp trong gio
    public function removeProductOnCart($rowId)
    {
        Cart::remove($rowId);
        return redirect()->route('shop.cart');
    }

    public function updateCart($rowId,$qty)
    {
        //cap nhat so luong => quay ve trang gio hang
        Cart::update($rowId,$qty);
        return redirect()->route('shop.cart');
    }

    //tiến hành đặt hàng
    //lưu được thông tin sp đã đặt vào trong csdl
    public function order()
    {
        // b1. lấy toàn bộ sản phẩm đã lưu trong giỏ
        $listProducts = Cart::content();
        $totalPrice = Cart::subtotal(0,",",".");
        return view('shop.cart.order',
            ['listProducts' => $listProducts, 'totalPrice' => $totalPrice]
        );
    }
    //xử lý lưu dữ liệu vào db
    public function postOrder(Request $request)
    {
        $request->validate([
            'fullname' => 'required|max:255',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        // Lưu vào bảng đơn đặt hàng - orders
        $order = new Order();
        $order->fullname = $request->input('fullname');
        $order->phone = $request->input('phone');
        $order->email = $request->input('email');
        $order->address = $request->input('address');
        $order->note = $request->input('note');
        // lấy tổng giá của đơn hàng
        $totalPrice = Cart::subtotal(0, ",", '');
        $order->total = $totalPrice; // tổng giá
        $order->order_status_id = 1; // 1 = mới , 2 = đang xử lý, 3= hoàn thành, 4 = hủy
//        $order->save();
        if ($order->save()) {
            // xử lý lưu chi tiết
            $id_order = $order->id;

            // lấy toàn bộ sản phẩm đã lưu trong giỏ
            $listProducts = Cart::content();

            foreach ($listProducts as $product) {

                $_detail = new OrderDetail();
                $_detail->order_id = $id_order;
                $_detail->name = $product->name;
                $_detail->image = $product->options->image;
                $_detail->product_id = $product->id;
                $_detail->qty = $product->qty;
                $_detail->price = $product->price;
                $_detail->save();

            }
//        // Xóa thông tin giỏ hàng Hiện tại
            Cart::destroy();
            // chuyển về trang thông báo đặt hàng thành công
            return redirect()->route('shop.orderSuccess');
        }
    }

    //trang thong bao dat hang tc
    public function orderSuccess()
    {
//        $listProducts = Cart::content();
//        $totalPrice = Cart::subtotal(0,",",".");

        return view('shop.cart.orderSuccess'
//            [
//            'listProducts' => $listProducts, 'totalPrice' => $totalPrice
        );
    }
}
