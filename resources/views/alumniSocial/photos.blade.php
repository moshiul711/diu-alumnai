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
                                    <ul class="photos">
                                        @foreach($photos as $photo)
                                        <li>
                                            <a class="strip" href="{{ asset('/').$photo->image }}" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                <img src="{{ asset('/').$photo->image }}" alt="">
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                                </div><!-- photos -->
                            </div>
                            @include('alumniSocial.chatting')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('alumniSocial.footer')
