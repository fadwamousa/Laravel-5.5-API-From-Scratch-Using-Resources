<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Resources\Article as ArticleResource;
class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Article::paginate(15);
        return ArticleResource::collection($articles);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }



    public function destroy($id)
    {
        //
    }
}
