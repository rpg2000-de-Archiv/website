<?php

namespace App\Models;

use App\Models\Base\Spieletest as BaseSpieletest;

class Spieletest extends BaseSpieletest
{
	protected $fillable = [
		'name',
		'ordnername',
		'dateiname',
		'size',
		'screenanzahl',
		'story',
		'features',
		't_story',
		'p_story',
		't_chars',
		'p_chars',
		't_feat',
		'p_feat',
		't_map',
		'p_map',
		't_charde',
		'p_charde',
		't_sonst',
		'p_sonst',
		't_moti',
		'p_moti',
		't_diff',
		'p_diff',
		't_atmo',
		'p_atmo',
		't_musik',
		'p_musik',
		't_aufab',
		'p_aufab',
		'fazit',
		'autor'
	];
}
