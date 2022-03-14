<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function articles($id) {
        return "Ini adalah halaman Artikel dengan ID: ".$id;
    }

    public function about(){
        $aboutuses=Aboutus::all();
        return view('/article/about',compact('aboutuses'));
    }

    public function contact(){
        return view('/article/contact');
    }
}
