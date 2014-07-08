<?php
    /**
     *
     * User: @elefanteweb
     * Email:jrodas4044@gmail.com
     * Date: 7/07/14
     * Time: 09:14 PM
     */

namespace MejorCMS\Components;


class HtmlGenerate {
      static public function article($data=[]){
        $html='<article>';
        foreach($data as $item ){
            $html=$html.$item;
        }
        return $html;
      }

      static public function div($content='El Conocimiento es limitado, la imaginacion no.'){
          $html='<div>'.$content.'</div>';
          return $html;
      }
    static public function link($href='/',$content){
        $html='<a href='.$href.'>'.$content.'</a>';
        return $html;
    }
      static public function  title($h='1',$title='MejorCMS'){
          $html='<h'.$h.'>'.$title.'</h'.$h.'>';
          return  $html;
      }


} 