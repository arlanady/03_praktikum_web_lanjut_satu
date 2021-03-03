<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir(){
        return view ('program')
            ->with ('page', 'Karir')
            ->with ('url', 'https://www.educastudio.com/program/karir');
    }

    public function magang(){
        return view ('program')
            ->with ('page', 'Magang')
            ->with ('url', 'https://www.educastudio.com/program/magang');
    }

    public function kunjunganindustri(){
        return view ('program')
            ->with ('page', 'Program Karir')
            ->with ('url', 'https://www.educastudio.com/program/kunjungan-industri');
    }
    // public function listProgram($program)
    // {
    //     $link = '<a href="https://www.educastudio.com/program/kunjungan-industri/' . $program . '" target="_blank">';
    //     $link .= 'https://www.educastudio.com/program/' . $program;
    //     $link .=  '<a/>';
    //     return $link;
    // }
}
