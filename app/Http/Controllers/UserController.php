<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
 function CreateUser(Request $request){
$user=User::create(["name"=>"yara","email"=>"yara@gmail.com","password"=>"123"]);
return $user;
}
}
