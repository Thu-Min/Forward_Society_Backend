<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function GuzzleHttp\Promise\all;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'body', 'category_id', 'author_name', 'designer_name', 'image'
    ];
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
