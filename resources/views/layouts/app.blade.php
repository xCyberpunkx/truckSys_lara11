<!DOCTYPE html>
<html>
<head>
    <title>Laravel Camion Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>Camion Management System</h1>
        <nav>
            <a href="{{ url('/') }}" class="text-white">Home</a> |
            <a href="{{ url('/create') }}" class="text-white">Add New Camion</a>
        </nav>
    </header>
    <div class="container mt-4">
        @yield('content')
    </div>
    <footer class="bg-primary text-white text-center py-3 mt-4">
        <p>&copy; 2024 Camion Management. All rights reserved.</p>
    </footer>
</body>
</html>
