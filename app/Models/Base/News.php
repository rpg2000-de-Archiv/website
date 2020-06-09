<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * 
 * @property int $id
 * @property Carbon $orig_date
 * @property string $title
 * @property string $content
 * @property int $author_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Base
 */
class News extends Model
{
	protected $table = 'news';

	protected $casts = [
		'author_id' => 'int'
	];

	protected $dates = [
		'orig_date'
	];
}
