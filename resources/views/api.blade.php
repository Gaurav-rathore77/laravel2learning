<!DOCTYPE html>
<html>
<head>
    <title>API Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .post {
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>API Posts</h1>

    @foreach($posts as $post)
        <div class="post">
            <h2>{{ $post['title'] }}</h2>
            <p>{{ $post['body'] }}</p>
        </div>
    @endforeach
</body>
</html>
