<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::all();
        $listCategories = Category::latest()->paginate(20); // sắp sếp theo thứ tự mới nhất && phân trang

      return view('admin.category.index',[
          'data' => $listCategories,
          'categories' => $categories
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        return view('admin.category.create',[
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            //'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg'
        ],[
            'name.required' => 'Bạn chưa nhập tên',
            //'image.mimes' => 'Ảnh chỉ hỗ trợ các định dạng file : jpeg,png,jpg,gif,svg'
        ]);
        //Bước 1: nhận đc data từ form
        $name = $request->input('name'); //lau du lieu tu form
        $parent_id =$request->input('parent_id');
//        $image =$request->input('image');
        $position =$request->input('position');
        $type =$request->input('type');
        $is_active =$request->input('is_active');


        //Bước 2: khoi tao model
        $category = new Category();
        $category->parent_id = $parent_id;
        $category->name = $name;
        $category->slug = str_slug($name);
        $category->position = $position;
        $category->type = $type;
        $category-> is_active= $is_active;


        // xử lý lưu ảnh
        if ($request->hasFile('image')) { // dòng này Kiểm tra xem có image có được chọn
            // get file
            $file = $request->file('image');
            // tên file image
            $filename = $file->getClientOriginalName(); // tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/category/'; // uploads/brand ; uploads/vendor
            // Thực hiện upload file
            $file->move($path_upload,$filename);

            $category->image = $path_upload.$filename;
        }
        //Thêm mới vào db
        $category->save();

        //Bước 3: chuyển về trang ds

        return redirect()-> route('admin.danh-muc.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $category = Category::find($id);
        $categories = Category::all();

        return view('admin.category.edit',[
            'category' => $category,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Bước 1: nhận đc data từ form
        $name = $request->input('name'); //lau du lieu tu form
        $parent_id =$request->input('parent_id');
//        $image =$request->input('image');
        $position =$request->input('position');
        $type =$request->input('type');
        $is_active =$request->input('is_active');


        //Bước 2: khoi tao model
        $category = Category::find($id);
        $category->parent_id = $parent_id;
        $category->name = $name;
        $category->slug = str_slug($name);
        $category->position = $position;
        $category->type = $type;
        $category-> is_active= $is_active;


        // xử lý lưu ảnh
        if ($request->hasFile('new_image')) { // dòng này Kiểm tra xem có image có được chọn
            // xóa file cũ
            @unlink(public_path($category->image));
            // get file
            $file = $request->file('new_image');
            // tên file image
            $filename = $file->getClientOriginalName(); // tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/category/'; // uploads/brand ; uploads/vendor
            // Thực hiện upload file
            $file->move($path_upload,$filename);

            $category->image = $path_upload.$filename;
        }
        //Thêm mới vào db
        $category->save();

        //Bước 3: chuyển về trang ds

        return redirect()-> route('admin.danh-muc.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Category::destroy($id); // DELETE FROM categories WHERE id

        return response()->json(['status' => true], 200);

    }
}
