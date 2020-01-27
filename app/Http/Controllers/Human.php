<?php

namespace App\Http\Controllers;



use App\Models\Humans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use DB;
class Human extends Controller
{
    public function human(Request $request){
        $humans = Humans::all();
        return view('human', compact('humans'));
    }


    public function human2(Request $request){
        $request->validate([
            'first_name'=> 'required',
            'last_name'=> 'required',
            'email'=> 'required|email',
            'age'=> 'required',
            'gender'=> 'required',
            'address'=> 'required',
            'password' => 'required|confirmed|min:6|',
            ]);

            $user = Auth::user();
            $user = Humans::create(request(['first_name','last_name','email','age','gender','address','password']));
            return redirect()->to('/logyow');        
    }

    public function show(){
        return view('inputForm');
    }
    public function Log(){
        return view('loginForm');
    }

    public function main(){
        return view('mainView');
    }

    public function edit($id)
    {
        $human = Humans::find($id);
        return view('edit',compact('human'));
    }

   
    public function login1()
    {
        $user = Humans::where('email', '=', Input::get('email'))->first();
        $user1 = Humans::where('first_name', '=', Input::get('first_name') )->first();
        if ($user === null) {
            echo 'email Does Not Exist';
        }elseif($user1 === null) {
            echo 'email Does Not Exist';
        }
        else{
              return view('view',compact('human'));
        }
      
    }

    public function update(Request $request,$id) {
        $request->validate([
            'first_name'=> 'required',
            'last_name'=> 'required',
            'email'=> 'required|email',
            'age'=> 'required',
            'gender'=> 'required',
            'address'=> 'required',
            'password'=> 'required'
            ]);



        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $address = $request->input('address');
        $password = $request->input('password');
        DB::update('update humans set first_name = ?,last_name=?,email=?,age=?,gender=?,address=?,password=?  where id = ?',[$first_name,$last_name,$email,$age,$gender,$address,$id]);
        echo "Record updated successfully.";
        return redirect()->to('/showTable');
    }

    public function delete($id){
        DB::table('humans')->where('id',$id)->delete();
        return redirect('/showTable');
    }

}