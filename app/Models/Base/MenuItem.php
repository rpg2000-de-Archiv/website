<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Menu;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MenuItem
 * 
 * @property int $id
 * @property int|null $menu_id
 * @property string $title
 * @property string $url
 * @property string $target
 * @property string|null $icon_class
 * @property string|null $color
 * @property int|null $parent_id
 * @property int $order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $route
 * @property string|null $parameters
 * 
 * @property Menu $menu
 *
 * @package App\Models\Base
 */
class MenuItem extends Model
{
	protected $table = 'menu_items';

	protected $casts = [
		'menu_id' => 'int',
		'parent_id' => 'int',
		'order' => 'int'
	];

	public function menu()
	{
		return $this->belongsTo(Menu::class);
	}
}
