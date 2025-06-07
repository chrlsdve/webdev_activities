<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $students = Student::all();
    return view('students.index', compact('students'));
}

public function create()
{
    return view('students.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'age' => 'required|integer',
        'course' => 'required',
    ]);

    Student::create($request->all());
    return redirect()->route('students.index')->with('success', 'Student created successfully.');
}
}
