<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:20'],
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:20'
        ]);

        return redirect('/login')->with('success','Registrasi berhasil, Silahkan login');
    }
}
