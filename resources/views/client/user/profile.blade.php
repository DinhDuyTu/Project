@extends('client.layouts.main')
@section('content')
<header class="insid-header">
    <div class="top-menu">
        @include('client.layouts.top-header')
        @include('client.layouts.navbar')
    </div>
    <div class="header-title">
        <h1>PROFILE</h1>
    </div>
</header>
<section class="courses">
    <!-- .courses -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- .student-outer -->
                <div class="student-outer">
                    <div class="student-img">
                        <h6><img src="{{ $user->avatar }}" alt="student-img1"></h6>
                    </div>
                    <div class="student-text">
                        <a href="#">
                            ADD CONTACT
                         </a>	
                        <a href="#">
                            INVITE TO CHAT
                         </a>	
                        <a href="#">
                            SEND MESSAGE
                         </a>	
                        <a href="#">
                             HANGOUT
                         </a>	
                    </div>
                </div>
                <!-- /.student-outer -->					
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">	
                <!-- .student-info -->
                <div class="student-info">
                    <h3>{{ $user->name }} <span>{{ $user->role_id == 1 ? 'Trainer' : 'Trainee' }}</span></h3>
                    <ul>
                        <li><span>Taking Courses :</span> UI/UX Design & Digital SEO</li>
                        <li><span>Student Level :</span> 1st Ranking</li>
                        <li><span>Country :</span> United States</li>
                        <li><span>E-mail:</span> John@gmail.com</li>
                        <li><span>Students ID:</span> 12</li>
                        <li><span>1st Access :</span> 02 january, 2017</li>
                        <li><span>Last Access :</span> 21 February, 2017</li>
                        <li><span>Skype :</span> john.doe</li>
                    </ul>
                    <hr>
                </div>
                <!-- .student-info -->
                <div class="tabcourse">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#courses">Courses</a></li>
                        <li><a data-toggle="tab" href="#subjects">Subjects</a></li>
                        <li><a data-toggle="tab" href="#tasks">Tasks</a></li>
                      </ul>
                      
                      <div class="tab-content">
                        <div id="courses" class="tab-pane fade in active">
                            <table class="table table-bordered table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Process</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $key => $course)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $course->name }}</td>
                                            <td>{{ $course->pivot->process }}</td>
                                            <td>
                                                @if ($course->pivot->status == false)
                                                    <button class="btn btn-warning btn-xs">{{ trans('layouts.activity') }}</button>
                                                @else
                                                    <button class="btn btn-success btn-xs">{{ trans('layouts.finished') }}</button>
                                                @endif
                                            </td>
                                            <td><a class="btn btn-info btn-xs" href="{{ route('course.show', $course->id) }}">{{ trans('layouts.view') }}</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div id="subjects" class="tab-pane fade">
                            <table class="table table-bordered table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Process</th>
                                        <th scope="col">Date Start</th>
                                        <th scope="col">Date Finish</th>
                                        <th scope="col" style="width: 5%;">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($subjects as $key => $subject)
                                        <tr>
                                            <th scope="row"># {{ $key + 1 }}</th>
                                            <td>{{ $subject->name }}</td>
                                            <td>{{ $subject->pivot->process }}</td>
                                            <td>{{ date_format($subject->pivot->created_at, "Y/m/d") }}</td>
                                            <td>
                                                @if ($subject->pivot->created_at != $subject->pivot->updated_at && $subject->pivot->updated_at != null)
                                                    {{ date_format($subject->pivot->updated_at, "Y/m/d") }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($subject->pivot->status == false)
                                                    <button class="btn btn-warning btn-xs radius-btn"><i class="fa fa-exclamation" aria-hidden="true"></button>
                                                @else
                                                    <button class="btn btn-success btn-xs radius-btn"><i class="fa fa-check" aria-hidden="true"></i></button>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div id="tasks" class="tab-pane fade">
                            <table class="table table-bordered table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Date Start</th>
                                        <th scope="col">Date Finish</th>
                                        <th scope="col" style="width: 5%;">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tasks as $key => $task)
                                        <tr>
                                            <th scope="row"># {{ $key + 1 }}</th>
                                            <td>{{ $task->name }}</td>
                                            <td>{{ date_format($task->pivot->created_at, "Y/m/d") }}</td>
                                            <td>
                                                @if ($task->pivot->created_at != $task->pivot->updated_at)
                                                {{ date_format($task->pivot->updated_at, "Y/m/d") }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($task->pivot->status == false)
                                                    <button class="btn btn-warning btn-xs radius-btn"><i class="fa fa-exclamation" aria-hidden="true"></i></button>
                                                @else
                                                    <button class="btn btn-success btn-xs radius-btn"><i class="fa fa-check" aria-hidden="true"></i></button>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                      </div>
                </div>
            </div>				
            
        </div>
    </div>
    <!-- /.courses -->
</section>
@endsection