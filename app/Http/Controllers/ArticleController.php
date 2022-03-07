<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function articles($id) {
        return "Ini adalah halaman Artikel dengan ID: ".$id;
    }

    public function about(){
        return view('/article/about');
    }

    public function contact(){
        return view('/article/contact');
    }
}
