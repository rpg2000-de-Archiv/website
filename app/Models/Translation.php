<?php

namespace App\Models;

use App\Models\Base\Translation as BaseTranslation;

class Translation extends BaseTranslation
{
	protected $fillable = [
		'table_name',
		'column_name',
		'foreign_key',
		'locale',
		'value'
	];
}
