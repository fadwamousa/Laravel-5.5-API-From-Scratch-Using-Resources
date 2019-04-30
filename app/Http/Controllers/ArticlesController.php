<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use App\Http\Resources\Article as ArticleResource;
class ArticlesController extends Controller
{

    public function index()
    {

      //we use resource to design the data form
        $articles = Article::paginate(12);
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
