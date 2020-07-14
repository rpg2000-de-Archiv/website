<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hauptnews
 * 
 * @property int $id
 * @property string|null $titel
 * @property string|null $kategorie
 * @property string|null $inhalt
 * @property string|null $autor
 * @property string|null $email
 * @property int|null $date
 *
 * @package App\Models\Base
 */
class Hauptnews extends Model
{
	protected $table = 'hauptnews';
	public $timestamps = false;

	protected $casts = [
		'date' => 'int'
	];
}
