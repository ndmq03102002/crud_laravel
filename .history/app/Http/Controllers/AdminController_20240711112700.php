<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function Checklogin()
    {
        $data = request()->all('email', 'password');
        dd($data);
    }

    public function register()
    {
        return view('admin.register');
    }

    public function Checkregister()
    {
        request()->validate([
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password'
        ]);
        $data = request()->all('email','name');
        $data['password'] = bcrypt(request('password'));
        dd($data);
    }
}
