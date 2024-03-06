@extends('alumniSocial.master')

@section('mainContent')
<div class="col-lg-6">
    <form action='{{ url("/social/search") }}' method="post">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search for..." >
            <span class="input-group-btn"style="padding-left: 5px">
                <button type="submit" class="btn "><i class="fa fa-search"></i></button>
            </span>
        </div>
    </form>
    <p></p>
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
                            <li>
                                <i class="fa fa-camera"></i>
                                <label class="fileContainer">
                                    <input type="file" name="image">
                                </label>
                            </li>
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
                        <img  src="{{ asset('/').$post->poster }}" style="height: 50px; width: 50px;" alt="">
                        {{--<img src="{{ $post->poster }}" alt="">--}}
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
                        <img src="{{ $post->image }}" alt="">
                        <div class="we-video-info">
                            <ul>
                                <li>
                                    <span class="like" data-toggle="tooltip" title="views">
                                        <a href="{{ url('/social/post/like/'.$post->idpost) }}">
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
                                        </a>

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
                                        <ins><?= $i?></ins>
                                    </span>
                                </li>
                                <div class="collapse" id="{{ $post->idpost }}">
                                    <div class="coment-area">
                                        <ul class="we-comet">

                                            @foreach($comment as $comm)
                                                @if($post->idpost == $comm->post_idpost)
                                            <li>
                                                <div class="comet-avatar">
                                                    <img src="{{ $comm->image }}" alt="">
                                                </div>
                                                <div class="we-comment">
                                                    <div class="coment-head">
                                                        <h5><a href="#" title="">{{ $comm->name }}</a></h5>
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
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
                <hr>
            @endforeach
        </div>
    </div>
</div>
    @endsection