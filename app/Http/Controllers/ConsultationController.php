<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation; 

class ConsultationController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validate the incoming data
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'phone'   => 'required|string|max:20',
            'email'   => 'required|email|max:255',
            'date'    => 'required|date', 
            'service' => 'required|string|max:255', // Added service validation
            'message' => 'nullable|string|max:1000',
        ]);

        // 2. Save to Database
        Consultation::create($validated);

        $successMessage = 'Your consultation has been booked successfully! We will contact you soon.';

        // 3. Check if it's an AJAX request (from the modal form)
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage
            ]);
        }

        // 4. Fallback for the second normal form (redirect with session)
        return redirect()->back()->with('success', $successMessage);
    }
}