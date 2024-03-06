<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.wpkixx.com/html/winku/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Dec 2018 13:41:14 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Alumni Dashboard</title>
    <link rel="icon" href="{{ asset('/alumniSocial/') }}/images/fav.ico" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{ asset('/alumniSocial/') }}/css/main.min.css">
    <link rel="stylesheet" href="{{ asset('/alumniSocial/') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('/alumniSocial/') }}/css/color.css">
    <link rel="stylesheet" href="{{ asset('/alumniSocial/') }}/css/responsive.css">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">

    @include('alumniSocial.header')

    <section>
        <div class="gap gray-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row" id="page-contents">
                        @include('alumniSocial.sidebar')<!-- sidebar -->
                            <div class="col-lg-6">
                                <div class="central-meta">
                                    <div class="about">
                                        <div class="personal">
                                            <h5 class="f-title"><i class="ti-info-alt"></i> Personal Info</h5>
                                            <p>
                                                {{ $user->about }}
                                            </p>
                                        </div>
                                        <div class="d-flex flex-row mt-2">
                                            <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" >
                                                <li class="nav-item">
                                                    <a href="#basic" class="nav-link active" data-toggle="tab" >Basic info</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#location" class="nav-link" data-toggle="tab" >location</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#work" class="nav-link" data-toggle="tab" >work and education</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#interest" class="nav-link" data-toggle="tab"  >interests</a>
                                                </li>
                                                {{--<li class="nav-item">--}}
                                                    {{--<a href="#lang" class="nav-link" data-toggle="tab" >languages</a>--}}
                                                {{--</li>--}}
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="basic" >
                                                    <ul class="basics">
                                                        <li><i class="ti-user"></i>{{ $user->name }}</li>
                                                        <li><i class="ti-mobile"></i>{{ $user->phone }}</li>
                                                        <li><i class="ti-email"></i><a href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e79e8892958a868e8ba7828a868e8bc984888a">[{{ $user->email }}]</a></li>
                                                        {{--<li><i class="ti-location-arrow"></i>www.yoursite.com</li>--}}
                                                    </ul>
                                                </div>
                                                <div class="tab-pane fade" id="location" role="tabpanel">
                                                    <div class="location-map" style="margin: auto">
                                                        <i class="ti-location-pin"></i> {{ $user->address }}
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="work" role="tabpanel">
                                                    <div>

                                                        <a href="#" title=""></a>
                                                        <ul class="education">
                                                            <li><i class="ti-facebook"></i> B.Sc from Daffodil International University</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="interest" role="tabpanel">
                                                    <ul class="basics">
                                                        <li>Footbal</li>
                                                        <li>internet</li>
                                                        <li>photography</li>
                                                    </ul>
                                                </div>
                                                {{--<div class="tab-pane fade" id="lang" role="tabpanel">--}}
                                                    {{--<ul class="basics">--}}
                                                        {{--<li>english</li>--}}
                                                        {{--<li>french</li>--}}
                                                        {{--<li>spanish</li>--}}
                                                    {{--</ul>--}}
                                                {{--</div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @include('alumniSocial.chatting')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('alumniSocial.footer')

