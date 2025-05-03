<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function registrations() {
        return $this->hasMany(Registration::class);
    }
    protected $fillable = [
        'title', 'description', 'start_time', 'end_time', 'location'
    ];
    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];
    
    
    }
