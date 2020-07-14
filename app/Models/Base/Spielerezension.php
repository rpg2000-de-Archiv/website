<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Spielerezension
 * 
 * @property int $id
 * @property string|null $titel
 * @property string|null $spiel
 * @property string|null $inhalt
 * @property string|null $autor
 * @property string|null $email
 * @property string|null $wertung
 * @property int|null $date
 *
 * @package App\Models\Base
 */
class Spielerezension extends Model
{
	protected $table = 'Spielerezension';
	public $timestamps = false;

	protected $casts = [
		'date' => 'int'
	];
}
