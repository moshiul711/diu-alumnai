@extends('alumniAdmin.master')
@section('mainContent')
    <div class="row">
        <div class="col-lg-12">
            <?php
            $message =Session::get('message');
            if($message){
                echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>'.$message.'</div>';
                Session::put('message',null);
            }
            ?>
            <h1 class="page-header">Create Job Opportunity</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <form role="form" action="{{ url('/admin/job-store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group col-md-12">
                                <label>Job Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Company Name</label>
                                <input type="text" name="company_name" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Company Location</label>
                                <input type="text" name="location" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Last Date of Application</label>
                                <input type="date" name="deadline" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Description</label>
                                <textarea class="form-control" name="description" id="wysihtml5"></textarea>
                            </div>

                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-primary">Post this Job</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection