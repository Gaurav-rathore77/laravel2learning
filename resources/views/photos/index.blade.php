<!DOCTYPE html>
<html>
<head>
    <title>All Images (Raw SQL)</title>
</head>
<body>
    <h2>Uploaded Images</h2>

    @foreach($photos as $photo)
        <div>
            <h4>{{ $photo->title }}</h4>
            <img src="{{ asset('storage/' . $photo->image_path) }}" width="200">
        </div>
    @endforeach
</body>
</html>
