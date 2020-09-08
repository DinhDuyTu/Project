<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zcube.in/elearning/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Apr 2018 15:58:02 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>E-Learning Bootstrap Theme</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" href="{{ asset('assets/client/assets/img/ficon.png') }}">
	<link rel="stylesheet" href="{{ asset('assets/client/assets/css/bootstrap.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('assets/client/assets/css/bootstrap-dropdownhover.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('assets/client/assets/font/css/font-awesome.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('assets/client/assets/css/animate.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('assets/client/assets/css/style.css') }}" type="text/css">
	<link href="{{ asset('assets/client/assets/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/client/assets/owl-carousel/owl.theme.css') }}" rel="stylesheet">
	{{-- Full Calendar Package --}}
	<link href="{{ asset('full_calendar/packages/core/main.css') }}" rel='stylesheet' />
	<link href="{{ asset('full_calendar/packages/daygrid/main.css') }}" rel='stylesheet' />
	<link href="{{ asset('full_calendar/packages/timegrid/main.css') }}" rel='stylesheet' />
	<link href="{{ asset('full_calendar/packages-premium/timeline/main.css') }}" rel='stylesheet' />
	<link href="{{ asset('full_calendar/packages-premium/resource-timeline/main.css') }}" rel='stylesheet' />
	<script src="{{ asset('full_calendar/packages/core/main.js') }}"></script>
	<script src="{{ asset('full_calendar/packages/interaction/main.js') }}"></script>
	<script src="{{ asset('full_calendar/packages/daygrid/main.js') }}"></script>
	<script src="{{ asset('full_calendar/packages/timegrid/main.js') }}"></script>
	<script src="{{ asset('full_calendar/packages-premium/timeline/main.js') }}"></script>
	<script src="{{ asset('full_calendar/packages-premium/resource-common/main.js') }}"></script>
	<script src="{{ asset('full_calendar/packages-premium/resource-timeline/main.js') }}"></script>
</head>

<body>
    @include('client.layouts.loading')
{{--	@include('client.layouts.header')--}}
	@yield('content')
	@include('client.layouts.footer')
	<input type="hidden" name="eventPusher" id="eventPusher" value="{{ Auth::user()->id }}">
	<script src="https://js.pusher.com/5.0/pusher.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="{{ asset('assets/client/assets/js/jquery.js') }}"></script>
	<script src="{{ asset('assets/client/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/client/assets/js/bootstrap-dropdownhover.min.js') }}"></script>
	<script src="{{ asset('assets/client/assets/js/jquery.easing.min.js') }}"></script>
	<script src="{{ asset('assets/client/assets/js/jquery.fittext.js') }}"></script>
	<script src="{{ asset('assets/client/assets/js/wow.min.js') }}"></script>
	<script src="{{ asset('assets/client/assets/js/modernizr.html') }}"></script>
	<script src="{{ asset('assets/client/assets/js/main.html') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/client/assets/js/jquery.countTo.js') }}"></script>
	<script src="{{ asset('assets/client/assets/owl-carousel/owl.carousel.js') }}"></script>
	<script src="{{ asset('assets/client/assets/js/custom.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript">
	    // Pusher.logToConsole = true;
	    var pusher = new Pusher('8a6adeb53a54a1e5d748', {
	        cluster: 'ap1',
	        encrypted: true,
	    });
	    var count = 0;
	    var channel = pusher.subscribe('NotificationEvent');
	    var eventPusher = 'message' + $('#eventPusher').val();
	    channel.bind('message1', function (data) {
	        var avatar = '';
	        var html = `<div class="media">
                        <div class="media-left">
                            <div class="media-object">
                                <img src="/images/avatar/avatar-defult.jpeg" class="img-circle" alt="50x50">
                            </div>
                        </div>
                        <div class="media-body">
                            <strong class="notification-title">` + data.title + `</strong>
                            <div class="notification-meta">
                                <small class="timestamp">about a minute ago</small>
                            </div>
                        </div>
                    </div>`
              count++;
            $('span.notif-count').text(count);
	        $('div.menu-notification').prepend(html);
	    });
	</script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var calendarEl = document.getElementById('full-event-calendar');
			var calendar = new FullCalendar.Calendar(calendarEl, {
			plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'resourceTimeline' ],
			now: new Date(),
			header: {
				left: 'title',
				center: '',
				right: 'today prev,next'
			},
			defaultView: 'dayGridMonth',
			events: calendarEvents
			});
			calendar.render();
		});
	</script>
</body>
</html>
