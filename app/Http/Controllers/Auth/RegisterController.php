<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Ensure you are using the correct namespace

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'jumlah_tamu' => 'required|integer',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'domisili' => 'required|string',
            'tujuan' => 'required|string',
            'staff' => 'nullable|string',
            'keterangan' => 'nullable|string',
        ]);

        // Create a new user in the database
        User::create($request->all());

        // You can add a success message or redirect to a success page here
        return redirect()->route('register')->with('success', 'Registration successful!');
    }
}
