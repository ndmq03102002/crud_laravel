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
        request()->validate([
            'email' => 'required|email|exits:users',
            'name' => 'required',
            'password' => 'required|min:6',
            'confirmpassword' => 'required|same:password'
        ]);
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
            'email' => 'required|email|unique:users',
            'name' => 'required',
            'password' => 'required|min:6',
            'confirmpassword' => 'required|same:password'
        ]);
        $data = request()->all('email','name');
        $data['password'] = bcrypt(request('password'));
        dd($data);
    }
}
