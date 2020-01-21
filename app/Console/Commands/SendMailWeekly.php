<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\JobSendMail;
use App\Jobs\test;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\Course\CourseRepositoryInterface;
use App\Repositories\Subject\SubjectRepositoryInterface;
use App\Repositories\Task\TaskRepositoryInterface;
use DB;
use Mail;

class SendMailWeekly extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Sendmail:weekly';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(
        UserRepositoryInterface  $userRepository,
        CourseRepositoryInterface  $courseRepository,
        SubjectRepositoryInterface  $subjectRepository,
        TaskRepositoryInterface  $taskRepository
    )
    {
        parent::__construct();
        $this->userRepository = $userRepository;
        $this->courseRepository = $courseRepository;
        $this->subjectRepository = $subjectRepository;
        $this->taskRepository = $taskRepository;
    }
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $trainee = $this->userRepository->getAll()->where('role_id', 0);
        foreach ($trainee as  $value) {
            // $mail = $value->email;
            // $userCourse = DB::table('user_course')
            //     ->where('user_id', $value->id)
            //     ->where('status', 0)
            //     ->get();
            // foreach ($userCourse as $course) {
            //     $name['course'] = $this->courseRepository->find($course->course_id)->name;
            // }
            // $userSubject = DB::table('user_subject')
            //     ->where('user_id', $value->id)
            //     ->where('status', 0)
            //     ->get();
            // foreach ($userSubject as $subject) {
            //     $name['subject'] = $this->subjectRepository->find($subject->subject_id)->name;
            // }
            // $userTask = DB::table('user_task')
            //     ->where('user_id', $value->id)
            //     ->where('status', 0)
            //     ->get();
            // foreach ($userTask as $task) {
            //     $name['task'] = $this->taskRepository->find($task->task_id)->name;
            // }
            $mail = 'chittchannels@gmail.com';
            $name = 'name';
            $job = new JobSendMail($mail, $name);
            dispatch($job);
        }
    }
}
