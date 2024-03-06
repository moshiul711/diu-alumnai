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
            <h1 class="page-header">Add Slider</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <form role="form" action="{{ url('/admin/slider-store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group col-md-12">
                                <label>Slider Title-1</label>
                                <input type="text" name="title1" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Slider Image</label>
                                <input type="file" name="image1" class="form-control">
                            </div>

                            <div class="form-group col-md-12">
                                <label>Slider Title-2</label>
                                <input type="text" name="title2" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Slider Image</label>
                                <input type="file" name="image2" class="form-control">
                            </div>

                            <div class="form-group col-md-12">
                                <label>Slider Title-3</label>
                                <input type="text" name="title3" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Slider Image</label>
                                <input type="file" name="image3" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-primary">Add Slider</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection