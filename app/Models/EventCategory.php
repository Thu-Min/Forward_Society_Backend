<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
    ];

    public function event()
    {
        return $this->belongsToMany(Event::class);
    }

    public function destroyEvents($events)
    {
        return $this->event()->sync($events);   
    }
}
