<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function display(){
        return view('subjects');
    }

    public function addSubject(){
        return view('addSubject');
    }
    
}

?>
