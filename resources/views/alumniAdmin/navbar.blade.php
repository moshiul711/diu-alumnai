<div id="top">

    <nav class="navbar navbar-inverse navbar-fixed-top " style="background-color: white">
        <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
            <i class="icon-align-justify"></i>
        </a>
        <!-- LOGO SECTION -->
        <header class="navbar-header" style="background-color: white">
            <a href="{{ URL::to('/admin') }}" class="navbar-brand">
                <img src="{{ asset('alumni/') }}/images/logo.png" height="45"  alt="" />
            </a>
        </header>
        <!-- END LOGO SECTION -->
        <ul class="nav navbar-top-links navbar-right" style="background-color: white">

            <li class="dropdown" >
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                </a>

                <ul class="dropdown-menu dropdown-user">
                    <?php $id =Session::get('admin_id');?>
                    <li>
                        <a href="{{ URL::to('/admin/profile/'.$id) }}"><i class="icon-user"></i> User Profile </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{ URL::to('/admin/logout') }}"><i class="icon-signout"></i> Logout </a>
                    </li>
                </ul>

            </li>
            <!--END ADMIN SETTINGS -->
        </ul>

    </nav>

</div>