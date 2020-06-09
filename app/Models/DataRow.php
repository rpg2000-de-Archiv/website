<?php

namespace App\Models;

use App\Models\Base\DataRow as BaseDataRow;

class DataRow extends BaseDataRow
{
	protected $fillable = [
		'data_type_id',
		'field',
		'type',
		'display_name',
		'required',
		'browse',
		'read',
		'edit',
		'add',
		'delete',
		'details',
		'order'
	];
}
