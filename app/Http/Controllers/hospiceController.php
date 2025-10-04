<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hospiceController extends Controller
{
    //
    function create(){
        $n='Hello World';
        return view("create")->with('RequestValue',$n);   }
}
