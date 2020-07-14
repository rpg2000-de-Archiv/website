<?php

namespace App\Models;

use App\Models\Base\Potm as BasePotm;

class Potm extends BasePotm
{
	protected $fillable = [
		'potm_date',
		'description',
		'filename'
	];
}
