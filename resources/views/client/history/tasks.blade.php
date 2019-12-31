<table class="table table-striped table-schedule">
    <thead>
        <tr class="bg-theme-colored">
            <th>{{ trans('layouts.date') }}</th>
            <th>{{ trans('layouts.time') }}</th>
            <th>{{ trans('layouts.event') }}</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($tasksHistory as $task)
        <tr>
            <td><strong>{{ substr($task['date'], 0, 10) }}</strong></td>
            <td><em>{{ substr($task['date'], 11, 8) }}</em></td>
            <td>{{ $task['content'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

