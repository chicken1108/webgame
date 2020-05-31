<?php
namespace App\Http\Controllers\Backend;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\BackController;

class UserController extends BackController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // SELECT * FROM users LIMIT 10

        $users = User::where('group','admin')->paginate(10);
       return view('user.index',[
        'users' => $users
       ]);
    }

    public function customer()
    {
        // SELECT * FROM users LIMIT 10

        $users = User::where('group','customer')->paginate(10);
       return view('user.index',[
        'users' => $users
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('user.add');
    }

    /**
     * Thuwcjn hiện lưu mới một dữ liệu vào bảng users
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $this->validate(
            $request,
            [
                'username' => 'required|min:3|max:20|unique:users,username',
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
                'confirm_password' => 'required|same:password'
            ],
            [
                'username.required' => 'Tên tài khoản không được để rông',
                'confirm_password.same' => 'Nhập lại mật khẩu không đúng',
                'username.unique' => 'Tên tài khoản <b>'.$request->username.'</b> đã tồn tại trong data',
            ]
        );
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        // SESSION['success'] = 'Tạo mói tài khoản thành công';
        return redirect()->route('backend.user')->with('success','Tạo mói tài khoản thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = User::find($id);

        return view('user.edit',[
                'model' => $model
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
       $model = User::find($id);
        $this->validate(
            $request,
            [
                'username' => 'required|min:3|max:20|unique:users,username',
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
                'confirm_password' => 'required|same:password'
            ],[]
        );
        $model->update([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        // SESSION['success'] = 'Tạo mói tài khoản thành công';
        return redirect()->route('backend.user')->with('success','Cập nhật tài khoản thành công');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
    return redirect()->route('backend.user')->with('success','Xoa thành công');
    }
}
