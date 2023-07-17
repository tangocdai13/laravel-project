<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class StudentController extends Controller
{
    protected $students;

    public function __construct()
    {
        $this->students = [
            [
                'id' => 1,
                'name' => 'Student 01'
            ],
            [
                'id' => 2,
                'name' => 'Student 02'
            ],
            [
                'id' => 3,
                'name' => 'Student 03'
            ],
        ];
    }

    public function index()
    {
        $students = $this->students;
        return view('students.list', ['students' => $students]);
    }

    public function show($id)
    {
        $student = null;

        foreach ($this->students as $item) {
            if($item['id'] == $id ) {
                $student = $item;
                break;
            }
        }

        if ($student) {
            return view('students.show', [
                'student' => $student
            ]);
        } else {
            return "No data";
        }
    }
}
