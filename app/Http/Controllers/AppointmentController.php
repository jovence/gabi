<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function appointment(Request $request)
    {
        // Validation (optional, but highly recommended)
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'date' => 'required|date',
            'department' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        $appointment = Appointment::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'date' => $request->date,
            'department' => $request->department,
            'message' => $request->message,
        ]);

        // Mail::to($request->email)->send(new AppointmentConfirmation($appointment));

        return redirect()->back()->with('success', 'Your appointment request has been sent successfully. Thank you!');
    }
}
