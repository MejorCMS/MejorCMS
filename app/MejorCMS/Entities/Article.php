<?php
namespace MejorCMS\Entities;

class Article extends \Eloquent {
	protected $fillable = [];
    public function category(){
        return $this->belongsTo('MejorCMS\Entities\Category');
    }
    public function user(){
     return $this->hasOne('MejorCMS\Entities\User','id','user_id');
    }

}