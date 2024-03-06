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
    <title>Career-Daffodil Alumni Association</title>
</head>
<body>
<div class="main-wrapper">
    <!--Begin header ưrapper-->
@include('front.header')
<!--End header wrapper-->
    <!--Begin content wrapper-->
    <div class="content-wrapper">
        <div class="career-opportunity" style="margin-top: 5%">
            <div class="container">
                <div class="top-section">
                    <div class="title-page">
                        <h4 class="text-regular">Career Opportunity</h4>
                    </div>
                </div>
                <div class="alumni-directory-content">
                    <ul class="list-item">
                        <li class="label-content" style="text-align: center">
                            <span class="company">Company</span>
                            <span class="position">Position</span>
                            <span class="location">Location</span>
                            <span class="location">deadline</span>
                        </li>
                        @foreach($jobs as $job)
                        <li class="box-content" style="text-align: center">
                            <span class="company">{{ $job->company_name }}</span>
                            <span class="position">{{ $job->title }}</span>
                            <span class="location">{{ $job->location }}</span>
                            <span class="rate">{{ $job->deadline }}</span>
                            <span class="apply"><a href="{{ URL::to('/jobDetails/'.$job->idjob_posting) }}" class="bnt bnt-theme">Details</a></span>
                        </li>
                            @endforeach
                    </ul>
                </div>
                <div class="pull-right">{{ $jobs->links() }}</div>
            </div>
        </div>

        {{--<div class="newsletter newsletter-parallax">--}}
            {{--<div class="container">--}}
                {{--<div class="newsletter-wrapper text-center">--}}
                    {{--<div class="newsletter-title">--}}
                        {{--<h2 class="heading-light">Keep Up and Join Our Newsletter</h2>--}}
                        {{--<p class="text-white">Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>--}}
                    {{--</div>--}}
                    {{--<form name="subscribe-form" target="_blank" class="form-inline">--}}
                        {{--<input type="text" class="form-control text-center form-text-light" name="EMAIL" value="" placeholder="E-mail Address" >--}}
                        {{--<button type="submit" class="button bnt-theme">subscribe</button>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!--end newsletter-->

    </div>
    <!--End content wrapper-->
    <!--Begin footer wrapper-->
@include('front.footer')
<!--End footer wrapper-->
</div>

<script src="{{ asset('/alumni') }}/js/libs/jquery-2.2.4.min.js"></script>
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
            year: 2016,
            month: 12,
            day: 7,
            hour: 7,
            minute: 7,
        });
    });
</script>
</body>

<!-- Mirrored from sayidan_h1.kenzap.com/homepage-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jun 2018 18:08:10 GMT -->
</html>