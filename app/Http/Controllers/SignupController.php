<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SignupController extends Controller
{
    public function signupForm(){
        return view('auth.signup');
    }
    public function postSignup(Request $request){
        $request->validate(
            [
                'name' => "required",
                'email' => "required|email",  
                'password' => "required"
            ],
            [
                'name.required' => "Hãy nhập tên của bạn",
                
                'email.required' => "Hãy nhập email của bạn",
                'email.email' => "Email của bạn không đúng, vui lòng thử lại",
                'password.required' => "Mật khẩu của bạn không đúng"
            ]
        );
        $user = DB::table('users')->where('email', $request->email)->first();
        if(!$user){
            $newUser = new User();
            $newUser->name = $request->name;
            $newUser->email = $request->email;
            $newUser->password = $request->password;
            $newUser->save();
            return redirect()->route('signup')->with('message','bạn đã tạo tài khoản thành công');
        }else{
            return redirect()->route('signup')->with('message','Bạn chưa đăng ký thành công');
        }
    }   
}
