<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sayidan_h1.kenzap.com/event-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jun 2018 18:03:18 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="icon" href="favicon.ico" type="image/ico" />
    <link rel="stylesheet" type="text/css" href="{{ asset('alumni/') }}/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('alumni/') }}/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('alumni/') }}/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('alumni/') }}/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('alumni/') }}/css/meanmenu.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('alumni/') }}/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script src="{{ asset('alumni/') }}/js/libs/modernizr.custom.js"></script>
    <title>Daffodil Alumni Association</title>
</head>
<body>
<div class="main-wrapper page">
    @include('alumni.header')
    <div class="content-wrapper">
        <!--begin event-->
        <div class="event">
            <div class="event-img">
                <div class="container">
                    <img class="img-responsive" src="{{ asset('/').$event->image }}" alt="">
                    {{--<div class="event-time animated fadeIn">--}}
                        {{--<div id="time-event">--}}

                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
            <div class="event-content">
                <div class="container">
                    <div class="event-detail text-center">
                        <div class="dates"> <p class="text-light">{{ $event->date }}</p></div>
                        <div class="event-detail-title">
                            <h1 class="heading-bold">{{ $event->title }}</h1>
                            <h3 class="text-light" style="text-align: center">Seat Availability: {{ $event->vacciences }}</h3>
                        </div>
                        <div class="place">
                            <span class="icon icon-map"></span>
                            <span class="place-text text-light"> {{ $event->address }}</span>
                        </div>

                    </div>
                    <div class="event-descriptiion">
                        <p class="text-light">{{ $event->description }}</p>
                    </div>
                    <div class="join-now text-center">
                        <a href="#" class="text-bold bnt bnt-theme">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end event-->

        <!--begin newsletter-->
        <div class="newsletter newsletter-parallax type2">
            <div class="container">
                <div class="newsletter-wrapper text-center">
                    <div class="newsletter-title">
                        <h2 class="heading-light">Don’t Miss Our Wonderful Events</h2>
                        <p class="text-white">Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
                    </div>
                    <form name="subscribe-form" target="_blank" class="form-inline">
                        <input type="text" class="form-control text-center form-text-light" name="EMAIL" value="" placeholder="E-mail Address" >
                        <button type="submit" class="button bnt-theme">subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <!--end newsletter-->

    </div>
    <!--End content wrapper-->
    <!--Begin footer wrapper-->
    @include('alumni.footer');
    <!--End footer wrapper-->
</div>

<script src="{{ asset('alumni/') }}/js/libs/jquery-2.2.4.min.js"></script>
<script src="{{ asset('alumni/') }}/js/libs/bootstrap.min.js"></script>
<script src="{{ asset('alumni/') }}/js/libs/owl.carousel.min.js"></script>
<script src="{{ asset('alumni/') }}/js/libs/jquery.meanmenu.js"></script>
<script src="{{ asset('alumni/') }}/js/libs/jquery.syotimer.js"></script>
<script src="{{ asset('alumni/') }}/js/libs/parallax.min.js"></script>
<script src="{{ asset('alumni/') }}/js/libs/jquery.waypoints.min.js"></script>
<script src="{{ asset('alumni/') }}/js/custom/main.js"></script>
{{--<script>--}}
    {{--jQuery(document).ready(function () {--}}
        {{--$('#time').syotimer({--}}
            {{--year: 2016,--}}
            {{--month: 12,--}}
            {{--day: 7,--}}
            {{--hour: 7,--}}
            {{--minute: 7,--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}
</body>

<!-- Mirrored from sayidan_h1.kenzap.com/event-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jun 2018 18:03:18 GMT -->
</html>