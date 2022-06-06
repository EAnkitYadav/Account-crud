<?php

namespace App\Repositories;
use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{

    public function all()
    {

       return User::all();

    }
    public function create($data)
    {
        User::create($data);
    }

    public function find($id)
    {
        $users = User::find($id);
        return  $users;

    }
     public function update($id,$data)
    {
        $input = $data->all();
        $user = User::find($id);
        $user->fill($input)->save();
        return $user;

    }
    public function delete($id)
    {
      return User::find($id)->delete();
    }

}




?>
