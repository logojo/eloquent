<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function users()
    {
        // ->withTimestamps() este metodo permite que se llenen los capos fechas en la tabla intermedia
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
