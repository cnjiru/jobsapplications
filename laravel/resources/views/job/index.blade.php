@extends('layouts.main')

@section('content')
	@forelse($jobs as $job)
	<div class="job-list">
              <div class="thumb">
                <a href="job-details.html"><img src="assets/img/jobs/img-3.jpg" alt=""></a>
              </div>
              <div class="job-list-content">
                <h4><a href="job-details.html">{{ $job->jobTitle }}</a><span class="part-time">Part-Time</span></h4>
                <p>{{ substr($job->jobDescription, 0,random_int(190,203)) }}</p>
                <div class="job-tag">
                  <div class="pull-left">
                    <div class="meta-tag">
                      <span><a href="browse-categories.html"><i class="ti-home"></i>Finance</a></span>
                      <span><i class="ti-location-pin"></i>{{ $job->location }}</span>
                      <span><i class="ti-time"></i>60/Hour</span>
                    </div>
                  </div>
                  <div class="pull-right">
                    <div class="icon">
                      <i class="ti-heart"></i>
                    </div>
                    <a href="job/{{ $job->jobsID }}" class="btn btn-common btn-rm">More Detail</a>
                  </div>
                </div>
              </div>
            </div>
	@empty
	
	@endforelse
@endsection
