<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Problematic extends Model
{
    use HasFactory;

    public function Problematic_To_Event()
    {
        return $this->hasMany(Event::class);
    }

}
