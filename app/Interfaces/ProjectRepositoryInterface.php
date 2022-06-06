<?php

namespace App\Interfaces;

interface ProjectRepositoryInterface
{
    public function all();      //index
    public function find($id);     //show and edit
    public function update($id ,$data);   //update
    public function delete($id);  //delete
    public function create($data);  //create
}




?>
