@extends('layout')

@section('content')
    <div class="card shadow-sm mx-auto mt-4" style="max-width: 450px;">
        <div class="card-header bg-primary text-white text-center">
            <h4>Teacher Login</h4>
        </div>

        <div class="card-body">
            {{-- Session Error Message --}}
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('loginteacher') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </form>

            <div class="text-center mt-3">
                <p>Don't have an account? <a href="{{ route('teachers.index') }}" class="btn btn-primary">Register</a></p>
            </div>
        </div>
    </div>
@endsection
