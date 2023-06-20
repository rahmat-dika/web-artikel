<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|min:5|max:200|unique:users',
            'profesi' => 'required',
            'email' => 'required | email | unique:users',
            'password' => 'required|min:2|max:255',
        ]);

        $data = [
            'name' => $request->name,
            'username' => $request->username,
            'profesi' => $request->profesi,
            'email' => $request->email,
            'password' => $request->password
        ];

        User::insert($data);

        session()->flash('succes', 'Data anda sudah di simpan');

        return redirect('/login');
    }
}