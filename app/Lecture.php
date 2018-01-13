<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    public function enrolls()
    {
        return $this->belongsTo(Enroll::class,'lecture_id');
    }

}
