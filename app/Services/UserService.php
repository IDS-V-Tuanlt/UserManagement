<?php

namespace App\Services;

use App\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserService
{
    /**
     * @var $userRepository
     */
    protected $userRepository;

    /**
     * UserService constructor.
     * 
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function getAllUsers()
    {
        return $this->userRepository->all();
    }
    public function create(Request $request)
    {
        $attributes = $request->all();
        $password =  Hash::make($attributes['password']);
        array_splice($attributes, 2, 1);
        $attributes['password'] = $password;
        return $this->userRepository->create($attributes);
    }
    public function getOneUser($id)
    {
        return $this->userRepository->find($id);
    }
    public function update(Request $request, $id)
    {
        $attributes = $request->all();

        return $this->userRepository->update($id, $attributes);
    }
    public function delete($id)
    {
        return $this->userRepository->delete($id);
    }
    public function search(Request $request)
    {
        if($request->get('name') && $request->get('email'))
        {
            return $this->userRepository->searchUser($request->all());
        } else {
            if($request->get('name'))
            {
                return $this->userRepository->searchUserName($request->get('name'));
            }
            if($request->get('email'))
            {
                return $this->userRepository->searchUserEmail($request->get('email'));
            }    
        }
    }
}
