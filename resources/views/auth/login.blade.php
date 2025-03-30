<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | CampaignCast</title>

    <!-- Fonts & Styles -->
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gradient-to-r from-green-100 via-white to-green-200 flex items-center justify-center">

<!-- Login Form -->
<div class="max-w-md w-full bg-white shadow-lg rounded-lg p-8">
    <!-- Logo or Title -->
    <div class="text-center mb-6">
        <div class="flex justify-center mt-8 space-x-4">
            <img src="{{ asset('assets/img/CCLogo2.png') }}" alt="CampaignCast Logo" class="h-30 w-30">
        </div>
        <p class="mt-1 text-gray-600">Sign in to your account</p>
    </div>

    <!-- Form -->
    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required
                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            @error('email')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password" required
                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            @error('password')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="flex items-center">
            <input id="remember_me" name="remember" type="checkbox"
                   class="h-4 w-4 text-green-600 border-gray-300 rounded focus:ring-green-500">
            <label for="remember_me" class="ml-2 block text-sm text-gray-800">Remember Me</label>
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" class="w-full bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 focus:ring-4 focus:ring-green-500">
                Login
            </button>
        </div>
    </form>

    <!-- Footer Links -->
    <div class="mt-6 text-center">
        <p class="text-sm text-gray-600">
            Forgot your password?
            <a href="{{ route('password.request') }}" class="text-green-600 font-medium hover:underline">Reset here</a>
        </p>
        <p class="text-sm text-gray-600 mt-4">
            Don't have an account?
            <a href="{{ route('register') }}" class="text-green-600 font-medium hover:underline">Sign up now</a>
        </p>
    </div>
</div>

</body>
</html>
