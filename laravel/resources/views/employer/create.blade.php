@extends('layouts.topbar')

@section('content')
<div id='wrapper'>
	<div class="main-page-title"><!-- start main page title -->
		<div class="container">
			<div class="post-job-title">Post a Job</div>
		</div>
	</div><!-- end main page title -->
	<div class="container">
		<div class="spacer-1">&nbsp;</div>
			<div class="row">
				<div class="col-md-12">
					<form role="form" class="post-job-form" method="POST" action="/employer">
						 {{ csrf_field() }}
						<div class="form-group">
							<label for="jobtitle">Job Title</label>
							<input class="form-control input" id="jobtitle" type="text" name="jobtitle" value="{{ old('jobtitle') }}">
						</div>

						<div class="form-group">
							<label for="joblocation">Job Location <span>(Optional)</span></label>
							<input class="form-control input" id="joblocation" type="text" name="joblocation" value="{{ old('joblocation') }}">
							<p>Leave this blank if the job can be done from anywhere (i.e. lorem ipsum)</p>
						</div>

						

						<div class="row">
							

							<div class="form-group col-md-12">
								<label for="jobregion">Job Category</label>
								<select class="form-control" name="jobcategory" >
									<option >Select an option</option>
									<option value='1'>IT & Telecoms</option>
									<option value='2'>Trades & Services</option>
									<option value='3'>IT & Telecoms</option>
									<option value='4'>Trades & Services</option>
									<option value='5'>Accounting & Auditing</option>
									<option value='6'>Legal</option>
									<option value='7'>Accounting & Auditing</option>
									<option value='8'>Legal</option>
								</select>
							</div>
						</div>

						

						<div class="form-group">
							<label for="jobtag">Job Description</label>
							<textarea class="form-control textarea" name="jobcdesc" value="{{ old('jobdesc') }}"></textarea>
						</div>

						<div class="form-group">
							<label for="appemail">Application Email / URL</label>
							<input class="form-control input" id="appemail" type="text" name="appemail" value="{{ old('appemail') }}">
						</div>

						<div class="form-group">
							<label for="closedate">Closing Date</label>
							<input class="form-control input" id="closedate" type="datetime-local" name="jobcenddate" value="{{ old('jobcategory') }}">
						</div>

						<h3>Company Details</h3>
						<div class="row">
							<div class="form-group col-md-4">
								<label for="companyname">Company Name</label>
								<input class="form-control input" id="companyname" type="text" name="companyname" value="{{ old('companyname') }}">
							</div>

							<div class="form-group col-md-4">
								<label for="tagline">Company Website</label>
								<input class="form-control input" id="tagline" type="text" name="jobweb" value="{{ old('jobweb') }}">
							</div>
							<div class="form-group col-md-4">
								<label for="email">Your Email</label>
								<input class="form-control input" id="email" type="email" name="jobemail" value="{{ old('jobemail') }}">
							</div>
						</div>

						<div class="row">
							<div class="form-group col-md-6">
								<label for="companyname">Company Location</label>
								<input class="form-control input" id="companyname" type="text" name="joblocation" value="{{ old('joblocation') }}">
							</div>

							<div class="form-group col-md-6">
								<label for="tagline">Industry</label>
								<input class="form-control input" id="tagline" type="text" name="jobindur" value="{{ old('jobindur') }}">
							</div>
							
						</div>

						<div class="form-group">
							<label for="jobtag">Description</label>
							<textarea class="form-control textarea" name="compdesc1" value="{{ old('jobdesc1') }}"></textarea>
						</div>
						<div class="row">
							<div class="form-group col-md-6">
								
							</div>
							<div class="form-group col-md-6">
								
							</div>
							<div class="clearfix"></div>
							<div class="form-group col-md-6">
								
							</div>
							<div class="form-group col-md-6">
								
							</div>
						</div>

						<h3>Skills</h3>
						<div class="row">
			                <div class="col-sm-1">
			                    <div class="form-group">
			                        <label>Windows<input class="form-control" type="checkbox" name="skillwindows" value="4"></label>                        
			                    </div><!-- /.form-group -->                    
			                </div><!-- /.col-* -->
			                <div class="col-sm-1">
			                  <div class="form-group">
			                          <label>Python<input class="form-control" type="checkbox" name="skillpython" value="2"></label>                        
			                  </div><!-- /.form-group -->
			                </div><!-- /.col-* -->      
			                <div class="col-sm-1">
			                    <div class="form-group">
			                        <label>CSS<input class="form-control" type="checkbox" name="skillcss" value="5"></label>                        
			                    </div><!-- /.form-group -->                    
			                </div><!-- /.col-* -->
			                    

			                <div class="col-sm-1">
			                    <div class="form-group">
			                        <label>Php<input class="form-control" type="checkbox" name="skillphp" value="3"></label>                        
			                    </div><!-- /.form-group -->                    
			                </div><!-- /.col-* -->
			                <div class="col-sm-1">
			                  <div class="form-group">
			                          <label>Java<input class="form-control" type="checkbox" name="skilljava" value="1"></label>                        
			                  </div><!-- /.form-group -->
			                </div><!-- /.col-* -->      
			                <div class="col-sm-1">
			                    <div class="form-group">
			                        <label>Json<input class="form-control" type="checkbox" name="skilljson" value="8"></label>                        
			                    </div><!-- /.form-group -->                    
			                </div><!-- /.col-* -->
			                <div class="col-sm-1">
			                  <div class="form-group">
			                          <label>XML<input class="form-control" type="checkbox" name="skillxml" value="9"></label>                        
			                  </div><!-- /.form-group -->
			                </div><!-- /.col-* --> 
			                <div class="col-sm-1">
			                    <div class="form-group">
			                        <label>Linux<input class="form-control" type="checkbox" name="skillLinux" value="3"></label>                        
			                    </div><!-- /.form-group -->                    
			                </div><!-- /.col-* -->
			                <div class="col-sm-1">
			                  <div class="form-group">
			                          <label>C#<input class="form-control" type="checkbox" name="skillc" value="10"></label>                        
			                  </div><!-- /.form-group -->
			                </div><!-- /.col-* -->     
			            </div><!-- /.row -->
			            <div class="row">
			              <div class="col-sm-3">
			                  <div class="form-group">
			                          <label>Documentation<input class="form-control" type="checkbox" name="skilldoc" value="7"></label>                        
			                  </div><!-- /.form-group -->
			                </div><!-- /.col-* --> 
			                <div class="col-sm-3">
			                    <div class="form-group">
			                        <label>Good communication Skills<input class="form-control" type="checkbox" name="skiilcomm" value="6"></label>                        
			                    </div><!-- /.form-group -->                    
			                </div><!-- /.col-* -->
			                  
			            </div>
						
						<div class="form-group">
							<label for="logo">Upload CV <small>Max. file size: 8 MB.</small></label>
							<div class="upload">
								<input id="logo" type="file" name="cvupload" value="{{ old('jobcategory') }}">
							</div>
						</div>
						

						<div class="form-group">
							<button class="btn btn-default btn-green">POST A JOB</button>
						</div>
					</form>
			<div class="spacer-2">&nbsp;</div>
		</div>		
	</div>
</div>	
@endsection

