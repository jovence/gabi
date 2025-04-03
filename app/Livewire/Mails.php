<?php

namespace App\Livewire;

use App\Mail\PatientMail;
use App\Models\Appointment;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Mails extends Component
{
    public $appointmentId;
    public $emailContent;
    public $appointments;

    protected $rules = [
        'emailContent' => 'required|min:10',
    ];

    public function mount($appointmentId)
    {
        $this->appointmentId = $appointmentId;
        $this->appointments = Appointment::findOrFail($appointmentId);
    }

    public function sendMail()
    {
        $this->validate();
        $details = [
            'name' => $this->appointments->name,
            'email' => $this->appointments->email,
            'phone' => $this->appointments->phone,
            'department' => $this->appointments->department,
            'date' => $this->appointments->date,
            'message' => $this->emailContent,
        ];
        Mail::to($this->appointments->email)->send(new PatientMail($details));
        // Email sending logic here
        session()->flash('message', 'Email sent successfully!');
        // Optionally reset the email content after sending
        $this->emailContent = '';
        return redirect()->route('doctor.appointment');
    }

    public function render()
    {
        return view('livewire.mails')->layout('dashboard');
    }
}
