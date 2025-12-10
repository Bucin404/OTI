<?php

namespace App\Http\Controllers;

use App\Mail\ContactReceived;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Store a newly created contact in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Add IP and User Agent
        $validated['ip_address'] = $request->ip();
        $validated['user_agent'] = $request->userAgent();

        // Store contact
        $contact = Contact::create($validated);

        // Try to send email notification
        try {
            $adminEmail = config('mail.from.address');
            Mail::to($adminEmail)->send(new ContactReceived($contact));
        } catch (\Exception $e) {
            // Log the error but don't fail the request
            \Log::warning('Failed to send contact email: ' . $e->getMessage());
        }

        return back()->with('success', 'Terima kasih! Pesan Anda telah terkirim. Kami akan segera menghubungi Anda.');
    }
}
