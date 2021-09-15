<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function prodi1() {
        return view('polinema.mi');
    }

    public function prodi2() {
        return view('polinema.ti');
    }
}
