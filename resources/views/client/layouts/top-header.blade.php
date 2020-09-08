
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
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="social">
                    <ul>
                        <li><a href="{{ route('user.show', Auth::user()->id) }}">My Profile</a></li>
                        <li>|</li>
                        <li><a href="sign-up.html">History</a></li>
                        <li>|</li>
                        @if (Auth::check())
                            <li class="nav-item dropdown dropdown-notifications">
                                <a style="color: white;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                     Notification <i class="fa fa-bell"></i> 
                                     (<span class="notif-count">0</span>)
                                     <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right menu-notification" aria-labelledby="navbarDropdown">
                                    @forelse (Auth::user()->notifications as $notification)
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="media-object">
                                                    <img src="{{ Auth::user()->avatar }}" class="img-circle" alt="50x50">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <strong class="notification-title">{{ $notification->data['title'] }}</strong>
                                                <div class="notification-meta">
                                                    <small class="timestamp">about a minute ago</small>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        {{-- <p style="color: black;">Empty</p> --}}
                                    @endforelse
                                </div>
                            </li>
                            <li>|</li>
                        @endif
                        @if (Auth::check())
                            <li><a id="logout">Logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
