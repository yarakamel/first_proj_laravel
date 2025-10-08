<?php

use App\Http\Controllers\ArticalController;
use App\Http\Controllers\OrphanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/AllNews', function () {
    return view('AllNews');
});
Route::get('/test-carousel', function () {
    return view('test-carousel');
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
Route::get('/show-all',[OrphanController::class,'show']);
Route::get('/orphans/data',[OrphanController::class,'getData']);
Route::post('/add-data', [OrphanController::class, 'store']);
// web.php
Route::get('/orphansedit/{id}', [OrphanController::class, 'edit']);
Route::put('/orphansupdate/{id}', [OrphanController::class, 'update']);
Route::delete('/orphansDel/{id}', [OrphanController::class, 'orphansDel']);
Route::post('/import', [OrphanController::class, 'import']);

