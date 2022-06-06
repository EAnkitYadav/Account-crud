<?php

namespace App\Repositories;
use App\Interfaces\AccountRepositoryInterface;
use App\Models\Account;

class AccountRepository implements AccountRepositoryInterface
{

    public function all()
    {

       return Account::simplePaginate(6);

    }
    public function create($data)
    {
       $account = Account::create($data);
       return $account;
    }

    public function find($id)
    {
        $accounts = Account::find($id);
        return $accounts;

    }
     public function update($id,$data)
    {
        $input = $data->all();
        $account = Account::find($id);
        $account->fill($input)->save();
        return $account;
    }
    public function delete($id)
    {
        $account = Account::find($id);
        $account->delete();
        return true;
    }

}




?>
