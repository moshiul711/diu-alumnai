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
            <h1 class="page-header">Alumni Member Registration</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <form role="form" action="{{ url('/admin/alumni-store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group col-md-6">
                                <label>Alumni ID</label>
                                <input type="text" name="alumni_id" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Alumni Name</label>
                                <input type="text" name="alumni_name" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Alumni Email</label>
                                <input type="text" name="alumni_email" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Department</label>
                                <input type="text" name="alumni_department" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Phone</label>
                                <input type="text" name="alumni_phone" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Graduation Year</label>
                                <select name="graduate_year"  class="form-control">
                                    <option value="">Select</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-primary">Register Alumni</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection