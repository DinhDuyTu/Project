<?php

namespace App\Repositories\Course;

interface CourseRepositoryInterface
{
	public function getModel();
	public function getCourseByTime();
	public function getSubjectByCourse($id);
	public function getCourseByCategory($arr);
	public function getCourse($limit);
}
