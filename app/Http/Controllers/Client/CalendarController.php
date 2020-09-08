<?php

namespace App\Http\Controllers\Client;

use App\Repositories\Task\TaskRepositoryInterface;
use App\Repositories\Subject\SubjectRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;

class CalendarController extends Controller
{
    protected $subjectRepository;
    protected $taskRepository;

    public function __construct(SubjectRepositoryInterface $subjectRepository, TaskRepositoryInterface $taskRepository)
    {
        $this->subjectRepository = $subjectRepository;
        $this->taskRepository = $taskRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $subjects = DB::table('user_subject')->where('user_id', Auth::User()->id)->get();
        $subjectCalendar = collect();
        foreach($subjects as $subject) {
            $subject1['created_at'] = $subject->created_at;
            if ($subject->updated_at != null) {
                $subject1['updated_at'] = $subject->updated_at;
            } else {
                $subject1['updated_at'] = now();
            }
            $subject1['name'] = $this->subjectRepository->find($subject->subject_id)->name;
            $subjectCalendar->push($subject1);
        }
        $tasks = DB::table('user_task')->where('user_id', Auth::User()->id)->get();
        $taskCalendar = collect();
        foreach($tasks as $task) {
            $task1['created_at'] = $task->created_at;
            if ($task->updated_at != null) {
                $task1['updated_at'] = $task->updated_at;
            } else {
                $task1['updated_at'] = now();
            }
            $task1['name'] = $this->taskRepository->find($task->task_id)->name;
            $taskCalendar->push($task1);
        }

        return view('client.calendar.index', compact('subjectCalendar', 'taskCalendar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
