<?php
/**
 * Created by PhpStorm.
 * User: elefante
 * Date: 29/06/14
 * Time: 09:00 PM
 */
namespace MejorCMS\Repositories;
use MejorCMS\Entities\Article;
use MejorCMS\Entities\Category;
class Articles {
    public function featuredArticles(){
        $data=Article::where('featured','=',true)->get();
        return $data;
    }


} 