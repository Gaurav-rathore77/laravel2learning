<!DOCTYPE html>
<html>
<head>
    <title>Random User</title>
    <style>
        .card {
            max-width: 600px;
            margin: 20px auto;
            background: #f7f7f7;
            padding: 20px;
            border-radius: 10px;
            font-family: Arial, sans-serif;
        }
        img {
            border-radius: 50%;
        }
        .row {
            margin: 10px 0;
        }
    </style>
</head>
<body>

@php
$user = $pakad['results'][0];
@endphp

<div class="card">
    <h2>{{ $user['name']['title'] }} {{ $user['name']['first'] }} {{ $user['name']['last'] }}</h2>
    <img src="{{ $user['picture']['large'] }}" width="100" alt="Profile Picture">
    
    <div class="row"><strong>Gender:</strong> {{ $user['gender'] }}</div>
    <div class="row"><strong>Email:</strong> {{ $user['email'] }}</div>
    <div class="row"><strong>Username:</strong> {{ $user['login']['username'] }}</div>
    <div class="row"><strong>Phone:</strong> {{ $user['phone'] }}</div>
    <div class="row"><strong>City:</strong> {{ $user['location']['city'] }}</div>
    <div class="row"><strong>Country:</strong> {{ $user['location']['country'] }}</div>
</div>

</body>
</html>
