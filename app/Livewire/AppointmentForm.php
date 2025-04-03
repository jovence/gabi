<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentConfirmation;
use Livewire\Component;
    
class AppointmentForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $date;
    public $department;
    public $message;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'date' => 'required|date',
        'department' => 'required',
        'message' => 'nullable',
    ];

    public function submitForm()
    {
        $this->validate();

        $appointment = Appointment::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'date' => $this->date,
            'department' => $this->department,
            'message' => $this->message,
        ]);

        // Mail::to($this->email)->send(new AppointmentConfirmation($appointment));

        session()->flash('success', 'Your appointment request has been sent successfully. Thank you!');

        $this->reset(['name', 'email', 'phone', 'date', 'department', 'message']);
    }

    public function render()
    {
        return view('livewire.appointment-form');
    }
}