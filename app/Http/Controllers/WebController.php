<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsslide;
use App\Models\Category;
use App\Models\Page;

class WebController extends Controller
{
    public function index()
    {
        $news = Newsslide::all();
        return view('template.carousel', compact('news'));
    }

    public function page($id)
    {
        $categories = Category::all();
        $pages = Page::all()->where('category_id', $id);
        return view('home', compact('categories', 'pages'));
    }
}
