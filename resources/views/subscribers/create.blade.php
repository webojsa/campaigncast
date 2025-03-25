<!DOCTYPE html>
<html>
<head>
    <title>Add Subscriber</title>
</head>
<body>
<h1>Add Subscriber</h1>
@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif
@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- todo: Add button importing subscribers via CSV file feature -->
<form method="POST" action="{{ route('subscribers.store') }}">
    @csrf
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email">
    </div>
    <div>
        <label for="phone">Phone</label>
        <input id="phone" type="text" name="phone">
    </div>
    <div>
        <label for="push_token">Push Token (optional)</label>
        <input id="push_token" type="text" name="push_token">
    </div>
    <div>
        <label for="name">Name (optional)</label>
        <input id="name" type="text" name="name">
    </div>
    <div>
        <label for="country">Country</label>
        <select id="country" name="country">
            <option value=''></option>
            @foreach($countryOptions as $code => $title)
                <option value={{ $code }}>{{ $title }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Add Subscriber</button>
</form>
<a href="{{ route('home') }}">Back to Home</a>
</body>
</html>
