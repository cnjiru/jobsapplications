<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
	public $timestamps = false;

	protected $primaryKey = 'jobsID';

	protected $fillable = [
        	'employerID','dateCreated','jobDescription','endDate','active','jobCategoryID','location','jobTitle'
    	];
}
