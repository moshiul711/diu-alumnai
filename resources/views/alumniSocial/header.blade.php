<div class="responsive-header">
    <div class="mh-head first Sticky">
			<span class="mh-btns-left">
				<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
			</span>
        <span class="mh-text">
				<a href="{{ URL::to('/social') }}" title=""><img src="{{ asset('/alumniSocial/') }}/images/logo.png" alt=""></a>
			</span>

    </div>

    <nav id="menu" class="res-menu">
        <ul>
            <li>
                <span><a href="{{ URL::to('/social') }}">Home</a></span>
            </li>
            <li>
                <?php $id =Session::get('user_id');?>
                <a href="{{ URL::to('/social/profile/'.$id) }}" title="">Profile</a>
            </li>
            <li>
                <span><a href="{{ URL::to('/social/logout') }}" title=""><i class="ti-power-off"></i>log out</a></span>
            </li>
        </ul>


    </nav>

</div><!-- responsive header -->

<div class="topbar stick">
    <div class="logo">
        <a title="" href="{{ URL::to('/social') }}"><img src="{{ asset('/alumniSocial/') }}/images/logo.png" alt=""></a>
    </div>

    <div class="top-area">
        <ul class="main-menu">
            <li>
                <a href="{{ URL::to('/social') }}" title="">Home</a>
            </li>
            <li>
                <?php $id =Session::get('user_id');?>
                <a href="{{ URL::to('/social/profile/'.$id) }}" title="">Profile</a>
            </li>
            {{--<li>--}}
                {{--<a href="#" title="">Executives</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#" title="">Alumni Lists</a>--}}
            {{--</li>--}}
        </ul>

        <div class="user-img">
            <img  src="{{ asset('/').$image->image }}" style="height: 60px; width: 60px;" alt="">
            <div class="user-setting">
                {{--<a href="#" title=""><span class="status f-online"></span>online</a>--}}
                {{--<a href="#" title=""><span class="status f-away"></span>away</a>--}}
                {{--<a href="#" title=""><span class="status f-off"></span>offline</a>--}}
                <a href="{{ URL::to('/social/profile/'.$id) }}" title=""><i class="ti-user"></i> view profile</a>
                {{--<a href="#" title=""><i class="ti-pencil-alt"></i>edit profile</a>--}}
                {{--<a href="#" title=""><i class="ti-target"></i>activity log</a>--}}
                {{--<a href="#" title=""><i class="ti-settings"></i>account setting</a>--}}
                <a href="{{ URL::to('/social/logout') }}" title=""><i class="ti-power-off"></i>log out</a>
            </div>
        </div>
        {{--<span class="ti-menu main-menu" data-ripple=""></span>--}}
    </div>
</div>