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
            'date'    => 'required|date|after_or_equal:today', // Prevents past dates
            'message' => 'nullable|string|max:1000',
        ]);

        // 2. Save to Database (Make sure you have the Model and Migration set up)
        Consultation::create($validated);

        /* 
         * ALTERNATIVE: If you don't want to save to DB, you can send an email:
         * \Mail::to('admin@example.com')->send(new ConsultationRequestMail($validated));
         */

        // 3. Redirect back with a success message
        return redirect()->back()->with('success', 'Your consultation has been booked successfully! We will contact you soon.');
    }
}
