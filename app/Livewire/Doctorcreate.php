<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;
use Livewire\WithFileUploads;

class DoctorCreate extends Component
{
    use WithFileUploads;

    public $specialization, $bio, $phone, $email, $address, $photo,$name;

    protected $rules = [
        'name' => 'required|string|max:255',
        'specialization' => 'required|string|max:255',
        'bio' => 'required|string',
        'phone' => 'required|string',
        'email' => 'required|email|unique:doctors,email',
        'address' => 'required|string',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public function render()
    {
        return view('livewire.doctorcreate')->layout('dashboard');
    }

    public function store()
    {

        $this->validate();

        $doctorData = [
            'name' =>$this->name,
            'specialization' => $this->specialization,
            'bio' => $this->bio,
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address,
            'profile_picture' =>$this->photo
        ];

        if ($this->photo) {
            $photoPath = $this->photo->store('photos', 'public');
            $doctorData['profile_picture'] = $photoPath;
        }

        Doctor::create($doctorData);

        session()->flash('message', 'Doctor Created Successfully.');

        $this->resetInputFields();
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->specialization = '';
        $this->bio = '';
        $this->phone = '';
        $this->email = '';
        $this->address = '';
        $this->photo = null;
    }
}