<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        $news = [];
        return view('news.news')->with('news', News::getNews());
    }

    public function show($id) {
        return view('news.newsOne')->with('news', News::getNewsId($id));
    }
}
