<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutus(){
        return view ('about-us')
            ->with ('url', 'https://www.educastudio.com/about-us');
    }
    // public function index()
    // {
    //     return '<a href="https://www.educastudio.com/about-us">https://www.educastudio.com/about-us</a>';
    // }
}
