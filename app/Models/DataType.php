<?php

namespace App\Models;

use App\Models\Base\DataType as BaseDataType;

class DataType extends BaseDataType
{
	protected $fillable = [
		'name',
		'slug',
		'display_name_singular',
		'display_name_plural',
		'icon',
		'model_name',
		'policy_name',
		'controller',
		'description',
		'generate_permissions',
		'server_side',
		'details'
	];
}
