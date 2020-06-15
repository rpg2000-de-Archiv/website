<?php

namespace App\Models;

use App\Models\Base\Rpgmakertool as BaseRpgmakertool;

class Rpgmakertool extends BaseRpgmakertool
{
	protected $fillable = [
		'filepath',
		'filename',
		'fileversion',
		'filedescription'
	];
}
