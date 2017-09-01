<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSkill extends Model
{
    //
	public $timestamps = false;

	protected $table = 'JobSkills';

        protected $fillable = [
                'jobsID','skillID'
        ];
}
