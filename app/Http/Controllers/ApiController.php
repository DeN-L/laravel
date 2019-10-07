<?php

namespace App\Http\Controllers;

use App\ArticleModel;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAll() {
        return ArticleModel::all();
    }

    public function getArticle($id) {
        return ArticleModel::find($id);
    }
}
