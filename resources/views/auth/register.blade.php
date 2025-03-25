<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
<h1>Register</h1>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div>
        <label for="name">Name</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required>
        @error('name') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
        @error('email') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="phone">Phone (mobile)</label>
        <input id="phone" type="text" name="phone" value="{{ old('phone') }}">
        @error('phone') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
        @error('password') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="password_confirmation">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>
    <button type="submit">Register</button>
</form>
</body>
</html>
