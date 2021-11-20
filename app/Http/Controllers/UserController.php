<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Repositories\usersRepository;

class UserController extends Controller
{
    public function index(){
        $users = User::orderByRaw('id, fullname')->limit(100)->get();
        return view('users.index', ['users' => $users]);
    }
    public function create(){
        return view('users.create');
    }
    public function store(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'fullname' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        User::create($request->all());
        return redirect('/users')->with('info', 'New User has been added');
    }
    
}