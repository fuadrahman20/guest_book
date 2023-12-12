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

        FormData::create($validatedData);

        return redirect()->back()->with('success', 'Form submitted successfully! User registered.');
    }

    public function register(){
        return view('auth.register', [
            'title' => 'Register',
        ]);
    }
}
