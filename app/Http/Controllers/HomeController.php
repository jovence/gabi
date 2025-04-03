<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\doctor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $doctors = doctor::all();
        return view("userInterface.home",compact("doctors"));
    }
    
    
}
