@extends('layout')

@section('content')
    <div class="card shadow-sm mx-auto" style="max-width: 600px;">
        <div class="card-header bg-success text-white text-center">
            <h4>Add Student</h4>
        </div>

        <div class="card-body">
            {{-- Validation Errors --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('students.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Student Name:</label>
                    <input type="text" name="student_name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Class:</label>
                    <input type="text" name="class" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Class Teacher:</label>
                    <select name="class_teacher_id" class="form-select" required>
                        <option value="">Select a Teacher</option>
                        @foreach($teachers as $teacher)
                            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Admission Date:</label>
                    <input type="date" name="admission_date" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Yearly Fees:</label>
                    <input type="number" name="yearly_fees" class="form-control" step="0.01" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
                    <button type="submit" class="btn btn-primary">Save Student</button>
                </div>
            </form>
        </div>
    </div>
@endsection
