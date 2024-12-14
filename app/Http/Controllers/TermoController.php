<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermoController extends Controller
{
    public function termo() {
        return view('site.termo', ['titulo' => 'Termos']);
    }
}
