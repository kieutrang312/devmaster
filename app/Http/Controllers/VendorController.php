<?php

namespace App\Http\Controllers;

use App\Category;
use App\Vendor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::all(); //lay toan bo du lieu
        $listVendor = Vendor::latest()->paginate(15);
        return view('admin.vendor.index',['data' => $listVendor,
                'vendors' =>$vendors
            ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendor = Vendor::all();
        return view('admin.vendor.create',[
            'vendor' => $vendor
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
            'email' => 'required|max:255',
            'phone' => 'required|max:255'
        ],[
            'name.required' => 'Bạn chưa nhập tên',
            'email.required' => 'Bạn chưa nhập email',
            'phone.required' => 'Bạn chưa nhập SDT'
            //'image.mimes' => 'Ảnh chỉ hỗ trợ các định dạng file : jpeg,png,jpg,gif,svg'
        ]);
        //b1:them du lieu vao db
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $website = $request->input('website');
        $address = $request->input('address');
        $position = $request->input('position');
        $is_active = $request->input('is_active');

        //b2: khoi tao model
        $vendor = new Vendor();
        $vendor->name = $name;
        $vendor->slug = str_slug($name);
        $vendor->email = $email;
        $vendor->phone = $phone;
        $vendor->website = $website;
        $vendor->address = $address;
        $vendor->position = $position;
        $vendor->is_active = $is_active;

        if ($request->hasFile('image')) { // dòng này Kiểm tra xem có image có được chọn
            // get file
            $file = $request->file('image');
            // tên file image
            $filename = $file->getClientOriginalName(); // tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/vendor/'; // uploads/brand ; uploads/vendor
            // Thực hiện upload file
            $file->move($path_upload,$filename);

            $vendor->image = $path_upload.$filename;
        }
        $vendor->save();
//        b3:chuyen trang
        return redirect()-> route('admin.nha-cung-cap.index');
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
        $vendor = Vendor::find($id);
        $vendors = Vendor::all();

        return view('admin.vendor.edit',[
            'vendors' => $vendors,
            'vendor' => $vendor
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
        $request->validate([
            'name' => 'required|max:255',
            //'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg'
            'email' => 'required|max:255',
            'phone' => 'required|max:255'
        ],[
            'name.required' => 'Bạn chưa nhập tên',
            'email.required' => 'Bạn chưa nhập email',
            'phone.required' => 'Bạn chưa nhập SDT'
            //'image.mimes' => 'Ảnh chỉ hỗ trợ các định dạng file : jpeg,png,jpg,gif,svg'
        ]);
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $website = $request->input('website');
        $address = $request->input('address');
        $position = $request->input('position');
        $is_active = $request->input('is_active');

        //b2: khoi tao model
        $vendor = Vendor::find($id);
        $vendor->name = $name;
        $vendor->slug = str_slug($name);
        $vendor->email = $email;
        $vendor->phone = $phone;
        $vendor->website = $website;
        $vendor->address = $address;
        $vendor->position = $position;
        $vendor->is_active = $is_active;

        if ($request->hasFile('new_image')) { // dòng này Kiểm tra xem có image có được chọn
            @unlink(public_path($vendor->image));
            // get file
            $file = $request->file('new_image');
            // tên file image
            $filename = $file->getClientOriginalName(); // tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/vendor/'; // uploads/brand ; uploads/vendor
            // Thực hiện upload file
            $file->move($path_upload,$filename);

            $vendor->image = $path_upload.$filename;
        }
        $vendor->save();
//        b3:chuyen trang
        return redirect()-> route('admin.nha-cung-cap.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vendor::destroy($id); // DELETE FROM categories WHERE id

        return response()->json(['status' => true], 200);
    }
}
