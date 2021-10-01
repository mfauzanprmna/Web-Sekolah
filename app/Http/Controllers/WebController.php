<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsslide;
use App\Models\Category;
use App\Models\Page;
use App\Models\Post;
use App\Models\Setting;

class WebController extends Controller
{
    public function index()
    {
        $news = Newsslide::all();
        $article = Post::all();
        $settings = Setting::all();
        return view('home', compact('news', 'settings', 'article'));
    }

    public function page($id)
    {
        $categories = Category::all();
        $pages = Page::all()->where('category_id', $id);
        return view('home', compact('categories', 'pages'));
    }
}
