<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = ['id'];

    public function appointment(){
        return $this->hasOne(Appointment::class, 'service_id');
    }
}
