<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.wpkixx.com/html/winku/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Dec 2018 13:41:44 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Alumni Login</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{ asset('/alumniSocial/') }}/css/main.min.css">
    <link rel="stylesheet" href="{{ asset('/alumniSocial/') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('/alumniSocial/') }}/css/color.css">
    <link rel="stylesheet" href="{{ asset('/alumniSocial/') }}/css/responsive.css">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
    <div class="container-fluid pdng0">
        <div class="row merged">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="land-featurearea">
                    <div class="land-meta">
                        <h1>DIU Alumni</h1>
                        <div class="friend-logo">
                            <span><img src="{{ asset('/alumniSocial/') }}/images/logo.png" alt=""></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="login-reg-bg">
                    <div class="log-reg-area sign">
                        <?php
                        $message =Session::get('message');
                        if($message){
                            echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>'.$message.'</div>';
                            Session::put('message',null);
                        }
                        ?>
                        <h2 class="log-title">Login</h2>
                        <p>
                            Are You not Yet? <a href="#" title="">Take the tour</a> or <a href="#" title="">Join now</a>
                        </p>
                        <form method="post" action="{{ url('/social/login-check') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" id="input" name="name" required="required"/>
                                <label class="control-label" for="input">Username</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" required="required"/>
                                <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-group">
                                <select name="type" class="form-control">
                                    <option value="">Logging as a....</option>
                                    <option value="alumni">Alumni</option>
                                    <option value="admin">Executives</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                            {{--<a href="#" title="" class="forgot-pwd">Forgot Password?</a>--}}
                            {{--<div class="submit-btns">--}}
                                {{--<button class="mtr-btn signin" type="submit">Login</button>--}}
                                {{--<button class="mtr-btn signup" type="button"><span>Register</span></button>--}}
                            {{--</div>--}}
                        </form>
                    </div>
                    <div class="log-reg-area reg">
                        <h2 class="log-title">Register</h2>

                        <form method="post">
                            <div class="form-group">
                                <input type="text" required="required"/>
                                <label class="control-label" for="input">First & Last Name</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-group">
                                <input type="text" required="required"/>
                                <label class="control-label" for="input">User Name</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-group">
                                <input type="password" required="required"/>
                                <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-radio">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="radio" checked="checked"/><i class="check-box"></i>Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="radio"/><i class="check-box"></i>Female
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" required="required"/>
                                <label class="control-label" for="input"><a href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d792bab6bebb97">[email&#160;protected]</a></label><i class="mtrl-select"></i>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" checked="checked"/><i class="check-box"></i>Accept Terms & Conditions ?
                                </label>
                            </div>
                            <a href="#" title="" class="already-have">Already have an account</a>
                            <div class="submit-btns">
                                <button class="mtr-btn signup" type="button"><span>Register</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ asset('/alumniSocial/') }}/js/main.min.js"></script>
<script src="{{ asset('/alumniSocial/') }}/js/script.js"></script>

</body>

<!-- Mirrored from www.wpkixx.com/html/winku/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Dec 2018 13:41:45 GMT -->
</html>