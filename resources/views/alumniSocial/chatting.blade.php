<div class="col-lg-3">
    <aside class="sidebar static">

        <div class="widget">
            <div class="banner medium-opacity bluesh">
                <div class="bg-image" style="background-image: url({{ asset('/alumniSocial/') }}/images/resources/baner-widgetbg.jpg)"></div>
                <div class="baner-top">
                    <span><img alt="" src="{{ asset('/alumniSocial/') }}/images/book-icon.png"></span>
                    <i class="fa fa-ellipsis-h"></i>
                </div>
                <div class="banermeta">
                    <p>
                        create your own favourit page.
                    </p>
                    <span>like them all</span>
                    <a data-ripple="" title="" href="#">start now!</a>
                </div>
            </div>
        </div>
        <div class="widget friend-list stick-widget">
            <h4 class="widget-title">Friends</h4>
            <div id="searchDir"></div>
            <ul id="people-list" class="">
                @foreach($chatlists as $chatlist)
                <li>
                    <figure>
                        <img src="{{ asset('/').$chatlist->image }}" alt="">
                    </figure>
                    <div class="friendz-meta chatting_id" >
                        <a href="{{ URL::to('/social/message/'.$chatlist->iduser) }}" class="chatting_id" data-target="#{{ $chatlist->iduser }}">{{ $chatlist->name }}</a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </aside>
</div><!-- sidebar -->