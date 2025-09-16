<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all students from the database
    $students = \App\Models\Student::orderBy('id', 'desc')->get();

    // Return the view with the data
    return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'birthday' => 'nullable|date',
            'address' => 'nullable|string',
            'age' => 'nullable|integer',
        ]);

        Student::create($request->only(['name', 'email', 'birthday', 'address', 'age']));

        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Find the student by ID
        $student = \App\Models\Student::findOrFail($id);

        // Return the edit view with student data
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $student = \App\Models\Student::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,'.$student->id,
            'birthday' => 'nullable|date',
            'address' => 'nullable|string|max:255',
            'age' => 'nullable|integer|min:0',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         $student = \App\Models\Student::findOrFail($id);

        // Delete the student
        $student->delete();

        // Redirect back with a success message
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
}
}
