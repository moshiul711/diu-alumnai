<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>Daffodil Alumni Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="{{ asset('alumniAdmin/') }}/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="{{ asset('alumniAdmin/') }}/css/main.css" />
    <link rel="stylesheet" href="{{ asset('alumniAdmin/') }}/css/theme.css" />
    <link rel="stylesheet" href="{{ asset('alumniAdmin/') }}/css/MoneAdmin.css" />
    <link rel="stylesheet" href="{{ asset('alumniAdmin/') }}/plugins/Font-Awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="{{ asset('alumniAdmin/') }}/plugins/wysihtml5/dist/bootstrap-wysihtml5-0.0.2.css" />
    <!--END GLOBAL STYLES -->
    <link href="{{ asset('alumniAdmin/') }}/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

    <link href="{{ asset('alumniAdmin/') }}/css/layout2.css" rel="stylesheet" />
    <link href="{{ asset('alumniAdmin/') }}/plugins/flot/examples/examples.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('alumniAdmin/') }}/plugins/timeline/timeline.css" />

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <link rel="stylesheet" href="{{ asset('alumniAdmin/') }}/css/bootstrap-wysihtml5-hack.css" />
    <style>
        ul.wysihtml5-toolbar > li {
            position: relative;
        }
    </style>
    <![endif]-->
</head>

<body class="padTop53 " style="background-color: white" >
<div id="wrap" style="background-color: white">
    @include('alumniAdmin.navbar')
    <div id="left" style="background-color: white" >

        <ul id="menu" class="collapse">

            <li class="panel ">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                    <i class="icon-pencil"></i> Registration

                    <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    &nbsp; <span class="label label-success">2</span>&nbsp;
                </a>
                <ul class="collapse" id="form-nav">
                    <li class=""><a href="{{ URL::to('/admin/alumni-register') }}"><i class="icon-angle-right"></i> Alumni </a></li>
                    <li class=""><a href="{{ URL::to('/admin/executive-register') }}"><i class="icon-angle-right"></i> Executives </a></li>
                </ul>
            </li>

            <li class="panel">
                <a href="{{ URL::to('/admin/programs') }}" data-parent="#menu" >
                    <i class="icon-table"></i> Program & Events
                </a>
            </li>

            <li class="panel">
                <a href="{{ URL::to('/admin/programs/list') }}" data-parent="#menu" >
                    <i class="icon-table"></i> Program & Events List
                </a>
            </li>

            <li class="panel">
                <a href="{{ URL::to('/admin/job-post') }}" data-parent="#menu" >
                    <i class="icon-table"></i> Job Posting
                </a>
            </li>

            <li class="panel">
                <a href="{{ URL::to('/admin/story') }}" data-parent="#menu" >
                    <i class="icon-table"></i> Story
                </a>
            </li>

        </ul>

    </div>
        <div id="content">
            <div class="inner" style="min-height: 100%">
                @yield('mainContent')
            </div>
        </div>
    {{--@include('alumniAdmin.rightbar')--}}
</div>
@include('alumniAdmin.footer')