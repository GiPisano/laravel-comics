<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function comics(){
        $comics = config('comics');
        $links = config('links');
        return view('comics', compact('comics', 'links'));
    }

    public function comicDetail($index){
        $comics = config('comics');
        $links = config('links');
        $comic = $comics[$index];
        return view('comic-detail', compact('comic', 'links'));
    }
}
