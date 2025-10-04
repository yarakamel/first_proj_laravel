<?php

namespace App\Http\Controllers;

use App\Models\Artical;
use Illuminate\Http\Request;

class ArticalController extends Controller
{
    //
    function createArticle(){
        $article=Artical::create(["title"=>"article title",
        "body"=>"article body"]);
        return $article;
    }
    function getArticle(){
$arr= Artical::all();
return $arr;    }
}
