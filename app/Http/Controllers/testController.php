<?php

namespace App\Http\Controllers;

use App\Models\data;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function index() {
        $datas = data::all();
        return view('self', compact('datas'));
    }
    public function create() {
        return view('self2');
    }
    public function store(Request $request) {
        // dd($request->all());
        $request->validate([
            'nama' => 'required',
            'hobi' => 'required',
            'umur' => 'required|numeric'
        ]);
        // menyimpan data ke database
        data::create($request->all());
        // redirect ke halaman
        return redirect()->route('data.index');
    }

    public function destroy($id) {
        data::destroy($id);
        return redirect()->route('data.index');
    }
}
