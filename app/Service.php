<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = ['id'];

    public function appointments(){
        return $this->hasMany(Appointment::class, 'service_id');
    }
}
