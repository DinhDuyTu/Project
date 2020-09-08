$(document).ready(function () {
    $('#courses_option').click(function(){
        $('#btn-courses-option').click();
    });
});
$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});
$(document).ready(function () {
	$(document).on('click', 'a.showListTask', function () {
		let html = '';
		let data = {
			id: $(this).attr('data-subject-id')
		}
		$.ajax({
			type: "GET",
			url: "/ajax/get_list_task_of_subject",
			data: data,
			success: function (response) {
				$.each(response, function (key, task) { 
					html += '<li><div class="subject-name"><i class="fa fa-hand-o-right" aria-hidden="true"></i> <b><a id="showTask" data-task-id="' + task.id + '" data-dismiss="modal" data-toggle="modal" data-target="#modalShowTask">' + task.name + '</a></b></div><div class="subject-description cut-string">' + task.description + '</div></li>'
				});
				$('#modalListTask .list-subject').html(html);
			}
		});
		
	})
	$(document).on('click', '#showTask', function () {
		let html = '';
		let data = {
			id: $(this).attr('data-task-id')
		}
		$.ajax({
			type: "GET",
			url: "/ajax/get_task",
			data: data,
			success: function (response) {
				$('.show-task .task-description').html(response.description);
				console.log(response)
				// $.each(response, function (key, task) { 
				// 	html += '<li><div class="subject-name"><i class="fa fa-hand-o-right" aria-hidden="true"></i> <b><a data-task-id="' + task.id + '" data-dismiss="modal" data-toggle="modal" data-target="#modalShowTask">' + task.name + '</a></b></div><div class="subject-description cut-string">' + task.description + '</div></li>'
				// });
				// $('#modalListTask .list-subject').html(html);
			}
		});
	})
})