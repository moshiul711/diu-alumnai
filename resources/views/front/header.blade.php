<div class="header-wrapper header-position" style="box-shadow: 1px 7px 20px rgba(0, 0, 0, 0.15);">
    <header id="header" class="container-header type2">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="top-right col-md-12 col-sm-12 col-xs-12 pull-right">
                        <ul class="list-inline">
                            <li class="hidden-xs">
                                <a href="mailto:alumni@sayidan.edu">
                                    <span class="icon mail-icon"></span>
                                    <span class="text">alumni@sayidan.edu</span>
                                </a>
                            </li>
                            <li class="hidden-xs">
                                <a href="#">
                                    <span class="icon phone-icon"></span>
                                    <span class="text">+1 087 222 9</span>
                                </a>
                            </li>
                            {{--<li class="top-search">--}}
                                {{--<form class="navbar-form search no-margin no-padding">--}}
                                    {{--<input type="text" name="q" class="form-control input-search" placeholder="search..." autocomplete="off">--}}
                                    {{--<button type="submit" class="lnr lnr-magnifier"></button>--}}
                                {{--</form>--}}
                            {{--</li>--}}
                            <?php
                                $id =Session::get('user_id');
                                if (!isset($id)){ ?>
                            <li class="login">
                                <a href="{{ URL::to('/login') }}">Log In</a>
                            </li>
                            <?php }?>
                            <?php if (isset($id)){?>
                            <li class="login">
                                <a href="{{ URL::to('/logout') }}">Log Out</a>
                            </li>
                            <li class="login">
                                <a href="{{ URL::to('/social') }}">Profile</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-middle">
            <div class="container-fluid">
                <div class="logo hidden-sm hidden-xs">
                    <a href="{{ URL::to('/') }}"> <img src="{{ asset('/alumni') }}/images/logo.png" alt="logo"></a>
                </div>
                <div class="menu">
                    <nav>
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="{{ URL::to('/') }}">HOME</a>
                            </li>

                            <li>
                                <a href="{{ URL::to('/about') }}">ABOUT US</a>
                            </li>
                            <li>
                                <a href="{{ URL::to('/programs-events') }}">PROGRAM &amp; EVENTS</a>
                            </li>

                            <li>
                                <a href="{{ URL::to('/story') }}">ALUMNI STORY</a>
                            </li>
                            <li>
                                <a href="{{ URL::to('/career') }}">CAREER OPPORTUNITY</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="area-mobile-content visible-sm visible-xs">
                    <div class="logo-mobile">
                        <a href="{{ URL::to('/') }}"> <img src="{{ asset('/alumni') }}/images/logo.png" alt="logo"></a>
                    </div>
                    <div class="mobile-menu ">
                    </div>
                </div>
            </div>
        </div>
    </header>

</div>