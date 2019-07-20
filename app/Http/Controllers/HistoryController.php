<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function pencairan() {
        return view('history.pencairan');
    }

    public function setoran() {
        return view('history.setoran');
    }
}
