<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function Sarana1() {
        return view('polinema.perkantoran');
    }

    public function Sarana2() {
        return view('polinema.laboratorium');
    }
    public function Sarana3() {
        return view('polinema.kelas');
    }

    public function Sarana4() {
        return view('polinema.lainnya');
    }
}
