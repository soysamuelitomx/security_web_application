<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Problematic;

class Event extends Model
{
    use HasFactory;

    public function Connection_Event_To_User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Connection_Event_To_ProblemCategory()
    {
        return $this->belongsTo(Problematic::class, 'problematic_id');
    }

}
