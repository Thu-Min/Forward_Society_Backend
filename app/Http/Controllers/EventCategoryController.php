<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventCategoryRequest;
use App\Http\Requests\UpdateEventCategoryRequest;
use App\Models\EventCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EventCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('components/dashboard/eventCategories',[
            'eventCategories' => EventCategory::latest()
                    ->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components/dashboard/eventCategoryCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formDate = $request->validate([
            'name' => ['required', 'max:255', 'string'],
            'slug' => [
                'required',
                'max:255', 
                'string', 
                Rule::unique('event_categories'),
                function($attribute, $value, $fail) {
                    if(str_contains($value, ' ')) {
                        $fail('The '.$attribute.' must not contain Space!');
                    }
                }
                ],
        ]);

        EventCategory::create($formDate);
        return redirect(route('eventCategories'));
        }

    /**
     * Display the specified resource.
     */
    public function show(EventCategory $eventCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EventCategory $eventCategory)
    {
        return view('components/dashboard/eventCategoryEdit',[
            'eventCategory' => $eventCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EventCategory $eventCategory)
    {
        $formDate = $request->validate([
            'name' => ['required', 'max:255', 'string'],
            'slug' => [
                'required', 
                'max:255', 'string', 
                Rule::unique('event_categories')->ignore($eventCategory->id),
                function($attribute, $value, $fail) {
                    if(str_contains($value, ' ')) {
                        $fail('The '.$attribute.' must not contain Space!');
                    }
                }
            ],
        ]);

        $eventCategory->update($formDate);
        return redirect(route('eventCategories'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventCategory $eventCategory)
    {
        $eventCategory->destroyEvents([]);
        $eventCategory->delete();
        return redirect(route('eventCategories'));
    }
}
