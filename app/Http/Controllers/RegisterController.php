<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        $page = [
            'title' => 'Daftar akun!Bogeng',
            'description' => 'Register ke website bogeng sebagai admin',
            'active' => 'register'
        ];
        return view('register.register', compact('page'));
    }

    public function adduser(Request $request)
    {
        $validate = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'username' => 'required'
        ];
        $request->validate($validate);
        $validate['username'] = 'BMP' . rand(1, 1000);
        $validate['password'] = bcrypt($request->password);

        // Insert into database
        User::create($validate);

        // rediret into login page
        return redirect()->route('login-page')->with('message', 'Your Account has been Registered. Now login');
    }
}
