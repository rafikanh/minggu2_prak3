<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function Comment($nama, $pesan){
        return 'Nama saya '.$nama.' pesan saya '.$pesan;
    }
}
