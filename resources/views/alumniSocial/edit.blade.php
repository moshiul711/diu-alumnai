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
                                    <div class="editing-info">
                                        <h5 class="f-title"><i class="ti-info-alt"></i> Edit Basic Information</h5>

                                        <form method="post" action="{{ url('/social/update/'.$users->iduser) }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <input type="text" id="input" name="name" value="{{ $users->name }}" required="required"/>
                                                <label class="control-label" for="input">Name</label><i class="mtrl-select"></i>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="email" value="{{ $users->email }}" required="required"/>
                                                <label class="control-label" for="input"><a href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6a2f070b03062a">[email&#160;protected]</a></label><i class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="phone" value="{{ $users->phone }}" required="required"/>
                                                <label class="control-label" for="input">Phone No.</label><i class="mtrl-select"></i>
                                            </div>

                                            <div class="form-group">
                                                <textarea name="address" required="required">{{ $users->address }}</textarea>
                                                <label class="control-label" for="input">Address</label><i class="mtrl-select"></i>
                                            </div>

                                            <div class="form-group">
                                                <textarea name="about" required="required">{{ $users->about }}</textarea>
                                                <label class="control-label" for="input">About</label><i class="mtrl-select"></i>
                                            </div>


                                            <div class="form-group">
                                                Profile Picture
                                                <input type="file" name="image"/>
                                                <input type="hidden" name="image" value="{{ $users->image }}" />
                                            </div>

                                            <div class="form-group">
                                                Cover Image
                                                <input type="file" name="cover_image" />
                                                <input type="hidden" name="cover_image" value="{{ $users->cover_image }}"/>
                                            </div>

                                            <div class="submit-btns">
                                                <button type="reset" class="mtr-btn"><span>Cancel</span></button>
                                                <button type="submit" class="mtr-btn"><span>Update</span></button>
                                            </div>
                                        </form>
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
