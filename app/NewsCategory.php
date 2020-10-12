<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCategory
{
    private static $newsCategory = [
        '1' => [
            'id' => 1,
            'title' => 'Хорошие новости',
            'slug' => 'good'
        ],
        '2'=> [
            'id' => 2,
            'title' => 'Плохие новости',
            'slug' => 'bad'
        ]
    ];

    public static function getNewsCategory() {
        return static::$newsCategory;
    }

    public static function getNewsCategoryIdBySlug($slug){
        foreach (static::getNewsCategory() as $category){
            if ($category['slug'] == $slug){
                return $category['id'];
            }
        }
        return 0;
    }

    public static function getNewsCategoryBySlug($slug) {
        $filteredNews = [];
        $id = static::getNewsCategoryIdBySlug($slug);
        foreach (News::getNews() as $news) {
            if ($news['category_id'] == $id) {
                $filteredNews[] = $news;
            }
        }
        return $filteredNews;
//        return null;
    }
}
