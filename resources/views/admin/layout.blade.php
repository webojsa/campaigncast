<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
<!-- Navigation Bar -->
<header class="bg-gray-800 text-white shadow">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <h1 class="text-lg font-bold">Admin Panel</h1>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit"
                    class="bg-red-600 text-white py-2 px-4 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                Logout
            </button>
        </form>
    </div>
</header>

<!-- Main Content -->
<main class="flex-grow container mx-auto px-4 py-10">
    @yield('content')
</main>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-4">
    <div class="text-center">&copy; {{ date('Y') }} CampaignCast. All Rights Reserved.</div>
</footer>
</body>
</html>
