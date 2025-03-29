<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Your Email | CampaignCast</title>

    <!-- Fonts & Styles -->
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gradient-to-r from-indigo-100 via-white to-indigo-200 flex items-center justify-center">

<div class="max-w-md w-full bg-white shadow-lg rounded-lg p-8">
    <!-- Title -->
    <div class="text-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Verify Your Email</h1>
    </div>

    <!-- Instructions -->
    <p class="text-gray-600 text-center mb-6">
        Thanks for signing up! Before getting started, please verify your email address by clicking the link we just emailed to you. If you didn't receive the email, we will gladly send you another.
    </p>

    <!-- Session Status -->
    @if (session('status') == 'verification-link-sent')
        <div class="p-4 mb-6 text-sm text-green-700 bg-green-100 rounded-lg">
            A new verification link has been sent to your email address.
        </div>
    @endif

    <!-- Resend Verification Form -->
    <form method="POST" action="{{ route('verification.send') }}" class="mb-6">
        @csrf
        <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-500">
            Resend Verification Email
        </button>
    </form>

    <!-- Logout Button -->
    <div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-indigo-600 py-2 px-4 border border-indigo-600 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-indigo-500">
                Logout
            </button>
        </form>
    </div>
</div>

</body>
</html>
