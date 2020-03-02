<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class webController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->limit(3)->get();
        
        echo '<pre>';
        
        return view('index', ['posts'=>$posts,
        ]);
    }
}
