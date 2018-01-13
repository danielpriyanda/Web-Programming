<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function enrolls()
    {
        return $this->belongsTo(Enroll::class);
    }
}
