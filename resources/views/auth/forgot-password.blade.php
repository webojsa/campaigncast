<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | CampaignCast</title>

    <!-- Fonts & Styles -->
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gradient-to-r from-indigo-100 via-white to-indigo-200 flex items-center justify-center">

<!-- Forgot Password Form -->
<div class="max-w-md w-full bg-white shadow-lg rounded-lg p-8">
    <!-- Title and Description -->
    <div class="text-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Forgot Your Password?</h1>
        <p class="mt-1 text-gray-600">Enter your email and we’ll send you a link to reset your password.</p>
    </div>

    <!-- Session Status -->
    @if (session('status'))
        <div class="p-4 mb-6 text-sm text-green-700 bg-green-100 rounded-lg">
            {{ session('status') }}
        </div>
    @endif

    <!-- Form -->
    <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @error('email')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-500">
                Send Password Reset Link
            </button>
        </div>
    </form>

    <!-- Back to Login -->
    <div class="mt-6 text-center">
        <a href="{{ route('login') }}" class="text-sm text-indigo-600 font-medium hover:underline">Back to Login</a>
    </div>
</div>

</body>
</html>
