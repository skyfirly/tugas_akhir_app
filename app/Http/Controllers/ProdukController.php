<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ProdukController extends Controller

{
    public function index()
    {
        $nama = "Future Princess";
        return view('welcme', compact('nama'));
    }
}


