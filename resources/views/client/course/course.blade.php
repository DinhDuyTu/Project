@extends('client.layouts.main')
@section('content')
    <header class="insid-header">
        <div class="top-menu">
            @include('client.layouts.top-header')
            @include('client.layouts.navbar')
        </div>
        <div class="header-title">
            <h1>CLASSROOM SOCIAL GROUP</h1>
        </div>
        <div class="dashbord">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="fa fa-dropbox" aria-hidden="true"></i></a>
                                <div class="dropbox dropdown-menu">
                                    <div class="col-sm-6  col-md-4">
                                        <div class="more-files">
                                            <h2>More Files From Daniel</h2>
                                            <ul>
                                                <li>

                                                    <a href="#">Basic History Of UI Design</a>
                                                    <p>January 20,2017 at 9:00 pm</p>
                                                </li>
                                                <li>
                                                    <a href="#">Basic History Of UI Design</a>
                                                    <p>January 20,2017 at 9:00 pm</p>
                                                </li>
                                                <li>
                                                    <a href="#">Basic History Of UI Design</a>
                                                    <p>January 20,2017 at 9:00 pm</p>
                                                </li>
                                                <li>
                                                    <a href="#">Basic History Of UI Design</a>
                                                    <p>January 20,2017 at 9:00 pm</p>
                                                </li>
                                                <li>
                                                    <a href="#">Basic History Of UI Design</a>
                                                    <p>January 20,2017 at 9:00 pm</p>
                                                </li>
                                                <li>
                                                    <a href="#">Basic History Of UI Design</a>
                                                    <p>January 20,2017 at 9:00 pm</p>
                                                </li>
                                                <li>
                                                    <a href="#">Basic History Of UI Design</a>
                                                    <p>January 20,2017 at 9:00 pm</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-8">
                                        <div class="dropbox-update">
                                            <h2>Write an update...</h2>
                                            <div class="file-mg">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-upload" aria-hidden="true"></i> Upload</a></li>
                                                    <li><a href="#"><i class="fa fa-files-o" aria-hidden="true"></i> My files</a></li>
                                                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i> Links</a></li>
                                                </ul>
                                                <a href="#">Post</a>
                                            </div>
                                            <div class="file-content">
                                                <div class="file-content3">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="{{ asset('assets/client/assets/img/dropbox-img.jpg') }}" alt="dropbox-img"/>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <p>Daniel Smith has submitted class summary and the students are requested to check it.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="file-content2">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="images">
                                                                <img src="{{ asset('assets/client/assets/img/ui-ux-img.jpg') }}" alt="ui-ux"/>
                                                            </div>
                                                            <div class="text">
                                                                <strong>UI/UX Advanced level part-05</strong><br/>
                                                                115kB<br/>
                                                                By Daniel Smith
                                                            </div>
                                                            <a href="#">Download</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="file-content2">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="images">
                                                                <img src="{{ asset('assets/client/assets/img/ui-ux-img.jpg') }}" alt="ui-ux"/>
                                                            </div>
                                                            <div class="text">
                                                                <strong>UI/UX Advanced level part-05</strong><br/>
                                                                115kB<br/>
                                                                By Daniel Smith
                                                            </div>
                                                            <a href="#">Download</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="file-content2">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="images">
                                                                <img src="{{ asset('assets/client/assets/img/ui-ux-img.jpg') }}" alt="ui-ux"/>
                                                            </div>
                                                            <div class="text">
                                                                <strong>UI/UX Advanced level part-05</strong><br/>
                                                                115kB<br/>
                                                                By Daniel Smith
                                                            </div>
                                                            <a href="#">Download</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="file-content2">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <a href="#" class="view-btn">View More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i> <sup>10</sup></a></li>
                            <li><a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                                    <i class="fa fa-cog" aria-hidden="true"></i></a>
                                <div class="setting dropdown-menu">
                                    <img src="{{ asset('assets/client/assets/img/dropdown-setting-img.jpg') }}" alt="dropdown-setting-img"/>
                                    <div class="setting-ul">
                                        <ul>
                                            <li>
                                                <div class="search-box">
                                                    <input type="text" placeholder="Search Type"/>
                                                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                </div>
                                            </li>
                                            <li><a href="#">Quick Question <span>20</span></a></li>
                                            <li><a href="#">Total Videos</a></li>
                                            <li><a href="#">Video Lecture</a></li>
                                            <li><a href="#">Assignment</a></li>
                                            <li><a href="#">Notice Board</a></li>
                                            <li><a href="#">Exams</a></li>
                                            <li><a href="#">Results and Ranking</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-img">
            <img src="{{ asset('assets/client/assets/img/inside-header.jpg') }}" alt="inside-image"/>
        </div>
    </header>
    <section class="classroom-container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 wow fadeInLeft  animated">
                    <div class="vedio-box">
                        <img src="{{ $course->image }}" alt="vedio-img"/>
                    </div>
                    <div class="vedio-box-text">
                        <ul>
                            <li><span>Course name :</span> {{ $course->name }}</li>
                            <li><span>Instructor :</span> Travil Davis ( IT Professional) </li>
                            <li><span>Lecture No :</span> 12</li>
                            <li><span>Length :</span> 2:30 Hours</li>
                            <li><span>Language :</span> English</li>
                            <li><div class="star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i>  <span>4.5 Ratings ( 204 students enrolled )</span></div></li>
                            <li><a href="#">Join Now</a></li>
                        </ul>
                    </div>
                </div>
                <div class="upcomming-container col-xs-12 col-sm-6 col-md-6 wow fadeInRight  animated">
                    <h2>
                        Upcoming Classes
                    </h2>
                    <div class="row">
                        <ul>
                            @foreach ($course->subjects as $subject)
                            <li>
                                <div class="upcommin-text-outer">
                                    <div class="upcomming-img">
                                        <img src="{{ asset('assets/client/assets/img/uc-img1.jpg') }}" alt="us-img"/>
                                    </div>
                                    <div class="upcommin-text">
                                        <p><b><a class="showListTask" data-subject-id="{{ $subject->id }}" data-toggle="modal" data-target="#modalListTask">{{ $subject->name }}</a></b></p>
                                        <p class="cut-string">{{ $subject->description }}</p>
                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i>  at 9: 00 p.m by Orion mimin</span>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="discussion-contaniner">
		<div class="container">
			<div class="row">				
				<div class="discussion">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                            <h4>Discussion</h4>
                            <div class="questions">
                                <img src="{{ asset('assets/client/assets/img/dn-img.jpg') }}" alt="dn"> <span><input style="border: none; width: calc(100% - 128px);" type="text" name="comment" placeholder="Write your questions here..."></span>
                            </div>
                            <div class="taype-select">
                                <a class="btn btn-default btn-select options2">
                                    <input type="hidden" class="btn-select-input" id="1" name="1" value="" />
                                    <span class="btn-select-value">Select an Item</span>
                                    <span class="btn-select-arrow fa fa-angle-down"></span>
                                    <ul>
                                        <li class="selected">Default Sorting</li>
                                        <li>Option 1</li>
                                        <li>Option 2</li>
                                        <li>Option 3</li>
                                        <li>Option 4</li>
                                    </ul>
                                </a>
                            </div>
                            
                            <div class="discussion-comment">
                                <ul>
                                    <li>
                                        <div class="comment-text1">
                                            <img src="{{ asset('assets/client/assets/img/comment-img.jpg') }}" alt="comment"/>
                                            <div class="text">
                                                <strong>Adrite rowshan</strong>
                                                <p>Is it perfect for others sides? I need two ways of it.</p>
                                                <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-text1 reply">
                                            <img src="{{ asset('assets/client/assets/img/comment-img2.jpg') }}" alt="comment"/>
                                            <div class="text">
                                                <strong>Adrite rowshan</strong>
                                                <p>Is it perfect for others sides? I need two ways of it.</p>
                                                <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-text1">
                                            <img src="{{ asset('assets/client/assets/img/comment-img.jpg') }}" alt="comment"/>
                                            <div class="text">
                                                <strong>Adrite rowshan</strong>
                                                <p>Is it perfect for others sides? I need two ways of it.</p>
                                                <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-text1 reply">
                                            <img src="{{ asset('assets/client/assets/img/comment-img2.jpg') }}" alt="comment"/>
                                            <div class="text">
                                                <strong>Adrite rowshan</strong>
                                                <p>Is it perfect for others sides? I need two ways of it.</p>
                                                <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-text1">
                                            <img src="{{ asset('assets/client/assets/img/comment-img.jpg') }}" alt="comment"/>
                                            <div class="text">
                                                <strong>Adrite rowshan</strong>
                                                <p>Is it perfect for others sides? I need two ways of it.</p>
                                                <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-text1 reply">
                                            <img src="{{ asset('assets/client/assets/img/comment-img2.jpg') }}" alt="comment"/>
                                            <div class="text">
                                                <strong>Adrite rowshan</strong>
                                                <p>Is it perfect for others sides? I need two ways of it.</p>
                                                <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>	
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="modal fade bd-example-modal-lg" id="modalListTask" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLongTitle">List Subjects</h3>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    {{-- <div id="loading-form">
                                        <img id="img-loading" src="{{ asset('images/loading/loading1.gif') }}" alt="">
                                    </div> --}}
                                    <ul class="list-subject">
                                        <li>
                                            <div class="subject-name">
                                                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                                <b><a data-dismiss="modal" data-toggle="modal" data-target="#modalShowTask">Task Name</a></b>
                                            </div>
                                            <div class="subject-description">kgdkaujbdhkawdbkjadbkjabkawd</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button-close" data-dismiss="modal">Close</button>
                                {{-- <button type="button" class="button-submit">Save changes</button> --}}
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="modal fade bd-example-modal-lg" id="modalShowTask" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLongTitle">Task: Task Name</h3>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <ul class="show-task">
                                        <li>
                                            <div class="Task-name">
                                                {{-- <i class="fa fa-hand-o-right" aria-hidden="true"></i> --}}
                                                <b><a>Task Description</a></b>
                                            </div>
                                            <div class="task-description">kgdkaujbdhkawdbkjadbkjabkawd</div>
                                            <div class="task-report">
                                                <label for="textarea">Report</label>
                                                <textarea style="border: 1px solid; border-radius: 5px;" name="report" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button-close" data-dismiss="modal">Close</button>
                                <button type="button" class="button-submit btn-report">Report</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
