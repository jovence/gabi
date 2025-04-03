<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use Livewire\Component;

class Mails extends Component
{
    public $appointment;
    public $emailContent;

    public function mount($appointmentId)
    {
        $this->appointment = Appointment::findOrFail($appointmentId);
    }

    public function sendMail()
    {
        $this->validate([
            'emailContent' => 'required|min:10'
        ]);

        // Email sending logic will go here
        
        session()->flash('message', 'Email sent successfully!');
        return redirect()->route('doctor.appointment')->layout('dashboard');
    }

    public function render()
    {
        return view('livewire.mails', compact("appointments"))->layout('dashboard');
    }
}