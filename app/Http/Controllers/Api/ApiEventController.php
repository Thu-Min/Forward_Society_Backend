<?php

namespace App\Http\Controllers\Api;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\EventResource;
use App\Http\Resources\EventCollection;

class ApiEventController extends Controller
{
    public function index()
    {
        return new EventCollection(Event::paginate(10));
    }

    public function show(Event $event)
    {
        return new EventResource($event);
    }
}
