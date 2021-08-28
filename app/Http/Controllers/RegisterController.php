<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        $user =new User();
        $request->validate([
            'name'=>'required',
            'comfirm_password'=>'required|same:pass',
            'email'=>'unique:users',
        ]);
        $user->name=$request->name;
        $user->gender=$request->gender;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->password=Hash::make($request->pass);

        $user->save();

        return redirect('/');
    }
}
