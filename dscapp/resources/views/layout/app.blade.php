<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>App</title>
</head>
<body class="bg-gray-800">
    <nav class="flex justify-between bg-white p-6 mb-4">
        <ul class="flex">
            <li class="mx-2 font-bold"><a href="">App Logo</a></li>
            <li class="mx-2"><a href="">Dashboard</a></li>
        </ul>
        <ul class="flex">

            <!-- Display only when authorized -->
            <li class="mx-2"><a href="">User's Name</a></li>
            <li class="mx-2"><a href="">Logout</a></li>

            <!-- Display only when guest -->
            <li class="mx-2"><a href="">Login</a></li>
            <li class="mx-2"><a href="">Register</a></li>
            
        </ul>
    </nav>
    @yield('content')
</body>
</html>