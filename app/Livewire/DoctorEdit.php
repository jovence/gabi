<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class DoctorEdit extends Component
{
    use WithFileUploads;

    public $specialization, $biography, $phone, $email, $address, $doctor_id, $photo;

    protected $rules = [
        'specialization' => 'required|string|max:255',
        'biography' => 'required|string',
        'phone' => 'required|string',
        'email' => 'required|email|unique:doctors,email,',
        'address' => 'required|string',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public function mount($doctor)
    {
        $doctorData = Doctor::findOrFail($doctor);
        $this->doctor_id = $doctor;
        $this->specialization = $doctorData->specialization;
        $this->biography = $doctorData->biography;
        $this->phone = $doctorData->phone;
        $this->email = $doctorData->email;
        $this->address = $doctorData->address;
    }

    public function render()
    {
        return view('livewire.doctor-edit')->layout('dashboard');
    }

    public function update()
    {
        $this->validate();

        $doctor = Doctor::find($this->doctor_id);

        $doctorData = [
            'specialization' => $this->specialization,
            'biography' => $this->biography,
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address,
        ];

        if ($this->photo) {
            if ($doctor->photo) {
                Storage::disk('public')->delete($doctor->photo);
            }
            $photoPath = $this->photo->store('doctor-photos', 'public');
            $doctorData['photo'] = $photoPath;
        }

        $doctor->update($doctorData);

        session()->flash('message', 'Doctor Updated Successfully.');
        return redirect()->route('doctors.index');
    }
}