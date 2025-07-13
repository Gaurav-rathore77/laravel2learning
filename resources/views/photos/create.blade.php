<!DOCTYPE html>
<html>
<head>
    <title>Raw SQL Image Upload</title>
</head>
<body>
    <h2>Upload Image using Raw SQL</h2>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p style="color: red">{{ $error }}</p>
        @endforeach
    @endif

    <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Title"><br><br>
        <input type="file" name="image"><br><br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
