<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppointmentService extends Model
{
    public $table = 'appointment_services';

    protected $guarded = ['id'];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class,'appointment_id');
    }

    public function info(){
        return $this->belongsTo(Service::class,'service_id');
    }
}
