<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    //
    public function event() {
        return $this->belongsTo(Event::class);
    }
    protected $fillable = ['event_id', 'name', 'email'];

}
