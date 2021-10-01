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
use App\Models\Profile;

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
        $profiles = Profile::all();
        return view('home', compact('news', 'settings', 'article', 'whystarbhaks','partners','bgcontents','homefooters','profiles'));
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

            $pages = Page::all()->where('category_id', '7')->where('status', 'ACTIVE');
            $settings = Setting::all();
            return view('profile', compact('settings', 'pages'));
    }
}