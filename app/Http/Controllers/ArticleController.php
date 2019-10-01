<?php

namespace App\Http\Controllers;

use App\ArticleModel;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $x_articles = ArticleModel::all();
        return view('frontend.blog.index', [
            'x_articles' => $x_articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $o_article = ArticleModel::find($id);
        return view('frontend/blog/show', [
            'html_id' => $o_article->id,
            'html_title' => $o_article->title,
            'html_text' => $o_article->text
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ArticleModel  $articleModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleModel $articleModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ArticleModel  $articleModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticleModel $articleModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ArticleModel  $articleModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleModel $articleModel)
    {
        //
    }
}
