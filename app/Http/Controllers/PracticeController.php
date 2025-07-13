<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Uppercase;

class PracticeController extends Controller
{
    public function validationUser(Request $request)
    {
        $request->validate([
            'name' => ['required', new Uppercase],
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }

    public function user()
    {
        return view('auth.user');
    }
}
