<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtigoController extends Controller
{
    public function artigo() {
        return view('site.artigo', ['titulo' => 'Artigos']);
    }
}
