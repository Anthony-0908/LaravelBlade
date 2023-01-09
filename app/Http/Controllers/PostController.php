<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($postId)
    {
        $post =  post::find($postId);
        return view('post',compact('post'));
    }
}
