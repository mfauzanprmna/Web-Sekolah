<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsslide;
use App\Models\Manager;

class WebController extends Controller
{
    public function index()
    {
        $news = Newsslide::all();
        return view('welcome', compact('news'));
    }
}
