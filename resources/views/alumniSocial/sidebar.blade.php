<div class="col-lg-3">
    <aside class="sidebar static">
        <div class="widget">
            <h4 class="widget-title">Shortcuts</h4>
            <ul class="naves">
                <li>
                    <i class="ti-clipboard"></i>
                    <a href="{{ URL::to('/social') }}" title="">News feed</a>
                </li>
                <li>
                    <i class="ti-mouse-alt"></i>
                    <a href="{{ URL::to('/social/profile/'.Session::get('user_id')) }}" title="">Profile</a>
                </li>

                <li>
                    <i class="ti-user"></i>
                    <a href="{{ URL::to('/social/edit/'.$userId = Session::get('user_unique_id')) }}" title="">Edit Profile</a>
                </li>
                <li>
                    <i class="ti-image"></i>
                    <a href="{{ URL::to('/social/profile/photos/'.$userId = Session::get('user_id')) }}" title="">Photos</a>
                </li>

                {{--<li>--}}
                    {{--<i class="ti-comments-smiley"></i>--}}
                    {{--<a href="messages.html" title="">Messages</a>--}}
                {{--</li>--}}

                <li>
                    <i class="ti-arrow-circle-up"></i>
                    <a href="{{ URL::to('/social/friends') }}" title="">More Friends</a>
                </li>
                <li>
                    <i class="ti-power-off"></i>
                    <a href="{{ URL::to('/social/logout') }}" title="">Logout</a>
                </li>
            </ul>
        </div>
    </aside>
</div>