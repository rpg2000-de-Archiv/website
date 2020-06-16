<?php

namespace App\Models;

use App\Models\Base\ContentSubmission as BaseContentSubmission;

class ContentSubmission extends BaseContentSubmission
{
	protected $fillable = [
		'contest_id',
		'place',
		'username',
		'submission1title',
		'submission1url',
		'submission2title',
		'submission2url',
		'submission3title',
		'submission3url',
		'points'
	];
}
