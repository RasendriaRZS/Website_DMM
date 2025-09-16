<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        // Simpan ke database atau kirim email
        // Mail::to('dhirghammurnimandiri@outlook.com')->send(new ContactMail($data));
        return back()->with('success', 'Pesan Anda telah terkirim!');
    }
}
