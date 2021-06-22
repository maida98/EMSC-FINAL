<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function participationForms(){
        return $this->hasMany(ParticipationForm::class);
    }

    public function demandList(){
        return $this->hasOne(DemandList::class);
    }

    public function society(){
        return $this->belongsTo(Society::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

}
