<?php

namespace App\Models;

use App\Models\Base\Contest as BaseContest;

class Contest extends BaseContest
{
	protected $fillable = [
		'title',
		'status',
		'usercount',
		'shortdescription',
		'rules',
		'notes',
		'submission_notes',
		'reward'
	];

    public function submissions(){
        return $this->hasMany('App\Models\ContentSubmission', 'contest_id', 'id')->orderBy('place')->get();
    }
}
