<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Rpgmakertool
 * 
 * @property int $id
 * @property string $filepath
 * @property string $filename
 * @property string $fileversion
 * @property string $filedescription
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Base
 */
class Rpgmakertool extends Model
{
	protected $table = 'rpgmakertools';
}
