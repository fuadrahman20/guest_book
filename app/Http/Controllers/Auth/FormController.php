<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\FormData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FormController extends Controller
{
    public function store(Request $request)
    {
        
        // Validate the form data, including email and password for user registration
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'jumlah_tamu' => 'required|integer',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'domisili' => 'required|string',
            'tujuan' => 'required|string',
            'staff' => 'nullable|string',
            'keterangan' => 'required|string',
        ]);

        // Create a new FormData instance and save it to the database
        // FormData::create($validatedData);

        // You can add logic here to handle user registration using the FormData model
        // For example, you might hash the password and save it to the same FormData table
        // $validatedData['password'] = Hash::make($validatedData['password']);
        FormData::create($validatedData);

        // You can customize the redirect or response as needed
        return redirect()->back()->with('success', 'Form submitted successfully! User registered.');
    }

    public function register(){
        // dd('masuk register');
        return view('auth.register', [
            'title' => 'Register',
        ]);
    }
}
