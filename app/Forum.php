<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    public function enrolls()
    {
        return $this->belongsTo(Enroll::class,'enroll_id');
    }

    public function lecturers()
    {
        return $this->belongsTo(Dosen::class,'lecturer_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
