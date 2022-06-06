<?php

namespace App\Repositories;
use App\Interfaces\ContactRepositoryInterface;
use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface
{

    public function all()
    {

       return Contact::simplePaginate(6);

    }
    public function create($data)
    {
       return Contact::create($data);
    }

    public function find($id)
    {
        $contacts = Contact::find($id);
        return  $contacts;

    }
     public function update($id,$data)
    {
        $input = $data->all();
        $contact = Contact::find($id);
        $contact->fill($input)->save();

    }
    public function delete($id)
    {
      return Contact::find($id)->delete();
    }

}




?>
