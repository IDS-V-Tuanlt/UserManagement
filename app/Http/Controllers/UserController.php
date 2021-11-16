<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $userservice;

    public function __construct(UserService $userservice)
    {
        $this->userservice = $userservice;
    }
    public function index()
    {
        $users = $this->userservice->index();

        return view('index', compact('users'));
    }
    public function getcreate()
    {
      return view('create');
    }
    public function create(UserRequest $request)
    {
      
      $this->userservice->create($request);

      return redirect('/')->with(['status'=>'User created successfully']);
    }

    public function read($id)
    {
       
       $user = $this->userservice->read($id);

       return view('edit', compact('user'));

    }
    public function update(UserRequest $request, $id)
    {

       $user = $this->userservice->update($request, $id);

     return redirect('/')->with('status', 'User has been updated succesfully');
    }
    public function delete($id)
    {
     $this->userservice->delete($id);

     return back()->with(['status'=>'Deleted successfully']);
    }
    public function search(Request $request)
    {
      $users = $this->userservice->search($request);
      return view('search', compact('users'));
    }
    function getLogin()
    {
        return view('pages.dangnhap');
    }
    function postLogin(Request $request)
    {
        $this->validate($request,[
            'email'     => 'required',
            'password'  => 'required|min:3|max:32'
        ],[
            'email.required'        => 'Bạn chưa nhập Email',
            'password.required'     => 'Bạn chưa nhập PassWord',
            'password.min'          => 'Password không được nhỏ hơn 3 ký tự',
            'password.max'          => 'Password không được lớn hơn 32 ký tự'
        ]);
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password]))
        {
            return redirect('/user')->withInput();
        }
        else
        {
            return redirect('')->with('thongbao','Đăng nhập không thành công!');
        }
    }
    function getDangxuat()
    {
        Auth::logout();
        return redirect('');
    }
    
}
