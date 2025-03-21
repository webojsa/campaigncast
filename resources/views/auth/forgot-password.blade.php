<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
</head>
<body>
    <h1>Forgot Your Password?</h1>
@if (session('status'))
    <p style="color: green;">{{ session('status') }}</p>
@endif
<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" required>
        @error('email') <span style="color: red;">{{ $message }}</span> @enderror
    </div>
    <button type="submit">Send Password Reset Link</button>
</form>
<a href="{{ route('login') }}">Back to Login</a>
</body>
</html>
