<?php

namespace App\Models;

use App\Models\Base\Spielerezension as BaseSpielerezension;

class Spielerezension extends BaseSpielerezension
{
	protected $fillable = [
		'titel',
		'spiel',
		'inhalt',
		'autor',
		'email',
		'wertung',
		'date'
	];
}
