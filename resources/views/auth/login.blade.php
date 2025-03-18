<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
        @error('email') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
        @error('password') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label>
            <input type="checkbox" name="remember"> Remember me
        </label>
    </div>
    <button type="submit">Login</button>
</form>
</body>
</html>
