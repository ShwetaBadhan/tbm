<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Strict Validation (Blocks special characters, HTML injection, and spam)
        $validated = $request->validate([
            'name' => [
                'required', 'string', 'max:100', 
                'regex:/^[a-zA-Z\s]+$/' // Only letters and spaces
            ],
            'email' => 'required|email|max:255',
            'phone' => 'required|string|min:10|max:20',
            'subject' => [
                'required', 'string', 'max:255', 
                'regex:/^[a-zA-Z0-9\s\-\.]+$/' // Alphanumeric, spaces, hyphens, dots only
            ],
            'message' => [
                'required', 'string', 'min:10', 'max:1000', 
                'regex:/^[a-zA-Z0-9\s\.,\!\?\-]+$/' // Basic punctuation only, blocks scripts/special chars
            ],
        ], [
            'name.regex' => 'Name must only contain letters and spaces.',
            'subject.regex' => 'Subject must not contain special characters.',
            'message.regex' => 'Message contains invalid or restricted characters.',
        ]);

        try {
            // Sanitize and save to database
            Contact::create([
                'name' => trim($validated['name']),
                'email' => trim(strtolower($validated['email'])),
                'phone' => trim($validated['phone']),
                'subject' => trim($validated['subject']),
                'message' => trim($validated['message']),
                'ip_address' => $request->ip(), // Security: Track IP
                'is_read' => false,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your message has been sent successfully. We will contact you shortly.'
            ]);

        } catch (\Exception $e) {
            Log::error('Contact Form Submission Failed', [
                'error' => $e->getMessage(), 
                'ip' => $request->ip()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong on our end. Please try again later.'
            ], 500);
        }
    }
}