<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Spiele
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $sprache
 * @property string|null $autor
 * @property string|null $email
 * @property string|null $size
 * @property string|null $punkte
 * @property string|null $sonstiges
 * @property string|null $beschreibung
 * @property string|null $beschreibung_us
 * @property string|null $homepage
 * @property string|null $verzeichnis
 * @property string|null $dateiname
 * @property string|null $test
 * @property string|null $sektion
 * @property string|null $version
 * @property int $downloads
 * @property int $punkte_user
 * @property int $abstimmungen
 * @property int|null $date
 *
 * @package App\Models\Base
 */
class Spiele extends Model
{
	protected $table = 'spiele';
	public $timestamps = false;

	protected $casts = [
		'downloads' => 'int',
		'punkte_user' => 'int',
		'abstimmungen' => 'int',
		'date' => 'int'
	];
}
