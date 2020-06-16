<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContentSubmission
 * 
 * @property int $id
 * @property int $contest_id
 * @property int $place
 * @property string $username
 * @property string|null $submission1title
 * @property string|null $submission1url
 * @property string|null $submission2title
 * @property string|null $submission2url
 * @property string|null $submission3title
 * @property string|null $submission3url
 * @property int|null $points
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Base
 */
class ContentSubmission extends Model
{
	protected $table = 'content_submissions';

	protected $casts = [
		'contest_id' => 'int',
		'place' => 'int',
		'points' => 'int'
	];
}
