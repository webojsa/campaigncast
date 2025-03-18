<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
<h1>Welcome, {{ auth()->user()->name }}!</h1>
<p>Role: {{ auth()->user()->role }}</p>
<p>Status: {{ auth()->user()->status }}</p>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
</body>
</html>
