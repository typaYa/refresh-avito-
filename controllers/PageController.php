<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main(){
        $posts = Product::all();
        return view('show', compact('posts'));
    }
}
