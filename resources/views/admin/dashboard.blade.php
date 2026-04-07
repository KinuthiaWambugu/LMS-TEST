<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <p>Welcome, {{auth()->user()->name }}</p>
    <p>Role: {{auth()->user()->role }}</p>

    <hr>

    <h3>Admin Controls</h3>
    <ul>
        <li>Manage Users</li>
        <li>Manage Courses</li>
        <li>View reports</li>
    </ul>

    <a href="{{ route('dashboard') }}">Back to main dashboard</a>
</body>
</html>