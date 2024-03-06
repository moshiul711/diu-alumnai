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
            <h1 class="page-header">Create Programs & Events</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <form role="form" action="{{ url('/admin/programs-store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group col-md-12">
                                <label>Programs Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Description</label>
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Date</label>
                                <input type="date" name="date" class="form-control">
                            </div>

                            <div class="form-group col-md-12">
                                <label>Seat Availability</label>
                                <input type="number" name="vacciences" class="form-control">
                            </div>

                            <div class="form-group col-md-12">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>

                            <div class="form-group col-md-12">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-primary">Programs & Events</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection