<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        label {
            display: block;
            margin-bottom: 5px;
        }
        input {
            display: block;
            margin-bottom: 10px;
        }
        span {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Form Validation</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('auth.user') }}" method="POST">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        <span>@error('name'){{ $message }}@enderror</span>

        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}">
        <span>@error('email'){{ $message }}@enderror</span>

        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <span>@error('password'){{ $message }}@enderror</span>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
