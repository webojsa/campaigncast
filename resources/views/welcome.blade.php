<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CampaignCast</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50 flex flex-col min-h-screen">
<!-- Header -->
<header class="w-full bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-gray-800">CampaignCast</h1>
        <!-- Navigation Links -->
        <div class="space-x-4">
            <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-800 font-medium">Login</a>
            <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-800 font-medium">Register</a>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="flex-grow py-16 px-4">
    <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-4xl font-extrabold text-gray-800 sm:text-5xl">
            Welcome to CampaignCast
        </h1>
        <p class="mt-6 text-lg text-gray-600 max-w-3xl mx-auto">
            CampaignCast is your ultimate tool for creating and managing campaigns. Sign up today to get access to powerful messaging tools.
        </p>
        <div class="flex justify-center mt-8 space-x-4">
            <a href="{{ route('register') }}"
               class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                Get Started
            </a>
            <a href="{{ route('login') }}"
               class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">
                Login
            </a>
        </div>
    </div>

    <!-- Additional Content -->
    <section class="mt-12">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-2xl font-semibold text-gray-800">
                Why Choose CampaignCast?
            </h2>
            <p class="mt-4 text-gray-600">
                CampaignCast offers advanced features such as automated messaging, detailed reporting, and much more.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-8 max-w-7xl mx-auto">
            <div class="bg-white shadow rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-800">Automated Messaging</h3>
                <p class="mt-2 text-gray-600">
                    Reach your audience effortlessly with our smart automation tools.
                </p>
            </div>
            <div class="bg-white shadow rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-800">Detailed Reporting</h3>
                <p class="mt-2 text-gray-600">
                    Analyze campaign performance with detailed analytics.
                </p>
            </div>
            <div class="bg-white shadow rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-800">Easy Integration</h3>
                <p class="mt-2 text-gray-600">
                    Seamlessly integrate CampaignCast into your workflow.
                </p>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<footer class="w-full bg-gray-800 py-6">
    <div class="max-w-7xl mx-auto text-center text-gray-400">
        <p class="text-sm">© 2023 CampaignCast. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
