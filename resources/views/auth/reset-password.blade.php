<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
<h1>Reset Password</h1>
<form method="POST" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $request->route('token') }}">
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required>
        @error('email') <span style="color: red;">{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="password">New Password</label>
        <input id="password" type="password" name="password" required>
        @error('password') <span style="color: red;">{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="password_confirmation">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>
    <button type="submit">Reset Password</button>
</form>
<a href="{{ route('login') }}">Back to Login</a>
</body>
</html>
