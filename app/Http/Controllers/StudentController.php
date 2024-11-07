<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index');
    }
    public function records()
    {
        $students = Student::all();
        return view('students.records', ['students' => $students]);
    }
    public function attendance()
    {
        return view('students.attendance');
    }
    public function grades()
    {
        return view('students.grades');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'date_of_birth' => 'nullable|date',
            'enrollment_date' => 'nullable|date',
        ]);

        // Create a new student record
        $student = Student::create($validatedData);
        return redirect(route('students.records'));
    }

}
