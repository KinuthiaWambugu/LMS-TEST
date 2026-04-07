<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learner Dashboard</title>
</head>
<body>
    <h1>Student Dashboard</h1>
    <p>Welcome, {{auth()->user()->name }}</p>
    <p>Role: {{auth()->user()->role }}</p>

    <hr>

    <h3>Your learning</h3>
    <ul>
        <li>My Courses</li>
        <li>My Quizzes</li>
        <li>View reports</li>
    </ul>

    <a href="{{ route('dashboard') }}">Back to main dashboard</a>
</body>
</html>