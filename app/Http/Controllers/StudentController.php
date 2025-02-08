<?php

namespace App\Http\Controllers;

use App\Models\students;
use App\Models\teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index()
    {
        $teachers = teachers::all();
        return view('create', compact('teachers'));
    }
    public function create(Request $request)
    {
        $data = $request->validate([
            "student_name" => "required|string|max:50",
            "class" => "required|string|max:50",
            "class_teacher_id" => "required|integer|max:50|exists:teachers,id",
            "admission_date" => "required|date",
            "yearly_fees" => "required|integer",
        ]);
        students::create($data);
        return redirect()->route('students.show')->with('success', 'student created successfully');
    }

    public function createteacher(Request $request)
    {
        $data = $request->validate([
            "name" => "required|string|max:50",
            "email" => "required|email|unique:teachers,email",
            "phone" => "required|integer|digits:10",
            "password" => "required|min:6|confirmed"
        ]);
        teachers::create($data);
        return redirect()->route('login')->with('success', 'teacher created successfully');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('teacher')->attempt($credentials)) {
            return redirect()->route('students.show')->with('success', 'Login successful!');
        }

        return back()->with('error', 'Invalid credentials, please try again.');
    }

    public function showStudent(Request $request)
    {
        $students = students::with('teacher')->get();
        // dd($students);
        return view('index', compact('students'));
    }
    public function edit($id)
    {
        $student = students::findOrFail($id);
        $teachers = teachers::all();
        return view('edit', compact('student', 'teachers'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'student_name' => 'required|string|max:255',
            'class_teacher_id' => 'required|exists:teachers,id',
            'class' => 'required|string|max:100',
            'admission_date' => 'required|date',
            'yearly_fees' => 'required|numeric|min:0',
        ]);

        $student = students::findOrFail($id);
        $student->update([
            'student_name' => $request->student_name,
            'class_teacher_id' => $request->class_teacher_id,
            'class' => $request->class,
            'admission_date' => $request->admission_date,
            'yearly_fees' => $request->yearly_fees,
        ]);

        return redirect()->route('students.show')->with('success', 'Student updated successfully.');
    }
    public function destroy($id)
    {
        $student = students::findOrFail($id);
        $student->delete();

        return redirect()->route('students.show')->with('success', 'Student deleted successfully.');
    }

}
