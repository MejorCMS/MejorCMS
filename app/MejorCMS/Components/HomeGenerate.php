<?php
/**
 *
 * User: @elefanteweb
 * Email:jrodas4044@gmail.com
 * Date: 7/07/14
 * Time: 09:14 PM
 */

namespace MejorCMS\Components;
use MejorCMS\Repositories\Articles;
use MejorCMS\Components\HtmlGenerate;
class HomeGenerate {
    protected  $article;
    public function  __construct(Articles $articles ){
        $this->articles=$articles;
    }
    public function getFeatured(){
        $articles=$this->articles->featuredArticles();
        $data='';
        foreach($articles as $article){
            $url='article/'.$article->slug.'/'.$article->id;
            $data=$data.
                    HtmlGenerate::article([
                    HtmlGenerate::link($url,HtmlGenerate::title(2,$article->title)),
                    HtmlGenerate::div(
                        'Categoria:'.
                        HtmlGenerate::link(
                            '',
                            $article->category->title)
                        ),
                    HtmlGenerate::div(
                        'Autor:'.
                        HtmlGenerate::link(
                            '',
                            $article->user->first_name)
                    ),
                    HtmlGenerate::div($article->content),
                ]);
        }
        return $data;
    }

} 