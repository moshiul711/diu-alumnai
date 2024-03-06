<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sayidan_h1.kenzap.com/homepage-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jun 2018 18:08:10 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="icon" href="favicon.ico" type="image/ico" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/alumni') }}/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/alumni') }}/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/alumni') }}/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/alumni') }}/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/alumni') }}/css/meanmenu.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/alumni') }}/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script src="{{ asset('/alumni') }}/js/libs/modernizr.custom.js"></script>
    <title>Daffodil Alumni Association</title>
</head>
<body>
<div class="main-wrapper">
    <!--Begin header ưrapper-->
    @include('front.header')
    <!--End header wrapper-->
    <!--Begin content wrapper-->
    <div class="content-wrapper">
        <!--begin slider-->
        <div class="slider-hero">
            <div class="sliders-wrap columns1">
                <div class="item">
                    <img src="{{ asset('/alumni') }}/images/slider2.jpg" alt="">
                    <div class="owl-caption">
                        <div class="container">
                            <div class="content-block">
                                <h2 class="text-center">
                                    <span class="text-bold">Hearty Welcomes with </span> <br />
                                    <span class="text-white">a Touch of Rivalry</span>
                                </h2>
                                <a href="#" class="bnt bnt-theme read-story">READ STORY</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('/alumni') }}/images/slider1.jpg" alt="">
                    <div class="owl-caption">
                        <div class="container">
                            <div class="content-block">
                                <h2>
                                    <span class="text-bold">SAYIDAN professor explores</span> <br />
                                    <span class="text-white">marine biology with teens</span>
                                </h2>
                                <a href="#" class="bnt bnt-theme read-story">READ ARTICLE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('/alumni') }}/images/slider2.jpg" alt="">
                    <div class="owl-caption">
                        <div class="container">
                            <div class="content-block">
                                <h2>
                                    <span class="text-bold">Hearty Welcomes with </span> <br />
                                    <span class="text-white">a Touch of Rivalry</span>
                                </h2>
                                <a href="#" class="bnt bnt-theme read-story">READ STORY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end slider-->

        <!--begin upcoming event-->
        <div class="upcoming-event">
            <div class="container">
                <div class="row">
                    <div class="area-img col-md-5 col-sm-12 col-xs-12">
                        <img class="img-responsive animated zoomIn" src="{{ asset('/'.$event->image) }}" alt="">
                    </div>
                    <div class="area-content col-md-7 col-sm-12 col-xs-12">
                        <div class="area-top">
                            <div class="row">
                                <div class="col-sm-10 col-xs-9">
                                    <h5 class="heading-light no-margin animated fadeInRight">UPCOMING EVENT</h5>
                                    <h2 class="heading-bold animated fadeInLeft"><a href="{{ URL::to('/eventDetails/'.$event->idprogram_events ) }}">{{ $event->title }}</a></h2>
                                    <span>
                                        <span class="icon map-icon"></span>
                                        <span class="text-place text-light animated fadeInRight">{{ $event->address }}</span>
                                    </span>
                                </div>
                                <div class="col-sm-2 col-xs-3">
                                    <div class="area-calendar calendar animated slideInRight">
                                        <span class="day text-bold">
                                            <?php $date = $event->date;
                                            $a = explode('-',$date);
                                            echo $a[2];?>
                                        </span>
                                        <span class="month text-light"><?= $a[1];?></span>
                                        <span class="year text-light bg-year"><?= $a[0];?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="area-bottom">
                            <div id="time" class="pull-left animated slideInLeft"></div>
                            <a href="#" class="bnt bnt-theme join-now pull-right animated fadeIn">Join Now</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--end upcoming event-->

        <!--begin alumni dashboard-->
        <div class="alumni-dashboard">
            <div class="container">
                <div class="title title-dashboard type1">
                    <h3 class="heading-light no-margin"> My Daffodil Alumni Dashboard </h3>
                </div>
                <div class="area-content">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12" style="text-align: center;">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <div class="box-content">
                                <h4 class="heading-regular"> Personalised Dashboard </h4>
                                <p class="text-content text-margin text-light">
                                    Allows you to securely view and update your personal information.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12" style="text-align: center;">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <div class="box-content">
                                <h4 class="heading-regular"> Alumni Directory </h4>
                                <p class="text-content text-margin text-light">
                                    Search alumni directories and stay connected with the brotherhood.
                                </p>
                            </div>
                        </div>
                        <div class="clearfix visible-sm-block"></div>
                        <div class="col-md-3 col-sm-6 col-xs-12" style="text-align: center;">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                            <div class="box-content">
                                <h4 class="heading-regular"> Projects </h4>
                                <p class="text-content text-margin text-light">
                                    Daffodil Alumni has a history of initiating a series of benevolent projects. This module allows you to view past.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12" style="text-align: center;">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <div class="box-content">
                                <h4 class="heading-regular"> Events </h4>
                                <p class="text-content text-margin text-light">
                                    List of events organised by Daffodil Alumni will help you to keep in touch with the Alumni community.
                                </p>
                            </div>
                        </div>
                        <div class="clearfix visible-*-block"></div>
                        <div class="col-md-3 col-sm-6 col-xs-12" style="text-align: center;">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            <div class="box-content">
                                <h4 class="heading-regular"> Job Hunting </h4>
                                <p class="text-content text-margin text-light">
                                    This Alumni helps to grow its members professionally. You can find and apply jobs posted by Alumni members though this module.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12" style="text-align: center;">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            <div class="box-content">
                                <h4 class="heading-regular"> Scholarship </h4>
                                <p class="text-content text-margin text-light">
                                    Daffodil Alumni is committed to supporting the next generation of outstanding DIU alumni. You can apply available scholarships online.
                                </p>
                            </div>
                        </div>
                        <div class="clearfix visible-sm-block"></div>
                        <div class="col-md-3 col-sm-6 col-xs-12" style="text-align: center;">
                            <i class="fa fa-tint" aria-hidden="true"></i>
                            <div class="box-content">
                                <h4 class="heading-regular"> Blood donation Directory </h4>
                                <p class="text-content text-margin text-light">
                                    Supports registration of blood donors, accessing the most updated blood donor list and filter it by blood group, donor name or location.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12" style="text-align: center;">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <div class="box-content">
                                <h4 class="heading-regular"> Souvenir Shop </h4>
                                <p class="text-content text-margin text-light">
                                    You will be able to purchase DIU souvenirs and gifts though this DIU Alumni Portal.
                                </p>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="login-dashboard text-center col-sm-12 col-xs-12">
                            <a href="{{ URL::to('/login') }}" class="bnt bnt-theme login-links">LOG IN TO ALUMNI DASHBOARD</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end alumni dashboard-->

        <!--begin block links-->
        <div class="block-links">
            <div class="container">
                <div class="row">
                    <div class="block-career col-md-6 col-sm-12 col-xs-12">
                        <div class="column-career">
                            <div class="title-links">
                                <h3 class="heading-regular">Career Opportunity</h3>
                            </div>
                            <div class="career-content">
                                @foreach($jobs as $job)
                                <div class="company-item clearfix">
                                    <div class="company-desc-wrapper">
                                        <div class="company-desc">
                                            <div class="company-title"><h6 class="heading-regular"><a href="#">{{ $job->title }} at {{ $job->company_name }}</a></h6></div>
                                            <div class="company-excerpt">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    @endforeach
                            </div>
                            <div class="view-all"><a href="{{ URL::to('/careers') }}">View All Career Opportunity</a></div>
                        </div>

                    </div>
                    <div class="block-event-calendar col-md-6 col-sm-12 col-xs-12">
                        <div class="column-calendar">
                            <div class="title-links">
                                <h3 class="heading-regular">Event Calendar</h3>
                            </div>
                            <div class="content-calendar bg-calendar no-padding">
                                <div class="list-view">
                                    @foreach($events as $event)
                                    <div class="view-item">
                                        <div class="date-item">
                                            <?php $date = $event->date;
                                            $a = explode('-',$date);
                                            ?>
                                                <span class="dates text-light"><?php echo $a[2]; ?>  </span>
                                            <span class="day text-bold color-theme"><?=$a[1]?></span>
                                            <span class="month text-light"><?=$a[0]?></span>
                                        </div>
                                        <div class="date-desc-wrapper">
                                            <div class="date-desc">
                                                <div class="date-title"><h6 class="heading-regular">{{ $event->title }}</h6></div>
                                                <div class="date-excerpt">
                                                    <p>Organizer: Daffodil Alumni Association</p>
                                                </div>
                                                <div class="place">
                                                    <span class="icon map-icon"></span>
                                                    <span class="text-place">{{ $event->address }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="view-all"><a href="{{ URL::to('/programs-events') }}">View All Events</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end block links-->

        <!--begin alumni interview-->
        <div class="alumni-interview">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 pull-left">
                        <div class="interview-wrapper">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/F-Csc_19oew" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 pull-right">
                        <div class="interview-wrapper">
                            <div class="interview-title">
                                <h3 class=" text-capitalize">Alumni Story</h3>
                            </div>
                            <br>
                            <div class="interview-desc text-left">
                                <p class="text-light" style="text-align: justify">DIU Alumni Community is honored as the Heart of Daffodil International University by the declartion of DIU Authority. Now the alumni are successfully leading their career in local and international market from a colossal number of distingushed careers like entrepreneurship, internatinalization, corporate personnel, ICT, Multimedia Technology, Education & Banking Sectors and etc.</p>
                            </div>
                            <br>
                            <div class="interview-desc text-left">
                                <p class="text-light" style="text-align: justify">We are sharing a video story of our alumni to inpire the fresh-gradutes and students so that they can understand how to be successful in life.
                                    So, click to listen today's story.....
                                </p>
                            </div>
                            <div class="interview-see-story">
                                <a href="{{ URL::to('/story') }}" class="see-story bnt text-uppercase">SEE All STORY</a>
                            </div >
                        </div>
                    </div>
                </div>

            </div>
        </div>

    @include('front.footer')
    <!--End footer wrapper-->
</div>

<script src="{{ asset('/alumni/') }}/js/libs/jquery-2.2.4.min.js"></script>
<script src="{{ asset('/alumni') }}/js/libs/bootstrap.min.js"></script>
<script src="{{ asset('/alumni') }}/js/libs/owl.carousel.min.js"></script>
<script src="{{ asset('/alumni') }}/js/libs/jquery.meanmenu.js"></script>
<script src="{{ asset('/alumni') }}/js/libs/jquery.syotimer.js"></script>
<script src="{{ asset('/alumni') }}/js/libs/parallax.min.js"></script>
<script src="{{ asset('/alumni') }}/js/libs/jquery.waypoints.min.js"></script>
<script src="{{ asset('/alumni') }}/js/custom/main.js"></script>
<script>
    jQuery(document).ready(function () {
        $('#time').syotimer({
            year: 2019,
            month: 7,
            day: 2,
            hour: 7,
            minute: 7,
        });
    });
</script>
</body>

<!-- Mirrored from sayidan_h1.kenzap.com/homepage-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jun 2018 18:08:10 GMT -->
</html>