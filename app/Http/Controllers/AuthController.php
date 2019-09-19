<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AuthController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function getLogin()
    {
        return view('auth.loginV');
    }
    public function postLogin(Request $request)
    {
     if (!\Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
       
           return redirect()->back(); 
       }
       return redirect()->route('dashboard');
     } 

    public function getRegister()
    {
        return view('auth.registerV');
    }
    public function postRegister(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|min:5',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation'=>'required|min:5'
        ]);
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        auth()->loginUsingId($user->id);
        return redirect()->route('dashboard');
    }
    public function logout() 
    {
        auth()->logout();
        return redirect()->route('log');
    }
}
