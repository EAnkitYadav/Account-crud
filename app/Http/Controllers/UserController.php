<?php

namespace App\Http\Controllers;
use App\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\ValidationUser;


class UserController extends Controller
{
    protected $userRepo;

    public function __construct(UserRepositoryInterface $user)

    {   
        $this->middleware('auth');
        $this->userRepo = $user;

    }

    public function index()
    {
        return view('user.index',['users' => $this->userRepo->all()]);
    }


    public function create()
    {
        return view('user.create');
    }


    public function store(ValidationUser $request)
    {

        $data = $request->validated();
        $this->userRepo->create($data);
        return redirect()->route('users.index');
    }


    public function show($id)
    {
        return view('user.show', ['users' =>$this->userRepo->find($id)]);
    }


    public function edit($id)
    {
        return view('user.edit',['users'=>$this->userRepo->find($id)]);

    }


    public function update(Request $request, $id)
    {
        $input = $request->validate([
            'name' => '',
            'email'=>'',
            'password'=>'',
        ]);
           $this->userRepo->update($id, $request);
           return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $this->userRepo->delete($id);
        return redirect()->route('users.index');
    }
}
