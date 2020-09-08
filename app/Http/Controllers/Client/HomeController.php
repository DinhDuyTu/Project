<?php

namespace App\Http\Controllers\Client;

use App\Repositories\Course\CourseRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $courseRepository;
    protected $userRepository;

    public function __construct(CourseRepositoryInterface $courseRepository, UserRepositoryInterface $userRepository)
    {
        $this->courseRepository = $courseRepository;
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users = $this->userRepository->getUserByRole(1);
        $courses = $this->courseRepository->getCourse(8);

        return view('client.index', compact('courses', 'users'));
    }
}
