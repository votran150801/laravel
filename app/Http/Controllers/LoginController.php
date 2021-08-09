<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   
    public function loginForm(){
        return view('auth.login');
    }
    public function postLogin(Request $request){
        $request->validate(
            [
                'email' => "required|email",  
                'password' => "required"
            ],
            [
                'email.required' => "Hãy nhập email của bạn",
                'email.email' => "Email của bạn không đúng, vui lòng thử lại",
                'password.required' => "Mật khẩu của bạn không đúng"
            ]
        );
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect(route('admin.layouts.main'));
        }else {
            return redirect()->back()->with('msg', 'Tài khoản/mật khẩu không chính xác');
        }
    }
}
