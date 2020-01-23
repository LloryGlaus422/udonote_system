<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Info;
use DB;

class UserController extends Controller
{
    public function info(Request $request){
        $infos = Info::all();
        return view('getInfo',compact('infos'));
    }
    public function create()
    {
        return view('insert');
    }


    public function store(Request $request)
    {
        $data = request(['first_name','middle_name','last_name' , 'email', 'age' ,'gender','address','password']);
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'age'  => 'required',
            'gender' => 'required',
            'address' => 'required',
            'password' => 'required'
        ]);
        
        $user = Info::create($data);
        
        // auth()->login($user);
        
        return redirect()->to('/display');
        
    }

    public function display(){
            return view('getInfo');
    }

    public function edit($id)
        {
        $infos = Info::find($id);
        return view('edit',compact('infos'));
    }

    public function update(Request $request,$id) {
        $first_name = $request->input('first_name');
        $middle_name = $request->input('middle_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $address = $request->input('address');
        $password = $request->input('password');

        DB::update('update infos set first_name = ?,middle_name=?,last_name=?,email=?,age=?,gender=?,address=?,password=? where id = ?',[$first_name,$middle_name,$last_name,$email,$age,$gender,$address,$password,$id]);
        echo "Record updated successfully.";
        return redirect()->to('/display');
            }

    public function delete($id){
        DB:: table('infos') ->where('id',$id)->delete();
        return redirect()->to('/display');
    }
    
}
