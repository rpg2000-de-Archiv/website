<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\DataType;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DataRow
 * 
 * @property int $id
 * @property int $data_type_id
 * @property string $field
 * @property string $type
 * @property string $display_name
 * @property bool $required
 * @property bool $browse
 * @property bool $read
 * @property bool $edit
 * @property bool $add
 * @property bool $delete
 * @property string|null $details
 * @property int $order
 * 
 * @property DataType $data_type
 *
 * @package App\Models\Base
 */
class DataRow extends Model
{
	protected $table = 'data_rows';
	public $timestamps = false;

	protected $casts = [
		'data_type_id' => 'int',
		'required' => 'bool',
		'browse' => 'bool',
		'read' => 'bool',
		'edit' => 'bool',
		'add' => 'bool',
		'delete' => 'bool',
		'order' => 'int'
	];

	public function data_type()
	{
		return $this->belongsTo(DataType::class);
	}
}
