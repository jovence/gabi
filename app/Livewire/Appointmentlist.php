<?php

namespace App\Livewire;

use App\Models\Appointment;
use Livewire\Component;

class Appointmentlist extends Component
{
    public function render()
    {
        $appointments = Appointment::all();

        return view('livewire.appointmentlist',data: compact("appointments"))->layout('dashboard');
    }
}
