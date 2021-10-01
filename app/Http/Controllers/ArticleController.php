<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;
use File;
class ArticleController extends Controller
{
    public function index()
    {
        return view('article.index');
    }
    public function store(Request $request)
    {
        $description = strip_tags($request->description);
        $str = str_replace('&nbsp;','',$description);
        $meta_description = html_entity_decode($str);

        // $string = str_replace(' ', '', $string);
        $slug = str_replace(' ', '-',$request->title);

        // dd($request,$description,$meta_description,$slug);
        

        $nm = $request->image;
        $namafile = $nm->getClientOriginalName();
        $nm->move(public_path().'/article-img',$namafile);

        Post::create([
            'author_id' => Auth::guard('manager')->id(),
            'category_id' => $request->category,
            'title' => $request->title,
            'seo_title' => $request->seo_title,
            'excerpt' => null,
            'body' => $request->description,
            'image' => $namafile,
            'slug' => $slug,
            'meta_description' => $meta_description,
            'meta_keywords' => 'default',
            'status' => 'PUBLISHED',
            'featured' => 1,
        ]);

        // return view('article.index');
        return redirect()->back()->with('pesan','Berhasil Membuat Article ');

    }



    public function delete($id)
    {
       $img =  Post::where('id',$id)->first();
        // dd($img->image);
        
        if(File::exists(public_path('article-img/'.$img->image))){
            File::delete(public_path('article-img/'.$img->image));

            Post::where('id',$id)->delete();
            return redirect()->back()->with('pesan','Berhasil Hapus Article ');
        }else{
            // dd('File does not exists.');
            return redirect()->back()->with('fail','Gagal di  Hapus  ');

        }
        

            // dd($id);
    }
}
