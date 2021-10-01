<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsslide;
use App\Models\Category;
use App\Models\Page;
use App\Models\Post;
use App\Models\Setting;
use App\Models\Whystarbhak;
use App\Models\Partner;
use App\Models\Bgcontent;
use App\Models\Homefooter;

class WebController extends Controller
{
    public function index()
    {
        $news = Newsslide::all();
        $article = Post::latest()->paginate(6);
        $settings = Setting::all();
        $whystarbhaks = Whystarbhak::all();
        $partners = Partner::all();
        $bgcontents = Bgcontent::all();
        $homefooters = Homefooter::all();
        return view('home', compact('news', 'settings', 'article', 'whystarbhaks','partners','bgcontents','homefooters'));
    }

    // public function page($id)
    // {
    //     $categories = Category::all();
    //     $pages = Page::all()->where('category_id', $id);
    //     return view('home', compact('categories', 'pages'));
    // }
    public function profiletb()
    {
//   return view('profile', 
    //     $categories = Category::where('name','profile'),
    //     $pages = Page::all()->where('category_id', '1')->first();
    //    , compact('categories', 'pages'));
        $categories = Category::all()->where('name','profile');
        $pages = Page::all()->where('category_id', '1')->first();
        return view('profile', compact('categories', 'pages'));
    }
}