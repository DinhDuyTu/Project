@extends('client.layouts.main')
@section('content')
<header class="insid-header">
    <div class="top-menu">
        @include('client.layouts.top-header')
        @include('client.layouts.navbar')
    </div>
    <div class="header-title">
        <h1>CALENDAR</h1>
    </div>
</header>
<div class="main-content">
    <section class="divider bg-lightest">
        <div class="container">
            <div class="section-content text-center">
                <div class="row">
                    <div class="col-md-12">
                        <div id='full-event-calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<input type="hidden" id="subject-calendar" value="{{ json_encode($subjectCalendar) }}">
<input type="hidden" id="task-calendar" value="{{ json_encode($taskCalendar) }}">

<script>
    var calendarEvents = new Array();
    var subjects = document.getElementById('subject-calendar').value;
    var tasks = document.getElementById('task-calendar').value;
    subjects = JSON.parse(subjects);
    tasks = JSON.parse(tasks);
    for(let i = 0; i < subjects.length; i++) {
        calendarEvents[i] = {
            'title': subjects[i]['name'],
            'start': subjects[i]['created_at'].slice(0, 10),
            'end': subjects[i]['updated_at'].slice(0, 10),
            'textColor': 'white',
            'backgroundColor': '#F2552C',
        };
    }
    for (let i = subjects.length; i < subjects.length + tasks.length; i++) {
        calendarEvents[i] = {
            'title': tasks[i]['name'],
            'start': tasks[i]['created_at'].slice(0, 10),
            'end': tasks[i]['updated_at'].slice(0, 10),
            'textColor': 'white',
            'backgroundColor': '#091A2F',
        };
    }
</script>
@endsection