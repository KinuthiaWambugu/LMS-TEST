<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LMS Platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-br from-blue-100 via-white to-purple-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-lg px-6">

        <!-- Card -->
        <div class="bg-white shadow-xl rounded-2xl p-10 text-center border border-gray-100">

            <!-- Logo / Title -->
            <h1 class="text-4xl font-extrabold text-gray-800 mb-3">
                LMS Platform
            </h1>

            <p class="text-gray-500 mb-8">
                Learn, manage courses, and test your knowledge with quizzes.
            </p>

            <!-- Auth Buttons -->
            @guest
                <div class="flex flex-col sm:flex-row gap-4 justify-center">

                    <a href="{{ route('login') }}"
                       class="w-full sm:w-auto px-6 py-3 bg-blue-600 text-white font-semibold rounded-xl shadow-md hover:bg-blue-700 transition duration-200">
                        Login
                    </a>

                    <a href="{{ route('register') }}"
                       class="w-full sm:w-auto px-6 py-3 bg-green-600 text-white font-semibold rounded-xl shadow-md hover:bg-green-700 transition duration-200">
                        Register
                    </a>

                </div>
            @endguest

            <!-- Dashboard Button -->
            @auth
                <div class="mt-6">
                    <a href="{{ route('dashboard') }}"
                       class="px-8 py-3 bg-purple-600 text-white font-semibold rounded-xl shadow-md hover:bg-purple-700 transition duration-200">
                        Go to Dashboard
                    </a>
                </div>
            @endauth

            <!-- Divider -->
            <div class="my-8 border-t"></div>

            <!-- Features -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-sm text-gray-600">

                <div class="p-3 bg-gray-50 rounded-lg">
                    📚 Courses
                </div>

                <div class="p-3 bg-gray-50 rounded-lg">
                    🧠 Quizzes
                </div>

                <div class="p-3 bg-gray-50 rounded-lg">
                    📊 Results
                </div>

            </div>

        </div>

        <!-- Footer -->
        <p class="text-center text-gray-400 text-sm mt-6">
            © {{ date('Y') }} LMS Platform
        </p>

    </div>

</body>
</html>