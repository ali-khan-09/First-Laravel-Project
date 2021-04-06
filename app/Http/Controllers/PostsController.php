<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public  function index($data)
    {
        //        dd($value);

      return view("test",[
          "name"=> Post::where("slug",$data)->firstOrFail()
      ]);
    }

    public function show()
    {
        return view("show");
    }
    public  function  about()
    {

        return view("about",[
            "articles"=>Article::take(3)->latest()->get(),
        ]);
    }
}
