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
                            <a href="{{ route('calendar.show') }}">Calendar</a>
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
