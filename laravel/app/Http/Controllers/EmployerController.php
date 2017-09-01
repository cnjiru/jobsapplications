<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon;
use App\Employer;
use App\Job;
use App\JobSkill;
class EmployerController extends Controller
{


     //public $timestamps = false;	

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('employer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
	   //return $request->all()
        $date=Carbon\Carbon::now();
        /*$employer= new Employer;

    	$employer->name=$request->companyname;
    	$employer->website=$request->jobweb;
    	$employer->email=$request->jobemail;
    	$employer->datecreated=$request->$date;
    	$employer->address=$request->joblocation;
    	$employer->industry=$request->jobindur;

    	$employer->save();*/

	   $employer= Employer::create([
            'name' => $request->companyname,
            'website' => $request->jobweb,
            'email' => $request->jobemail,
            'dateCreated' => Carbon\Carbon::now(),
            'address'=>$request->joblocation,
            'industry'=>$request->jobindur,
        ]);

        if($employer->id){
    		$job= Job::create([
    			'employerID'=>$employer->id,
    			'dateCreated'=>Carbon\Carbon::now(),
    			'jobDescription'=>$request->jobcdesc,
    			'endDate'=>Carbon\Carbon::now(),
    			'active'=>1,
    			'jobCategoryID'=>$request->jobcategory,
    			'location'=>$request->joblocation,
    			'jobTitle'=>$request->jobtitle,
    		]);
            if($job->id){

                if($request->skilldoc){
                    $jobskill= Jobskill::create([
                        'jobsID' => $job->id,
                        'skillID'=> $request->skilldoc,
                    ]);
                }
                if($request->skiilcomm){
                    $jobskill= Jobskill::create([
                        'jobsID '=> $job->id,
                        'skillID'=> $request->skiilcomm,
                     ]);
                }
                if($request->skilldoc){
                    $jobskill= Jobskill::create([
                        'jobsID' =>  $job->id,
                        'skillID'=> $request->skilldoc,
                     ]);
                }
                if($request->skillc){
                    $jobskill= Jobskill::create([
                        'jobsID' => $job->id,   
                        'skillID'=> $request->skillc,
                     ]);
                }
                if($request->skillLinux){
                    $jobskill= Jobskill::create([
                        'jobsID' => $job->id,   
                        'skillID' => $request->skillLinux,
                     ]);
                }
                if($request->skillxml){
                    $jobskill= Jobskill::create([
                        'jobsID' =>  $job->id,   
                        'skillID'=> $request->skillxml,
                     ]);
                }
                if($request->skilljson){
                    $jobskill= Jobskill::create([
                        'jobsID' =>  $job->id,  
                        'skillID'=>$request->skilljson,
                    ]);
                }
                if($request->skilljava){
                    $jobskill= Jobskill::create([
                        'jobsID' =>  $job->id,   
                        'skillID' => $request->skilljava,
                    ]);
                }
                if($request->skillphp){
                    $jobskill= Jobskill::create([
                        'jobsID' =>  $job->id,   
                        'skillID'=> $request->skillphp,
                    ]);
                }
                if($request->skillcss){
                    $jobskill= Jobskill::create([
                        'jobsID' =>  $job->id,   
                        'skillID'=> $request->skillcss,
                    ]);
                }
                if($request->skillpython){
                    $jobskill= Jobskill::create([
                        'jobsID'=>  $job->id,  
                        'skillID'=> $request->skillpython,
                    ]); 
                }
                if($request->skillwindow){
                    $jobskill= Jobskill::create([
                        'jobsID' =>  $job->id,   
                        'skillID'=> $request->skillwindow,
                     ]);
                 }

            }
        }
	}
    	
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
