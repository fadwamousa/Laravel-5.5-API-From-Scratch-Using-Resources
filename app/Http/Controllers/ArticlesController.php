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



    public function store(Request $request)
    {

          $article = $request->isMethod('put') ? Article::findOrFail($request->id) : new Article;

          $article->id    = $request->id;
          $article->title = $request->title;
          $article->body  = $request->body;
          $article->save();

        return response()->json($article);
    }


    public function show($id)
    {
        $article = Article::findOrFail($id);
        return new ArticleResource($article);
    }



    public function destroy($id)
    {
        //
    }
}
