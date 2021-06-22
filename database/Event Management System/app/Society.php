<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    public function events(){
        return $this->hasMany(Event::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }
}
