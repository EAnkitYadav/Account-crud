<?php

namespace App\Interfaces;


interface AccountRepositoryInterface
{
    public function all();      //index
    public function find($id);     //show and edit
    public function update($id ,$input);   //update
    public function delete($id);  //delete
    public function create($data);  //create

}




?>
