<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\DataRow;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DataType
 * 
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $display_name_singular
 * @property string $display_name_plural
 * @property string|null $icon
 * @property string|null $model_name
 * @property string|null $policy_name
 * @property string|null $controller
 * @property string|null $description
 * @property bool $generate_permissions
 * @property int $server_side
 * @property string|null $details
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|DataRow[] $data_rows
 *
 * @package App\Models\Base
 */
class DataType extends Model
{
	protected $table = 'data_types';

	protected $casts = [
		'generate_permissions' => 'bool',
		'server_side' => 'int'
	];

	public function data_rows()
	{
		return $this->hasMany(DataRow::class);
	}
}
