<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmbilSampahController extends Controller
{
    public function index()
    {
        return view('ambil-sampah.index');
    }
}
