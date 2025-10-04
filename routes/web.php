<?php

use App\Http\Controllers\ArticalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Dashboard');
});
Route::get('/create', function () {
    return view('create');
});
Route::get(uri:'/hospice',action :function(){
    // كده ببعت للفيو قيمة باعتاله ياها ب array
    //return view('create',['name'=>'yara']);
    //طريقة تانية بنفس المعني
    $name='yara';
    $age=32;
    return view('create')
    ->with('name',$name)
    ->with('value',$age);
});
Route::post('/createArticle',ArticalController::class.'@createArticle');
Route::get('/getArticle',ArticalController::class.'@getArticle');
//Route::get('/Dashboard',ArticalController::class.'@getArticle');
