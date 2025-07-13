<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function fetch(Request $request)
    {
        // Fetch data from external API
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');

        // Get the response data as array
        $posts = $response->json();

        // Pass it to the view
        return view('api', compact('posts'));
    }
}
