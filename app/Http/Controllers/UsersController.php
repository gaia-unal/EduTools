<?php

namespace App\Http\Controllers;

use App\User;
use Redirect;
use Auth;
use App\Http\Requests\UserCreateRequest;

class UsersController extends Controller
{
    public function index()
    {
        return view('user.inicio');
    }

    public function store (UserCreateRequest $request)
    {
        User::create(
            [
                'name' => $request['name'],
                'email' => $request['email'],
                'username' => $request['username'],
                'role' => "user",
                'password' => bcrypt($request['password1'])
            ]
        );
        flash('Welcome Aboard!');
        return Redirect::to('/flogin')->with('msg', 'Gracias por visitarnos usuario creado!.');

    }

    public function return_add($u)
    {
        return view('user.profile')->with('username', $u);
    }

    public function flogin()
    {
        return view('user.login');
    }

    public function fregistry()
    {
        return view('user.registry');
    }
    public function logout()
    {
        Auth::logout();
        return view('/inicio');
    }





    
}
