<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // $allCategories = ['Category 1', 'Category 2'];
        $categories = category::all();
        $posts = post::where('category_id' , request('category_id'))->latest()->get();
        

        return view('index' ,  compact('categories', 'posts'));
        // return view('index', [
        //     'post' => $posts,
        //     'categories' => $allCategories
        // ]);
    }
}
