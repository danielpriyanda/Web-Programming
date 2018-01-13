<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function lectures()
    {
        return $this->hasMany(Lecture::class,'id');
    }

    public function dosens()
    {
        return $this->belongsTo(Dosen::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function forums()
    {
        return $this->hasMany(Forum::class,'id');
    }

}
