<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Appointment;
use App\Service;
use App\Mail\AppointMail;
use App\AppointmentService;

class AppointmentController extends Controller
{
    // show frontend book appointment form
    public function index()
    {
        $services = Service::all();

        return view('book-appointment', compact('services'));
    }

    public function store(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'start_time' => 'required:date_format:yyyy-mm-dd H:i:s|before_or_equal:finish_time',
            'finish_time' => 'required:date_format:yyyy-mm-dd H:i:s|after_or_equal:start_time',
            'service_id' => 'required',
            'budget' => 'required|numeric',
        ]);
        
        
        $data = $request->except('_token','service_id');
        
        $services = $request->get('service_id');

        $appointment = Appointment::create($data);

        if(count($services) > 0){
            AppointmentService::where('appointment_id',$appointment->id)->delete();

            foreach($services as $serviceId){
                AppointmentService::create([
                    'appointment_id' => $appointment->id,
                    'service_id' => $serviceId
                ]);
            }
        }
        Mail::send(new AppointMail($appointment));
        
        return back()->withSuccess('Appointment has been sceduled successfully. We will contact you soon.');
    }
}
