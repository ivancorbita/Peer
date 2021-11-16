<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainees extends Model
{
    public function trainors() {
        return $this->hasMany('App\Trainors');
    }
}
