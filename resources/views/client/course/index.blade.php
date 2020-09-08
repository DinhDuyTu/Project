@extends('client.layouts.main')
@section('content')
<header class="insid-header">
    <div class="top-menu">
        @include('client.layouts.top-header')
        @include('client.layouts.navbar')
    </div>
    <div class="header-title">
        <h1>COURSE</h1>
    </div>
</header>
<section class="courses">
    <!-- .courses -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="grid-list-view">
                    <a href="#"><i class="fa fa-th" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i></a>
                </div>
            </div>
            @foreach ($courses as $course)
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="viewed-courses-box">
                            <div class="viewed-courses-img">
                                <img src="{{ $course->image }}" alt="coureses-img1">
                            </div>
                            <div class="viewed-courses-text">
                                <a href="classroom-presence.html">
                                    <h3>{{ $course->name }}</h3>
                                </a>
                                <p>By : Adluf Gulf</p>
                                <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <div class="price">
                                    $120 <span>$300</span>
                                </div>
                                <a href="{{ route('course.show', $course->id) }}" class="ank5">Purchase Now</a>
                            </div>
                        </div>
                </div>
            @endforeach
            {{-- <div class="text-center col-md-12">
                <ul class="pagination">
                    <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                </ul>
            </div> --}}
        </div>
    </div>
    <!-- /.courses -->
</section>
@endsection