<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- DataTables CSS --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        /* Adjust footer to always be at bottom */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body>

    {{-- Header Section --}}
    <header class="bg-primary text-white py-3">
        <div class="container">
            <h1 class="text-center">My Laravel App</h1>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <form action="{{ route('teacher.logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-link nav-link" style="border: none; background: none; cursor: pointer;">
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    {{-- Main Content Section --}}
    <main class="container my-4">
        @yield('content') {{-- This will be replaced by content from child views --}}
    </main>

    {{-- Footer Section --}}
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; {{ date('Y') }} My Laravel App</p>
    </footer>

    {{-- Bootstrap & jQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    {{-- DataTables JS --}}
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    {{-- DataTables Initialization --}}
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable();
        });
    </script>

</body>
</html>
