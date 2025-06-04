<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class parameterContoller extends Controller
{
    //public function judul() {
    //    return view('berita.index', ['title' => $judul , 'deskripsi' => 'ini adalah halaman berita']);
    //}
    public function detail() {
        echo "sekarang berada di Berita Controller function detail";
    }
}
