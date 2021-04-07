<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function show($Slug)
    {
        //$Post= \DB::table('posts') -> where('slug',$Slug) -> first();
        //$Post= Post::where('slug',$Slug) -> first();
        //dd($Post);
        // if(!$Post)
        //     abort(404);
        return view('post',[
            'post' => Post::where('slug',$Slug) -> firstOrFail()
        ]);
    }
}
