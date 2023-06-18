<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact-us');
    }

    public function store(Request $request)
    {
        // validasi form
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required',
        ]);

        // kirim email atau lakukan proses lainnya

        // kembalikan response jika proses berhasil
        return redirect()->back()->with('success', 'Thank you for contacting us. We will get back to you soon!');
    }
}
