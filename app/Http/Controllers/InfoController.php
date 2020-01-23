<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Info;

class InfoController extends Controller
{
    public function create()
    {
        return view('registration.insert');
    }
    public function store()
    {
        $this->validate(request(), [
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'age'  => 'required|email',
            'gender' => 'required|email',
            'address' => 'required|email',
            'password' => 'required'
        ]);
        
        $user = Info::create(request(['first_name','middle_name','last_name' , 'email', 'age' ,'gender','address','password']));
        
        auth()->login($user);
        
        return redirect()->to('/subjects');
    }
}
