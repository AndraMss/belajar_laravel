<?php

namespace App\Http\Controllers;

use App\Models\makanan;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function info2025() {
        return "<h1><b>Hai Selamat Datang</b></h1>";
    }

    public function index() {
        $makanans = makanan::all();
        return view('food', compact('makanans'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        //dd($request->all());
        $request->validate([
            'nama' => 'required',
            'asal' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric'
        ]);
        // menyimpan data ke database
        makanan::create($request->all());
        // redirect ke halaman lain
        return redirect()->route('makanan.index');
    }

    public function destroy($id) {
        makanan::destroy($id);
        return redirect()->route('makanan.index');
    }
}
