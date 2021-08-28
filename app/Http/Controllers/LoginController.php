<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->intended('/index');
        }
        else{
            return redirect()->back()->with('msg','Your email and passwordincorrect! ');
        }
    }

    public function dologout()
    {
        Auth::logout();
        return redirect('/');
    }

    
}
