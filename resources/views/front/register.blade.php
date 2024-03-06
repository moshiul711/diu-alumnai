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
    <title>Registration-Daffodil Alumni Association</title>
</head>
<body>
<div class="main-wrapper">
    <!--Begin header ưrapper-->
@include('front.header')
<!--End header wrapper-->
    <!--Begin content wrapper-->
    <div class="content-wrapper">
        <div class="account-page register text-center" style="margin-top: 5%">
            <div class="container">
                <div class="account-title">
                    <?php
                    $message =Session::get('message');
                    if($message){
                        echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>'.$message.'</div>';
                        Session::put('message',null);
                    }
                    ?>
                    <h4 class="heading-light">REGISTER INTO ALUMNI DASHBOARD</h4>
                </div>
                <div class="account-content">
                    <form action="{{ url('/member-store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="input-box fullname">
                            <input type="text" name="alumni_id" placeholder="University ID">
                        </div>
                        <div class="input-box number">
                            <input type="text" name="alumni_name" placeholder="Full Name">
                        </div>
                        <div class="input-box email">
                            <input type="text" name="alumni_email" placeholder="Email Address">
                        </div>
                        <div class="input-box email">
                            <input type="text" name="alumni_phone" placeholder="Phone">
                        </div>

                        <div class="input-box email">
                            <input type="text" name="alumni_department" placeholder="Department">
                        </div>
                        <div class="input-box email">
                            <select name="graduate_year">
                                <option value="">Graduation Year...</option>
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

                        <div class="buttons-set">
                            <button type="submit"  title="REGISTER" class="btn btn-info text-regular text-uppercase">REGISTER</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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