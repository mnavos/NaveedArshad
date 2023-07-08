<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //


    public function index()
    {

        $posts = Post::whereHas('user', function ($query) {
            $query->where('name', 'like', 'A%');
        })->with('comments')->get();

                return response()->json(['post'=>$posts]);


    }
}
