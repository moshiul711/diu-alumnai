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
        <div class="feature-photo">
            <figure><img src="{{ asset('/').$user->cover_image }}" style="width: 1366px;height: 500px;" alt=""></figure>
            {{--<div class="add-btn">--}}
                {{--<span>1205 followers</span>--}}
                {{--<a href="#" title="" data-ripple="">Add Friend</a>--}}
            {{--</div>--}}
            {{--<form class="edit-phto">--}}
                {{--<i class="fa fa-camera-retro"></i>--}}
                {{--<label class="fileContainer">--}}
                    {{--Edit Cover Photo--}}
                    {{--<input type="file"/>--}}
                {{--</label>--}}
            {{--</form>--}}
            <div class="container-fluid">
                <div class="row merged">
                    <div class="col-lg-2 col-sm-3">
                        <div class="user-avatar">
                            <figure>
                                <img src="{{ asset('/').$user->image }}" alt="">
                                {{--<form class="edit-phto">--}}
                                    {{--<i class="fa fa-camera-retro"></i>--}}
                                    {{--<label class="fileContainer">--}}
                                        {{--Edit Display Photo--}}
                                        {{--<input type="file"/>--}}
                                    {{--</label>--}}
                                {{--</form>--}}
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-10 col-sm-9">
                        <div class="timeline-info">
                            <ul>
                                <li class="admin-name">
                                    <h5 class="pull-right">{{ $userName = Session::get('user_name') }}</h5>
                                </li>
                                <li>
                                    <a class="" href="{{ URL::to('/social/profile/'.$userId = Session::get('user_id')) }}" title="" data-ripple="">Time line</a>
                                    <a class="" href="{{ URL::to('/social/profile/photos/'.$userId = Session::get('user_id')) }}" title="" data-ripple="">Photos</a>
                                    {{--<a class="" href="timeline-videos.html" title="" data-ripple="">Videos</a>--}}
                                    <a class="" href="{{ URL::to('/social/friends') }}" title="" data-ripple="">Friends</a>
                                    {{--<a class="" href="timeline-groups.html" title="" data-ripple="">Groups</a>--}}
                                    <a class="" href="{{ URL::to('/social/about/'.$userId = Session::get('user_id')) }}" title="" data-ripple="">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- top area -->

    <section>
        <div class="gap gray-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row" id="page-contents">
                        @include('alumniSocial.sidebar')<!-- sidebar -->
                            <div class="col-lg-6">
                                <div class="central-meta">
                                    <div class="new-postbox">
                                        <figure>
                                            <img  src="{{ asset('/').$user->image }}" style="height: 60px; width: 60px;" alt="">
                                        </figure>
                                        <div class="newpst-input">
                                            <form method="post" action="{{ url('/social/post') }}" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <textarea rows="2" name="body" placeholder="write something"></textarea>
                                                <div class="attachments">
                                                    <ul>
                                                        {{--<li>--}}
                                                        {{--<i class="fa fa-music"></i>--}}
                                                        {{--<label class="fileContainer">--}}
                                                        {{--<input type="file">--}}
                                                        {{--</label>--}}
                                                        {{--</li>--}}
                                                        <li>
                                                            <i class="fa fa-camera"></i>
                                                            <label class="fileContainer">
                                                                <input type="file" name="image">
                                                            </label>
                                                        </li>
                                                        {{--<li>--}}
                                                        {{--<i class="fa fa-video-camera"></i>--}}
                                                        {{--<label class="fileContainer">--}}
                                                        {{--<input type="file">--}}
                                                        {{--</label>--}}
                                                        {{--</li>--}}
                                                        {{--<li>--}}
                                                        {{--<i class="fa fa-camera"></i>--}}
                                                        {{--<label class="fileContainer">--}}
                                                        {{--<input type="file">--}}
                                                        {{--</label>--}}
                                                        {{--</li>--}}
                                                        <li>
                                                            <button type="submit">Post</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- add post new box -->
                                <div class="loadMore">
                                    <div class="central-meta item">
                                        @foreach($posts as $post)
                                            <div class="user-post">
                                                <div class="friend-info">
                                                    <figure>
                                                        <img  src="{{ asset('/').$post->poster }}" alt="">
                                                    </figure>
                                                    <div class="friend-name">
                                                        <ins><a href="{{ URL::to('/social/about/'.$post->userid) }}" title="">{{ $post->name }}</a></ins>
                                                        <span>published: {{ $post->created_at }}</span>
                                                    </div>
                                                    <div class="post-meta">
                                                        <div class="description">
                                                            <p>
                                                                {{ $post->body }}
                                                            </p>
                                                        </div>
                                                        <img src="{{ asset('/').$post->image }}" alt="">
                                                        <div class="we-video-info">
                                                            <ul>
                                                                <li>
                                                                    <span class="like" data-toggle="tooltip" title="views">
                                                                        <i class="fa fa-thumbs-up"></i>
                                                                        <?php
                                                                        $i = 0;
                                                                        foreach ($likes as $like){
                                                                            if($post->idpost == $like->post_idpost){
                                                                                $i=$i+1;
                                                                            }
                                                                        }
                                                                        ?>
                                                                        <ins><?= $i?></ins>
                                                                    </span>
                                                                </li>

                                                                <li>
                                                                <span class="comment" data-toggle="tooltip" title="Comments">

                                                                        <a data-toggle="collapse" href="#{{ $post->idpost }}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                                            <i class="fa fa-comments"></i>
                                                                        </a>

                                                                    <?php
                                                                    $i = 0;
                                                                    foreach ($comment as $comm){
                                                                        if($post->idpost == $comm->post_idpost){
                                                                            $i=$i+1;
                                                                        }
                                                                    }
                                                                    ?>
                                                                    {{--@foreach($comment as $comm)--}}
                                                                    {{--@if($post->idpost == $comm->post_idpost)--}}
                                                                    {{--$i=0;--}}
                                                                    {{--$i = $i+1;--}}
                                                                    {{--@endif--}}
                                                                    {{--{{ $i }}--}}
                                                                    {{--@endforeach--}}
                                                                    <ins><?= $i?></ins>
                                                                </span>
                                                                </li>
                                                            </ul>
                                                            <div class="collapse" id="{{ $post->idpost }}">
                                                                <div class="coment-area">
                                                                    <ul class="we-comet">

                                                                        @foreach($comment as $comm)
                                                                            @if($post->idpost == $comm->post_idpost)
                                                                                <li>
                                                                                    <div class="comet-avatar">
                                                                                        <img src="{{ asset('/').$comm->image }}" alt="">
                                                                                    </div>
                                                                                    <div class="we-comment">
                                                                                        <div class="coment-head">
                                                                                            <h5><a href="time-line.html" title="">{{ $comm->name }}</a></h5>
                                                                                            {{--<span>Commented at {{ $comm->created_at }}</span>--}}
                                                                                        </div>
                                                                                        <p>{{ $comm->comment }}</p>
                                                                                    </div>
                                                                                </li>
                                                                            @endif
                                                                        @endforeach
                                                                        <li class="post-comment">
                                                                            <div class="comet-avatar">
                                                                                <img  src="{{ asset('/').$user->image }}" style="height: 50px; width: 60px;" alt="">
                                                                            </div>
                                                                            <div class="post-comt-box">
                                                                                <form method="post" action="{{ url('/social/post/comment/'.$post->idpost) }}">
                                                                                    {{ csrf_field() }}
                                                                                    <textarea name="comment" placeholder="Post your comment"></textarea>
                                                                                    <button type="submit" style="color: black">Comment</button>
                                                                                </form>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        @endforeach
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
