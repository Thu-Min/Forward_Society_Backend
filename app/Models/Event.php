<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'description_detail',
        'instructor',
        'thumbnail',
        'status',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
    ];

    public function eventCategory()
    {
        return $this->belongsToMany(EventCategory::class);
    }

    public function addEventCategories($eventCategories)
    {
        return $this->eventCategory()->sync($eventCategories);
    }

}
