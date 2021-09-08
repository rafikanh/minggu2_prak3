<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function Sarana1() {
        return 'Ini adalah halaman sarana perkantoran';
    }

    public function Sarana2() {
        return 'Ini adalah halaman sarana laboratorium';
    }
    public function Sarana3() {
        return 'Ini adalah halaman sarana kelas';
    }

    public function Sarana4() {
        return 'Ini adalah halaman sarana lainnya';
    }
}
