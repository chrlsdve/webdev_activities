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

public function edit(Student $student)
{
    return view('students.edit', compact('student'));
}

public function update(Request $request, Student $student)
{
    $request->validate([
        'name' => 'required',
        'age' => 'required|integer',
        'course' => 'required',
    ]);

    $student->update($request->all());
    return redirect('/students')->with('success', 'Student updated.');
}

public function destroy(Student $student)
{
    $student->delete();
    return redirect('/students')->with('success', 'Student deleted.');
}

}
