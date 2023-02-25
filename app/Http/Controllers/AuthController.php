<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function viewRegister()
    {
        return view('register');
    }

    public function viewLogin()
    {
        return view('login');
    }

    public function register(Request $request)
    {
        $password = $request->password;
        $confirmPassword = $request->confirm_password;
        $email = $request->email;
        $name = $request->name;
        
        if ($password != $confirmPassword) {
            return view('register', [
                'message' => '2 password khong trung nhau. Vui long nhap lai'
            ]);
        }
        $data = [
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password)
        ];
        $user = User::create($data);

        return view('register', [
            'message' => 'Tao tai khoan thanh cong'
        ]);
    }

    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('dashboard')->with('message', 'Dang nhap thanh cong');
        }

        return view('login', [
            'message' => 'Sai tai khoan hoac mat khau'
        ]);
    }
}