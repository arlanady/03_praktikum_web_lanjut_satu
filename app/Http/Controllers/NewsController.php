<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function article($id){
        echo "Halaman artikel dengan id $id";
    }

    public function news(){
        return view ('article')
            ->with ('url', 'https://www.educastudio.com/news');
    }

    public function newsString($string){
        return view ('article')
            ->with ('url', 'https://www.educastudio.com/news/' . $string);
    }
    // public function index()
    // {
    //     return '<a href="https://www.educastudio.com/news" target="_blank">https://www.educastudio.com/news</a>';
    // }

    // public function show($news)
    // {
    //     return '<a href="https://www.educastudio.com/news/' . $news . '" target="_blank">https://www.educastudio.com/news/' . $news . '</a>';
    // }
}
