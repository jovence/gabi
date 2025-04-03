<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class DoctorCrud extends Component
{
    use WithPagination;

    public $searchTerm = '';

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $doctors = Doctor::where('specialization', 'like', $searchTerm)
            ->orWhere('email', 'like', $searchTerm)
            ->orWhere('phone', 'like', $searchTerm)
            ->paginate(5);

        return view('livewire.doctor-crud', ['doctors' => $doctors])->layout('dashboard');
    }

    public function delete($id)
    {
        if ($id) {
            $doctor = Doctor::find($id);
            if ($doctor->photo) {
                Storage::disk('public')->delete($doctor->photo);
            }
            Doctor::where('id', $id)->delete();
            session()->flash('message', 'Doctor Deleted Successfully.');
        }
    }
}