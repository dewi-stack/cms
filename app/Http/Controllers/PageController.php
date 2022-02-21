<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index() {
        return "Selamat Datang";
    }

    public function about() {
        return view('welcome');
    }

    public function articles($id) {
        return "Ini adalah halaman Artikel dengan ID: ".$id;
    }
}
