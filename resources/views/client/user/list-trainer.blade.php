@extends('client.layouts.main')
@section('content')
<header class="insid-header">
    <div class="top-menu">
        @include('client.layouts.top-header')
        @include('client.layouts.navbar')
    </div>
    <div class="header-title">
        <h1>TRAINER</h1>
    </div>
</header>
<section class="courses">
    <div class="container">
        <div class="row">
            @foreach ($trainer as $user)
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="teacher-outer">
                        <div class="teacher-img">
                            <img src="{{ $user->avatar }}" alt="instructor-img1">
                        </div>
                        <div class="teacher-text">
                            <a href="teacher-profile.html">
                                <h4>{{ $user->name }}</h4>
                                <span>{{ $user->email }}</span>
                            </a>
                            <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="text-center col-md-12">
                <ul class="pagination">
                    <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection