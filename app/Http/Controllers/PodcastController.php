<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function podcast() {
        return view('site.podcast', ['titulo' => 'Podcast']);
    }
}
