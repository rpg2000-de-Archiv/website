<?php

namespace App\Models;

use App\Models\Base\MenuItem as BaseMenuItem;

class MenuItem extends BaseMenuItem
{
	protected $fillable = [
		'menu_id',
		'title',
		'url',
		'target',
		'icon_class',
		'color',
		'parent_id',
		'order',
		'route',
		'parameters'
	];
}
