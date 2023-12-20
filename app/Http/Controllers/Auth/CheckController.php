<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckController extends Controller
{
    public function index()
    {
        // Logika atau data lainnya untuk halaman check
        return view('auth.check', ['title' => 'Check']);
    }
}
