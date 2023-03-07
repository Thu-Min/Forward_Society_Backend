<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use App\Models\EventCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('components/dashboard/events',[
            'events' => Event::latest()
                    ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components/dashboard/eventCreate',[
            'categories' => EventCategory::latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $formData = $request->validate([
            'name' => ['required','max:255'],
            'slug' => [
                'required',
                'max:255', 
                Rule::unique('events'),
                function($attribute, $value, $fail) {
                    if(str_contains($value,' ')) {
                        $fail('The '.$attribute.' must not contain Space.');
                    }
                }
            ],
            'description' => ['required'],
            'description_detail' => ['required'],
            'instructor' => ['required', 'string'],
            'thumbnail' => ['required', 'image'],
            'categories' => ['required','array:0,1,2', 'exclude'],
            'categories.0' => ['required', 'integer'],
            'categories.1' => ['sometimes', 'integer'],
            'categories.2' => ['sometimes', 'integer'],
            'status' => ['required', 'string', Rule::in(['upcoming', 'ongoing', 'finished'])],
            'start_date' => ['required', 'date'],
            'end_date' =>['required', 'date'],
            'start_time' => ['required'],
            'end_time' => ['required']
        ],[
            'categories.array' => 'You can only add 3 categories most!',
        ]);

        $formData['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
        $event = Event::create($formData);
        $event->addEventCategories($request->categories);
        return redirect(route('events'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('components/dashboard/eventEdit',[
            'event' => $event,
            'eventCategories' => $event->eventCategory,
            'categories' => EventCategory::latest()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $formData = $request->validate([
            'name' => ['required','max:255'],
            'slug' => [
                'required',
                'max:255', 
                Rule::unique('events')->ignore($event->id),
                function($attribute, $value, $fail) {
                    if(str_contains($value,' ')) {
                        $fail('The '.$attribute.' must not contain Space.');
                    }
                }
            ],
            'description' => ['required'],
            'description_detail' => ['required'],
            'instructor' => ['required', 'string'],
            'thumbnail' => ['nullable', 'image', 'exclude'],
            'categories' => ['required','array:0,1,2','exclude'],
            'categories.0' => ['required', 'integer'],
            'categories.1' => ['sometimes', 'integer'],
            'categories.2' => ['sometimes', 'integer'],
            'status' => ['required', 'string', Rule::in(['upcoming', 'ongoing', 'finished'])],
            'start_date' => ['required', 'date'],
            'end_date' =>['required', 'date'],
            'start_time' => ['required'],
            'end_time' => ['required']
        ],[
            'categories.array' => 'You can only add 3 categories most!',
        ]);

        if($request->hasFile('thumbnail')) {
            $formData['thumbnail'] = $request->thumbnail->store('thumbnails');
        } else {
            unset($formData['thumbnail']);
        }
        $event->update($formData);
        $event->addEventCategories($request->categories);
        return redirect(route('events'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {   
        $event->addEventCategories([]);
        $event->delete();
        return redirect(route('events'));
    }
}
// use App\Models\Event;
// $e=Event::where('id',5)->first();
// ["name" => "hello","slug" => "quis-quaerat-cum-tempora-nulla","description" => "Repudiandae voluptatem sed quis cupiditate nesciunt.","description_detail" => "Ea natus quia et fuga rem ipsum distinctio numquam. Soluta ut nemo ut aut ipsa quo repellat dolorum. Qui quia adipisci ducimus dicta corrupti nesciunt beatae. M ▶","instructor" => "dana20","status" => "upcoming","start_date" => "2023-03-05","end_date" => "2023-03-05","start_time" => "10:10","end_time" => "11:10","thumbnail" => "events/thumbnails/GywL4KxcJOaHpJSIeNfhiVn64qKEql55ksIDZ7ed.png"]