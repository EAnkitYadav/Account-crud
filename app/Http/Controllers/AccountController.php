<?php

namespace App\Http\Controllers;

use App\Interfaces\AccountRepositoryInterface;
use App\Repositories\AccountRepository;
use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Requests\AccountRequest;
use App\Http\Requests\ValidationAccount;

class AccountController extends Controller
{

    protected $accountRepo;

    public function __construct(AccountRepositoryInterface $account)

    {   $this->middleware('auth');
        $this->accountRepo = $account;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.index',['accounts' => $this->accountRepo ->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $this->accountRepo->create($data);
        return redirect()->route('accounts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\account  $account
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('account.show', ['accounts' =>$this->accountRepo->find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('account.edit',['accounts' =>$this->accountRepo->find($id)]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\account  $account
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
           $this->accountRepo->update($id, $request);
           return redirect()->route('accounts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->accountRepo->delete($id);
        return redirect()->route('accounts.index');
    }
}
