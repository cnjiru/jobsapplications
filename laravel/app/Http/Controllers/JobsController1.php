<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    //
	public function index(){
                return view('job.view');
        }

	public function apply($jodID){
                return view('job.apply');
        }
}
