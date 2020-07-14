<?php

namespace App\Models;

use App\Models\Base\Hauptnews as BaseHauptnews;

class Hauptnews extends BaseHauptnews
{
	protected $fillable = [
		'titel',
		'kategorie',
		'inhalt',
		'autor',
		'email',
		'date'
	];
}
