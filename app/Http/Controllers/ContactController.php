<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validatie
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required',
            'subject' => 'required',
        ]);

        // 2. Verstuur de mail naar jezelf
        Mail::to('info@kona.com')->send(new ContactFormMail($data));

        // 3. Terugsturen met succesmelding
        return back()->with('success', 'Thank you! We\'ll get back to you as soon as possible.');
    }
}