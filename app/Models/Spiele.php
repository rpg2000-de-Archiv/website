<?php

namespace App\Models;

use App\Models\Base\Spiele as BaseSpiele;

class Spiele extends BaseSpiele
{
	protected $fillable = [
		'name',
		'sprache',
		'autor',
		'email',
		'size',
		'punkte',
		'sonstiges',
		'beschreibung',
		'beschreibung_us',
		'homepage',
		'verzeichnis',
		'dateiname',
		'test',
		'sektion',
		'version',
		'downloads',
		'punkte_user',
		'abstimmungen',
		'date'
	];
}
