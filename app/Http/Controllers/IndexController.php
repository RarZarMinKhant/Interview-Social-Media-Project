<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index(){
        $posts = Post::latest()->get();
        return view('index',compact('posts'));
    }
}
