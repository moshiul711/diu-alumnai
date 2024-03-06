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
    <!--Begin header ưrapper-->
@include('alumni.header')
<!--End header wrapper-->

    <!--Begin content wrapper-->
    <div class="content-wrapper">

        <!--begin upcoming event-->
        <div class="program-upcoming-event">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="area-img">
                            <img class="img-responsive animate zoomIn" src="{{ asset('/').$event->image }}" alt="">
                            <div id="time-event" class="animated fadeIn"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="area-content">
                            <div class="area-top">
                                <div class="top-section animated lightSpeedIn">
                                    <h5 class="heading-light">UPCOMING EVENT</h5>
                                    <span class="dates text-white text-uppercase">{{ $event->date }}</span>
                                </div>
                                <h2 class="heading-bold animated rollIn">{{ $event->title }}</h2>
                                <span class="animated fadeIn">
                                <span class="icon map-icon"></span>
                                <span class="text-place text-white">{{ $event->address }}</span>
                            </span>
                            </div>
                            <div class="area-bottom animated zoomInLeft">
                                <a href="{{ URL::to('/eventDetails/'.$event->idprogram_events ) }}" class="bnt bnt-theme join-now">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end upcoming event-->

        <!--begin event calendar-->
        <div class="event-calendar">
            <div class="container">
                <div class="top-section text-center">
                    <h4>All Alumni Events</h4>
                </div>

                <div class="event-list-content">
                    <?php
                    foreach ($events as $event){?>
                    <div class="event-list-item">
                        <div class="date-item">
                            <?php $date = $event->date;
                            $a = explode('-',$date);
                            ?>
                            <span class="day text-bold color-theme"><?=$a[1]?></span>
                            <span class="dates text-gray text-uppercase"><?=$a[2]?></span>
                        </div>
                        <div class="date-desc-wrapper">
                            <div class="date-desc">
                                <div class="date-title"><h4 class="heading-regular"><a href="#">{{ $event->title }}</a></h4></div>
                                <div class="date-excerpt">
                                    <p>{{ substr($event->description,'0','500') }}</p>
                                </div>
                                <div class="place">
                                    <span class="icon map-icon"></span>
                                    <span class="text-place">{{ $event->address }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="date-links sold-out text-center">
                            <a href="#" class="text-regular">REGISTER</a>
                            <span class="limit">Limited! 1 seat left</span>
                        </div>
                    </div>
                        <?php }?>
                </div>
            </div>
        </div>
        <!--end event calendar-->

        <!--begin newsletter-->
        <div class="newsletter newsletter-parallax">
            <div class="container">
                <div class="newsletter-wrapper text-center">
                    <div class="newsletter-title">
                        <h2 class="heading-light">Keep Up and Join Our Newsletter</h2>
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