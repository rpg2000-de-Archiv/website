<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Spieletest
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $ordnername
 * @property string|null $dateiname
 * @property string|null $size
 * @property int|null $screenanzahl
 * @property string|null $story
 * @property string|null $features
 * @property string|null $t_story
 * @property int|null $p_story
 * @property string|null $t_chars
 * @property int|null $p_chars
 * @property string|null $t_feat
 * @property int|null $p_feat
 * @property string|null $t_map
 * @property int|null $p_map
 * @property string|null $t_charde
 * @property int|null $p_charde
 * @property string|null $t_sonst
 * @property int|null $p_sonst
 * @property string|null $t_moti
 * @property int|null $p_moti
 * @property string|null $t_diff
 * @property int|null $p_diff
 * @property string|null $t_atmo
 * @property int|null $p_atmo
 * @property string|null $t_musik
 * @property int|null $p_musik
 * @property string|null $t_aufab
 * @property string|null $p_aufab
 * @property string|null $fazit
 * @property string|null $autor
 *
 * @package App\Models\Base
 */
class Spieletest extends Model
{
	protected $table = 'Spieletests';
	public $timestamps = false;

	protected $casts = [
		'screenanzahl' => 'int',
		'p_story' => 'int',
		'p_chars' => 'int',
		'p_feat' => 'int',
		'p_map' => 'int',
		'p_charde' => 'int',
		'p_sonst' => 'int',
		'p_moti' => 'int',
		'p_diff' => 'int',
		'p_atmo' => 'int',
		'p_musik' => 'int'
	];
}
