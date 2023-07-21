<?php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.list',
            ['students' => $this->dataStudent()]
        );
    }

    public function show($id)
    {
        $students = $this->dataStudent();
        $student = null;
        foreach ($students as $item) {
            if ($item['id'] == $id) {
                $student = $item;
                break;
            }
        }
        if ($item['id'] != $id) {
            return 'No data';
        }

        return view('students.show', [
            'student' => $student,
        ]);
    }

    public function dataStudent()
    {
        $students = [
            [
                'id' => 1,
                'name' => 'Student 01',
            ],
            [
                'id' => 2,
                'name' => 'Student 02',
            ],
            [
                'id' => 3,
                'name' => 'Student 03',
            ],
        ];

        return $students;
    }
}
