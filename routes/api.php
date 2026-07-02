
<?php
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

Route::post('/test-consultation', function (Request $request) {
    // Log the received data
    Log::info('Test API received:', $request->all());
    
    // Simulate API response
    return response()->json([
        'success' => true,
        'message' => 'Consultation booked successfully',
        'data' => [
            'id' => rand(1000, 9999),
            'name' => $request->name,
            'email' => $request->email,
            'status' => 'pending'
        ]
    ], 200);
});