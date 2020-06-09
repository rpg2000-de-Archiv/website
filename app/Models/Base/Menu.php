<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\MenuItem;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|MenuItem[] $menu_items
 *
 * @package App\Models\Base
 */
class Menu extends Model
{
	protected $table = 'menus';

	public function menu_items()
	{
		return $this->hasMany(MenuItem::class);
	}
}
