<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\News;
use App\NewsCategory;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index() {
        $news = [];
        return view('news.newsCategory')->with('newsCategory', NewsCategory::getNewsCategory());
    }

    public function show($id) {
        return view('news.newsOneCategory')->with('news', NewsCategory::getNewsCategoryId($id));
    }
}
