
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="{{ route('home') }}">{{ trans('setting.training_system') }} <i class="far fa-registered"></i></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        {{-- <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search"
                aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div> --}}
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                <a class="dropdown-item" href="#">{{ trans('setting.action') }}</a>
                <a class="dropdown-item" href="#">{{ trans('setting.another_acction') }}</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">{{ trans('setting.something') }}</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <a class="dropdown-item" href="#">{{ trans('setting.action') }}</a>
                <a class="dropdown-item" href="#">{{ trans('setting.another_action') }}</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">{{ trans('setting.something') }}</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">{{ trans('setting.settings') }}</a>
                <a class="dropdown-item" href="#">{{ trans('setting.ativity_log') }}</a>
                <div class="dropdown-divider"></div>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="{{ route('logout') }}" id="logout" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-sign-out-alt"></i>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </a>
        </li>
    </ul>

</nav>
