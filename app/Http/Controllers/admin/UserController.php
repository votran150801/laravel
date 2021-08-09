<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewuser(){
        $user = User::all();
         return view('admin.users.viewUser' , compact('user'));
    }
    public function editForm($id){
        $user = User::find($id);
        return view('admin.users.editUser' , compact('user'));
    }
    public function saveUser($id , Request $request){
        $user = User::find($id);
        $user->fill($request->all());
        if(!$user){
            return redirect()->back();
        }
        $user->save();
        return redirect(route('user.index') );
    }
}
