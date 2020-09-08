<<<<<<< HEAD
{{-- <div id="preloader">
    <div id="spinner">
        <div class="preloader-dot-loading">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">{{ trans('layouts.disable') }}</div>
</div> --}}
<header id="header" class="header">
    <div class="header-top bg-theme-color-2 sm-text-center p-0">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="widget no-border m-0">
                        <ul class="list-inline font-13 sm-text-center mt-5">
                            <li class="nav-item dropdown dropdown-notifications">
                                <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown"><i data-count="0" class="fa fa-bell text-white notification-icon"></i></a>
                                {{-- <ul class="dropdown-menu" style="max-height: 300px">
                                    @foreach (Auth::user()->notifications as $notification)
                                    <li class="dropdown-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="media-object">
                                                    <img src="{{ asset('images/avatar/avatar5de7857e37aa8.jpeg') }}" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <strong class="notification-title">{{ $notification->data['title'] }}</strong>
                                                <p class="notification-desc">{{ $notification->data['title'] }}</p>
                                                <div class="notification-meta">
                                                    <small class="timestamp">about a minute ago</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul> --}}
                                <div class="dropdown-container">
                                    <div class="dropdown-toolbar">
                                        <div class="dropdown-toolbar-actions">
                                            <a href="#">Mark all as read</a>
                                        </div>
                                        <h3 class="dropdown-toolbar-title">Notifications (<span class="notif-count">0</span>)</h3>
                                    </div>
                                    <ul class="dropdown-menu">
                                        {{-- @foreach (Auth::user()->notifications as $notification)
                                            <li class="notification">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <div class="media-object" style="width: 65px">
                                                            <img src="{{ asset('images/avatar/avatar5de7857e37aa8.jpeg') }}" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <strong class="notification-title">{{ $notification->data['title'] }}</strong>
                                                        <p class="notification-desc">{{ $notification->data['content'] }}</p>
                                                        <div class="notification-meta">
                                                            <small class="timestamp">{{ $notification->created_at }}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach --}}
                                    </ul>
                                    <div class="dropdown-footer text-center">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                            <li class="text-white">|</li>
                            <li>
                                <a class="text-white" id="logout" href="{{ route('logout') }}">{{ trans('layouts.logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            </li>
                            <li class="text-white">|</li>
                            <li class="text-white">
                                <a class="text-white" href="{{ route('user.show', Auth::user()->id) }}">My Profile</a>
                            </li>
                            @if(Auth::User()->role_id == 1)
                                <li class="text-white">|</li>
                                <li class="text-white">
                                    <a class="text-white" href="{{ route('admin.dashboard.index') }}">MyAdmin</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="widget m-0 pull-right sm-pull-none sm-text-center">
                        <ul class="list-inline pull-right">
                            <li class="mb-0 pb-0">
                                <div class="top-dropdown-outer pt-5 pb-10">
                                    <a class="top-cart-link has-dropdown text-white text-hover-theme-colored"><i class="fa fa-shopping-cart font-13"></i></a>
                                </div>
                            </li>
                            <li class="mb-0 pb-0">
                                <div class="top-dropdown-outer pt-5 pb-10">
                                    <a class="top-search-box has-dropdown text-white text-hover-theme-colored"><i class="fa fa-search font-13"></i> &nbsp;</a>
                                </div>
                            </li>
                        </ul>
=======
<header>
    <!-- top-menu -->
    <div class="top-menu">
        <!-- top-header -->
        <div class="top-header" style="padding: 10px">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="phone dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="fa fa-globe" aria-hidden="true"></i> Language : English </a>
                             <ul class="dropdown-menu">
                                 <li><a href="#">English</a></li>
                                <li><a href="#">Aribce</a></li>
                            </ul>
                        </div>
>>>>>>> 2082e6baf8abc932a4e177cbef2c835555495539
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="social">
                            <ul>
                                <li><a href="login.html">Log In</a></li>
                                <li>|</li>
                                <li><a href="sign-up.html">Sign up</a></li>
                                <li>|</li>
                                <li><a href="register.html">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /top-header -->
        <!-- mainNav -->
        <div id="mainNav" class="navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-inverse navbar-default">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/client/assets/img/logo.png') }}" alt="logo"/></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeIn fadeInLeft fadeInUp fadeInRight">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('course.index') }}">Courses</a>
                                </li>
                                <li>
                                    <a href="">Subjects</a>
                                </li>
                                <li>
                                    <a href="teacher.html">Trainer</a>
                                </li>
                                <li>
                                    <a href="student-portfolio.html">Calendar</a>
                                </li>
                                <li>
                                    <a href="pricing.html"><span>Support</span></a>
                                </li>
                                <li>
                                    <a href="contact.html"><span>Contact</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                            <!-- /.navbar-collapse -->
                        </div>

                    </nav>
                </div>
            </div>


        </div>
        <!-- /mainNav -->
    </div>
    <!-- /top-menu -->

    <div class="header-text">
        <div class="col-xs-12 col-sm-5 col-md-5">
        </div>
        <div class="header-bg col-xs-12 col-sm-7 col-md-7">
            <h1>DON’T HAVE SPACE ON CAMPUS? LET’S START ONLINE</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tellus faucibus vel hendrerit sed, aliquet a est. Cras dapibus nisl non metus viverra, ac convallis eros viverra.Lorem ipsum dolor sit </p>
            <a href="#" class="header-btn">Find courses Now</a>
        </div>
    </div>

</header>
