<?php

namespace App\Models;

use App\Models\Base\Page as BasePage;

class Page extends BasePage
{
	protected $fillable = [
		'slug',
		'html'
	];
}
