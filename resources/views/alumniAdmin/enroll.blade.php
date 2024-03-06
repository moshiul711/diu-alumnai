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
            <h1 class="page-header">Alumni Enrollment to a Programs</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="fresh-table full-color-azure full-screen-table" style="margin-top: 9%">
                            <div class="toolbar">
                                <button id="alertBtn" class="btn btn-default">Programs & Events</button>
                            </div>
                            <table id="fresh-table" class="table">
                                <thead>
                                <th data-field="id">Alumni ID</th>
                                <th data-field="name" data-sortable="true">Name</th>
                                <th data-field="email" data-sortable="true">Email</th>
                                <th data-field="salary" data-sortable="true">Phone</th>
                                </thead>
                                <tbody>
                                @foreach($lists as $list)
                                    <tr>
                                        <td>{{ $list->password }}</td>
                                        <td>{{ $list->name }}</td>
                                        <td>{{ substr($list->email,'0','50') }}</td>
                                        <td>{{ $list->phone }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection