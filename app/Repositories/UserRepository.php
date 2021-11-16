<?php

namespace App\Repositories;


use App\User;

class UserRepository
{
    /**
     * @var User
     */
    protected $user;

    /**
     * UserRepository constructor.
     * 
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function create($attributes)
    {
        return $this->user->create($attributes);
    }
    public function all()
    {
        return $this->user->all();
    }
    public function find($id)
    {
        return $this->user->find($id);
    }
    public function update($id, array $attributes)
    {
        return $this->user->find($id)->update($attributes);
    }
    public function delete($id)
    {
        return $this->user->find($id)->delete();
    }
    public function searchUserName($keyword)
    {
        return $this->user->where('name','like',"%$keyword%")->get();
    }
    public function searchUserEmail($keyword)
    {
        return $this->user->where('email','like',"%$keyword%")->get();
    }
    public function searchUser($keyword)
    {
        $name = $keyword['name'];
        $email = $keyword['email'];
        return $this->user->where('name','like',"%$name%")->where('email','like',"%$email%")->get();
    }
}
