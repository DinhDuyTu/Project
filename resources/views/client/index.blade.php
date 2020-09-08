@extends('client.layouts.main')
@section('content')
    <header>
        <div class="top-menu">
            @include('client.layouts.top-header')
            @include('client.layouts.navbar')
        </div>

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
    @include('client.layouts.slider')
    <section class="viewed-courses">
        <!-- .viewed-courses -->
        <div class="container">
            <div class="row">
                <div class="tittle">
                    <h2>Most Viewed Courses</h2>
                </div>
                <div class="row">
                    @foreach ($courses as $course)
                        <div class="col-xs-12 col-sm-3 col-md-3 list-course">
                            <div class="viewed-courses-box">
                                <div class="viewed-courses-img">
                                    <img src="{{ $course->image }}" alt="coureses-img1">
                                </div>
                                <div class="viewed-courses-text">
                                    <a href="{{ route('course.show', $course->id) }}">
                                        <h4>
                                        @foreach ($course->users as $user)
                                            @if ($user->id == Auth::user()->id)
                                                @if ($user->pivot->status == config('client.user.false'))
                                                    <i class="fa fa-check-circle check"></i>
                                                @elseif ($user->pivot->status ==config('client.user.true'))
                                                    <i class="fa fa-check-circle nocheck"></i>
                                                @endif
                                            @endif
                                        @endforeach
                                         | {{ $course->name }}
                                        </h4>
                                    </a>
                                    <p>By : <span>Adluf Gulf</span></p>
                                    <div class="star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="description">
                                        <p class="cut-string">{{ $course->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-md-12">
                        <a href="#" class="button">Browse More Courses</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.viewed-courses -->
    </section>

    <section class="px-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Don’t miss anything online<br/> Enjoy our live classes and booked your seat</h2>
                    <a href="#" class="button">Browse More Courses</a>
                </div>
            </div>
        </div>
    </section>

    <section class="instructor-container">
        <!-- .instructor-container -->
        <div class="container">
            <div class="tittle">
                <h2>
                    MEET OUR INSTRUCTOR
                    <span class="customNavigation">
                        <a class="btn prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                        <a class="btn next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </span>
                </h2>
            </div>
            <div class="row">
                <div class="owl-demo-outer">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        <div class="item">
                            @foreach ($users as $key => $user)
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <!-- .instructor -->
                                    <div class="instructor">
                                        <div class="instructor-img">
                                            <img src="{{ $user->avatar }}" alt="instructor-img1" />
                                        </div>
                                        <h4>
                                            <a href="#">
                                              {{ $user->name }}<br/>
                                              <span>Instructor, Ui/Ux Design</span>
                                          </a>
                                        </h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisc elit. Praesent tellus urna, faucibus vel hendrerit Lorem ipsum dolor sit amet, consectetura Praesent tellus urna, fau
                                        </p>
                                    </div>
                                    <!-- /.instructor -->
                                </div>
                            @if ($key == 2)
                                @break
                            @endif
                            @endforeach
                        </div>
                        <div class="item">
                            @foreach ($users as $key => $user)
                                @if ($key > 2)
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <!-- .instructor -->
                                        <div class="instructor">
                                            <div class="instructor-img">
                                                <img src="{{ $user->avatar }}" alt="instructor-img1" />
                                            </div>
                                            <h4>
                                                <a href="#">
                                                  {{ $user->name }}<br/>
                                                  <span>Instructor, Ui/Ux Design</span>
                                              </a>
                                            </h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisc elit. Praesent tellus urna, faucibus vel hendrerit Lorem ipsum dolor sit amet, consectetura Praesent tellus urna, fau
                                            </p>
                                        </div>
                                        <!-- /.instructor -->
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.instructor-container -->
    </section>

    <section class="price-container">
        <!-- .price-container -->
        <div class="container">
            <div class="tittle">
                <h2>PLANS AND PRICING</h2>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <!-- .price-box -->
                    <div class="price-box">
                        <div class="price-tittle">
                            FREE TRIAL
                        </div>
                        <div class="price-text">
                            <div class="price-no">
                                <sub>$0.</sub>00
                            </div>
                            <p>FREE 30 DAYS TRIAL</p>
                            <a href="payment.html">Get It Now</a>
                        </div>
                    </div>
                    <!-- .price-box -->
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <!-- .price-box -->
                    <div class="price-box active">
                        <div class="price-tittle">
                            FREE TRIAL
                        </div>
                        <div class="price-text">
                            <div class="price-no">
                                <sub>$0.</sub>00
                            </div>
                            <p>FREE 30 DAYS TRIAL</p>
                            <a href="payment.html">Get It Now</a>
                        </div>
                    </div>
                    <!-- .price-box -->
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <!-- .price-box -->
                    <div class="price-box">
                        <div class="price-tittle">
                            FREE TRIAL
                        </div>
                        <div class="price-text">
                            <div class="price-no">
                                <sub>$0.</sub>00
                            </div>
                            <p>FREE 30 DAYS TRIAL</p>
                            <a href="payment.html">Get It Now</a>
                        </div>
                    </div>
                    <!-- .price-box -->
                </div>
            </div>
        </div>
        <!-- /.price-container -->
    </section>

    <section class="px-bg2">
        <!-- .Subscribe -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="subscribe">
                        <h2>120+ classes & Staff Teaching<br/>Courses and Discussing Topics Online</h2>
                        <a href="#" class="button">Subscribe Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.Subscribe -->
    </section>
@endsection
