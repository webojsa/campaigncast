<!DOCTYPE html>
<html>
<head>
    <title>Verify Email</title>
</head>
<body>
<h1>Verify Your Email Address</h1>
<p>A verification link has been sent to your email address.</p>
<p>Please check your inbox (and spam/junk folder) and click the link to verify your email.</p>
@if (session('status') == 'verification-link-sent')
    <p style="color: green;">A new verification link has been sent to your email.</p>
@endif
<form method="POST" action="{{ route('verification.send') }}">
    @csrf
    <button type="submit">Resend Verification Email</button>
</form>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
</body>
</html>
