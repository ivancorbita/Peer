<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainors extends Model
{
    public function trainees() {
        return $this->belongsTo('\Trainees');
    }

    public function courses() {
        return $this->belongsTo('App\Courses');
    }
}
