<?php

namespace App\Models;

use App\Models\Base\NewsAuthor as BaseNewsAuthor;

class NewsAuthor extends BaseNewsAuthor
{
	protected $fillable = [
		'username',
		'contact'
	];
}
