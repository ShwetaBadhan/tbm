<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactQueryController extends Controller
{
    // List of all contact queries
    public function index()
    {
        // Latest queries first, 15 per page
        $queries = Contact::orderBy('created_at', 'desc')->paginate(15);
        
        // Adjust view path according to your admin folder structure
        return view('backend.pages.contact-queries.index', compact('queries'));
    }

    // Delete a specific query
    public function destroy($id)
    {
        $query = Contact::findOrFail($id);
        $query->delete();

        return redirect()->route('backend.pages.contact-queries.index')->with('success', 'Query deleted successfully.');
    }
}