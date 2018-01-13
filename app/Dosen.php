<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Dosen extends Authenticatable
{
    public function enrolls()
    {
        return $this->hasMany(Enroll::class);
    }

    public function forums()
    {
        return $this->hasMany(Forum::class,'id');
    }

}
