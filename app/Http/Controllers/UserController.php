<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;

class UserController extends Controller
{
    public function welcome(){
        return view('/welcome');
    }

    public function Login(Request $request){
        $users = User::whereEmail('email',$request->id)->get();
        return view('/login',compact('users'));
    }

    public function login1(){
        return view('/welcome');
    }


    public function users(Request $request){
        $users = Users::all();
        return view('homepage', compact('users'));
    }
    
    public function Register(){
        return view('register');
    }
    public function store(Request $request)
    {
        // $this->validate(request(), [
        // 'name' => 'required',
        // 'email' => 'required|email',
        // 'password' => 'required',

        $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required'
        ]);
        

        $user = User::create(request(['name', 'email', 'password']));
        // auth()->Login($user);
        return redirect()->to('/login');
    }
}