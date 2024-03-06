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
            <h1 class="page-header">Manage Programs & Events</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>Program ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th>Seat Availability</th>
                        <th>Enrollments</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lists as $list)
                    <tr>
                        <td>{{ $list->idprogram_events }}</td>
                        <td>{{ $list->title }}</td>
                        <td>{{ substr($list->description,'0','50') }}</td>
                        <td>{{ $list->address }}</td>
                        <td>{{ $list->date }}</td>
                        <td>{{ $list->vacciences }}</td>
                        <td>
                            <a href="{{ URL::to('/admin/program-enroll/'.$list->idprogram_events) }}">Enroll List</a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection