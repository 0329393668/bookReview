<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function blog()
    {
        $posts = Post::paginate(10);
        return view('blog',["posts"=>$posts]);
    }
}
