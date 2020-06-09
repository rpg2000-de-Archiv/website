<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NewsAuthor
 * 
 * @property int $id
 * @property string $username
 * @property string $contact
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Base
 */
class NewsAuthor extends Model
{
	protected $table = 'news_author';
}
