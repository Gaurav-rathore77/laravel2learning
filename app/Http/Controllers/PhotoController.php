<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PhotoController extends Controller
{


    public function create()
    {
        return view('photos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store image
        $path = $request->file('image')->store('images', 'public');

        // Insert using raw SQL
        DB::insert('INSERT INTO photos (title, image_path, created_at, updated_at) VALUES (?, ?, ?, ?)', [
            $request->title,
            $path,
            now(),
            now()
        ]);

        return redirect()->route('photos.create')->with('success', 'Image uploaded using raw SQL!');
    }

    public function index()
    {
        // Get all photos using raw SQL
        $photos = DB::select('SELECT * FROM photos ORDER BY id DESC');

        return view('photos.index', compact('photos'));
    }
}

