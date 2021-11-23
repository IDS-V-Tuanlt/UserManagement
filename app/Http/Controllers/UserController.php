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

        return view('pages.user.index', compact('users'));
    }
    public function getcreate()
    {
        return view('pages.user.create');
    }
    public function create(UserRequest $request)
    {
      
        $this->userservice->create($request);

        return redirect('/')->with(['status'=>'User created successfully']);
    }

    public function read($id)
    {
       
       $user = $this->userservice->read($id);

       return view('pages.user.edit', compact('user'));

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
        return view('pages.user.search', compact('users'));
    }
}
