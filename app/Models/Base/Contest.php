<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Contest
 * 
 * @property int $id
 * @property string $title
 * @property string $status
 * @property string $usercount
 * @property string $shortdescription
 * @property string $rules
 * @property string $notes
 * @property string $submission_notes
 * @property string $reward
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $rules_image
 *
 * @package App\Models\Base
 */
class Contest extends Model
{
	protected $table = 'contests';
}
