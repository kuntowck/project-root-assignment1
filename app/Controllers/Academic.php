<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_Course;
use App\Models\M_Mahasiswa;

class Academic extends BaseController
{
    private $courseModel, $mahasiswaModel;

    public function __construct()
    {
        $this->courseModel = new M_Course();
        $this->mahasiswaModel = new M_Mahasiswa();
    }

    public function index()
    {
        $courses = $this->courseModel->getAllCoursesArray();

        $data = [
            'title' => 'Course List',
            'courses' => $courses
        ];

        return view('academic/course_list', $data);
    }

    public function statistic()
    {
        $students = count($this->mahasiswaModel->getAllStudentsArray());
        $courses = count($this->courseModel->getAllCoursesArray());

        $data = [
            'title' => 'Academic Statistics',
            'students' => $students,
            'courses' => $courses
        ];

        return view('academic/statistics', $data);
    }
}
