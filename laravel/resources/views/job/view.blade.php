@extends('layouts.topbar')

@section('content')

        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="content-area">
                <h2 class="medium-title">Job Information</h2>
                <div class="box">
                  <div class="text-left">
                    <h3><a href="#">{{ $job->jobTitle }}</a></h3>
                    <p>LemonKids LLC <em>(View All Jobs)</em></p>
                    <div class="meta">
                      <span><a href="#"><i class="ti-location-pin"></i> {{ $job->location }}</a></span>
                      <span><a href="#"><i class="ti-calendar"></i> Dec 30, 2017 - Feb 20, 2018</a></span>
                    </div>
                    <strong class="price"><i class="fa fa-money"></i>$7000 - $7500</strong>
                    <a href="#" class="btn btn-border btn-sm">Freelance</a>
                    <a href="#" class="btn btn-common btn-sm">Apply For This Job</a>
                  </div>                
                  <div class="clearfix">
                    <h4>Overview</h4>
                    <p>{{ $job->jobDescription }}.</p>
                    <h4>Qualification</h4>
                    <p>Minimum of 5 years creative experience in a graphic design studio or advertising ad agency environment is required. Qualified candidates for this role will possess the following education, experience and skills:</p>
                    <ul>
                    <li><i class="ti-check-box"></i>Demonstrated strong and effective verbal, written, and interpersonal communication skills</li>
                    <li><i class="ti-check-box"></i>Must be team-oriented, possess a positive attitude and work well with others</li>
                    <li><i class="ti-check-box"></i>Ability to prioritize and multi-task in a flexible, fast paced and challenging environment</li>
                    </ul>
                    <h4>Key responsibilities also include</h4>
                    <ul>
                    <li><i class="ti-check-box"></i>Provide technical health advice to Head of Country Programmes and field advisors at all key stages of the project management cycle including needs assessment.</li>
                    <li><i class="ti-check-box"></i>Technical strategy and design, implementation as well as sector specific monitoring and evaluation.</li>
                    <li><i class="ti-check-box"></i>This includes travel to field programmes as well as review of proposals, key reports and surveys prior to external submission.</li>
                    <li><i class="ti-check-box"></i>Stay abreast of current best practice. Research and stay informed on academic and technical health and nutrition issues, techniques, and guidelines to inform and improve programming.</li>
                    </ul>
                    <h4>Requirements</h4>
                    <ul>
                    <li><i class="ti-check-box"></i>Must have minimum of 3 years experience running, maneuvering, driving, and navigating equipment such as bulldozer, excavators, rollers, and front-end loaders.</li>
                    <li><i class="ti-check-box"></i>Must have minimum of 3 years experience running, maneuvering, driving, and navigating equipment such as bulldozer, excavators, rollers, and front-end loaders.
                    Strongly prefer candidates with High School Diploma</li>
                    <li><i class="ti-check-box"></i>Must be able to perform physical activities that require considerable use of your arms and legs and moving your whole body, such as climbing, lifting, balancing, walking, stooping, and handling of materials.</li>
                    </ul>
                    <h4>Benefits</h4>
                    <ul>
                    <li><i class="ti-check-box"></i>Must have minimum of 3 years experience running, maneuvering, driving, and navigating equipment such as bulldozer, excavators, rollers, and front-end loaders.</li>
                    <li><i class="ti-check-box"></i>Strongly prefer candidates with High School Diploma</li>
                    <li><i class="ti-check-box"></i>Must be able to perform physical activities that require considerable use of your arms and legs and moving your whole body, such as climbing, lifting, balancing, walking, stooping, and handling of materials.</li>
                    </ul>
                    <a href="#" class="btn btn-common">Apply for this Job Now</a> 
                  </div>
                </div>
              </div>
            </div>            
          </div>
        </div>
@endsection      
