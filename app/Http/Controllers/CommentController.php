<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function Comment($nama, $pesan){
        return view('polinema.comment', ['nama' => $nama, 'pesan' => $pesan]);
    }
}
