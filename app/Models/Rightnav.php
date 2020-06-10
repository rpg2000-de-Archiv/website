<?php

namespace App\Models;

use App\Models\Base\Rightnav as BaseRightnav;

class Rightnav extends BaseRightnav
{
	protected $fillable = [
		'route',
		'content'
	];
}
