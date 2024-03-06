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
            <h1 class="page-header">Executive Member Registration</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <form role="form" action="{{ url('/admin/executive-store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group col-md-12">
                                <label>Executive ID</label>
                                <input type="text" name="executive_id" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Executive Name</label>
                                <input type="text" name="executive_name" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Executive Email</label>
                                <input type="text" name="executive_email" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Designation</label>
                                <input type="text" name="executive_designation" class="form-control">
                            </div>

                            <div class="form-group col-md-12">
                                <label>Phone</label>
                                <input type="text" name="executive_phone" class="form-control">
                            </div>

                            <div class="form-group col-md-12 pull-right">
                                <button type="submit" class="btn btn-primary">Register Executive</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection