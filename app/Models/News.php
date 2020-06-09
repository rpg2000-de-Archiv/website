<?php

namespace App\Models;

use App\Models\Base\News as BaseNews;

class News extends BaseNews
{
	protected $fillable = [
		'orig_date',
		'title',
		'content',
		'author_id'
	];

	public function author(){
	    return $this->hasOne('App\Models\NewsAuthor', 'id', 'author_id');
    }
}
