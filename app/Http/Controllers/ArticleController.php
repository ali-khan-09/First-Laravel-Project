<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public  function show(Article $article)
    {
        return view("articles.show",[
            "article"=> $article
        ]);
    }

    public  function  index()
    {
        return view("articles.article",[
           "articles"=>Article::latest()->get()
        ]);
    }

    public function  create()
    {
        return view("articles.create");
    }

    public function store()
    {

        Article::create($this->validateArticle());
        return redirect("/article");
    }

    public function edit(Article  $article)
    {

        return view("articles.edit",compact("article"));
    }

    public function update(Article  $article)
    {

        $article->update($this->validateArticle());
        return redirect(route("article.show",$article));
    }

    /**
     * @return array
     */
    public function validateArticle(): array
    {
        $validatedAtrr = request()->validate([
            "title" => ['required'],
            "excerpt" => ['required'],
            "body" => ['required'],
        ]);
        return $validatedAtrr;
    }

}
