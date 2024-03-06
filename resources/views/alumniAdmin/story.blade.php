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
            <h1 class="page-header">Add Alumni Story</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <form role="form" action="{{ url('/admin/story-store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group col-md-12">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="form-group col-md-12">
                                <label>Story</label>
                                <input type="text" name="story" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-primary">Add Story</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection