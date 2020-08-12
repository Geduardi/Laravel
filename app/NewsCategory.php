<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCategory
{
    private static $newsCategory = [
        '1' => [
            'id' => 1,
            'title' => 'Хорошие новости'
        ],
        '2'=> [
            'id' => 2,
            'title' => 'Плохие новости'
        ]
    ];

    public static function getNewsCategory() {
        return static::$newsCategory;
    }

    public static function getNewsCategoryId($id) {
        $filteredNews = [];
        foreach (News::getNews() as $news) {
            if ($news['category_id'] == $id) {
                $filteredNews[] = $news;
            }
        }
        return $filteredNews;
//        return null;
    }
}
