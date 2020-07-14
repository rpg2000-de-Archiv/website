<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Potm
 * 
 * @property int $id
 * @property Carbon $potm_date
 * @property string $description
 * @property int $filename
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Base
 */
class Potm extends Model
{
	protected $table = 'potms';

	protected $casts = [
		'filename' => 'int'
	];

	protected $dates = [
		'potm_date'
	];
}
