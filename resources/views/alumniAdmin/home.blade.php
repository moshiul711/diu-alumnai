@extends('alumniAdmin.master')
@section('mainContent')
    <div class="row">
        <div class="col-lg-12">
            <div >

                <a class="quick-btn" href="{{ URL::to('/admin/alumni-register') }}">
                    <i class="icon-user icon-2x"></i>
                    <span> Alumni</span>
                </a>

                <a class="quick-btn" href="{{ URL::to('/admin/executive-register') }}">
                    <i class="icon-user-md icon-2x"></i>
                    <span>Executive</span>
                </a>
                <a class="quick-btn" href="{{ URL::to('/admin/job-post') }}">
                    <i class="icon-signal icon-2x"></i>
                    <span>Job</span>
                </a>
                <a class="quick-btn" href="{{ URL::to('/admin/programs') }}">
                    <i class="icon-external-link icon-2x"></i>
                    <span>Program</span>
                </a>
                <a class="quick-btn" href="{{ URL::to('/admin/story') }}">
                    <i class="icon-lemon icon-2x"></i>
                    <span>Story</span>
                </a>

            </div>

        </div>

    </div>
@endsection