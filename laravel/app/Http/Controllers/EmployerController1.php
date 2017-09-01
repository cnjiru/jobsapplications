<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class EmployerController extends Controller
{
    //
	public function index($companyname){
		//$employer=User::whereuserid($companyname)->first();
		$employer = DB::table('employer')->where('employerid', $companyname)->first();
		$employer=json_encode($employer);
                return view('employer.employer',compact($employer));
        }

	public function create(){
		return view('employer.create');
	}
}
