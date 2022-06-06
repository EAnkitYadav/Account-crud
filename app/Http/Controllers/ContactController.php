<?php

namespace App\Http\Controllers;

use App\Interfaces\ContactRepositoryInterface;
use App\Repositories\ContactRepository;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\ValidationContact;

class ContactController extends Controller
{

    protected $contactRepo;

    public function __construct(ContactRepositoryInterface $contact)

    {   $this->middleware('auth');
        $this->contactRepo = $contact;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.index',['contacts' => $this->contactRepo ->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationContact $request)
    {
        $data = $request->validated();
        $this->contactRepo->create($data);
        return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('contact.show', ['contacts' =>$this->contactRepo->find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('contact.edit',['contacts' =>$this->contactRepo->find($id)]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->validate([
            'company_name' => '',
            'phone_number'=>'',
            'email'=>'',
            'address'=>'',
            'description'=>'',


        ]);
           $this->contactRepo->update($id, $request);
           return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->contactRepo->delete($id);
        return redirect()->route('contacts.index');
    }
}
