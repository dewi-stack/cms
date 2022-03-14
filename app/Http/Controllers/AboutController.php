<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function about() {
        $aboutuses=Aboutus::all();
        return view('/article/about',compact('aboutuses'));
    }
}
