<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listUser = User::latest()->paginate(15);
        return view('admin.user.index',[
            'data' => $listUser,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create'
         );
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
            'email' => 'required|max:255',
            'password' => 'required|max:255',
            //'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg'
        ],[
            'name.required' => 'Bạn chưa nhập tên',
            'email.required' => 'Bạn chưa nhập email',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            //'image.mimes' => 'Ảnh chỉ hỗ trợ các định dạng file : jpeg,png,jpg,gif,svg'
        ]);
        //Bước 1: nhận đc data từ form
        $name = $request->input('name'); //lau du lieu tu form
        $email =$request->input('email');
//        $image =$request->input('image');
        $password =bcrypt($request->input('password'));
        $is_active =$request->input('is_active');



        //Bước 2: khoi tao model
        $user = new User();
        $user->role_id =1;
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->is_active = $is_active;


        // xử lý lưu ảnh
        if ($request->hasFile('avatar')) { // dòng này Kiểm tra xem có image có được chọn
            // get file
            $file = $request->file('avatar');
            // tên file image
            $filename = $file->getClientOriginalName(); // tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/user/'; // uploads/brand ; uploads/vendor
            // Thực hiện upload file
            $file->move($path_upload,$filename);

            $user->avatar = $path_upload.$filename;
        }
        //Thêm mới vào db
        $user->save();

        //Bước 3: chuyển về trang ds

        return redirect()-> route('admin.user.index');
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

        $user = User::find($id);
        $users = Category::all();

        return view('admin.user.edit',[
            'user' => $user,
            'users' => $users
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
            'email' => 'required|max:255',

            //'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg'
        ],[
            'name.required' => 'Bạn chưa nhập tên',
            'email.required' => 'Bạn chưa nhập email',

            //'image.mimes' => 'Ảnh chỉ hỗ trợ các định dạng file : jpeg,png,jpg,gif,svg'
        ]);
        //Bước 1: nhận đc data từ form
        $name = $request->input('name'); //lau du lieu tu form
        $email =$request->input('email');
//        $image =$request->input('image');
        $new_password =bcrypt($request->input('password'));
        $is_active =$request->input('is_active');



        //Bước 2: khoi tao model
        $user = User::find($id);
        $user->role_id =1;
        $user->name = $name;
        $user->email = $email;
        if(!empty($new_password)) {
            $user->password = $new_password;
        }
        $user->is_active = $is_active;


        // xử lý lưu ảnh
        if ($request->hasFile('new_image')) { // dòng này Kiểm tra xem có image có được chọn
            // xóa file cũ
            @unlink(public_path($user->avatar));
            // get file
            $file = $request->file('new_image');
            // tên file image
            $filename = $file->getClientOriginalName(); // tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/user/'; // uploads/brand ; uploads/vendor
            // Thực hiện upload file
            $file->move($path_upload,$filename);

            $user->avatar = $path_upload.$filename;
        }
        //Thêm mới vào db
        $user->save();

        //Bước 3: chuyển về trang ds

        return redirect()-> route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // gọi tới hàm destroy của laravel để xóa 1 object
        User::destroy($id);

        // Trả về dữ liệu json và trạng thái kèm theo thành công là 200
        return response()->json([
            'status' => true
        ], 200);
    }
}
