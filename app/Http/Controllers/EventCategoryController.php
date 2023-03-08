<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventCategoryRequest;
use App\Http\Requests\UpdateEventCategoryRequest;
use App\Models\EventCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;


class EventCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard/event_categories/index',[
            'eventCategories' => EventCategory::latest()
                    ->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard/event_categories/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'name' => ['required',
                    'max:255', 
                    'string', 
                    Rule::unique('event_categories')
                ],
        ]);
        $formData['slug'] = Str::slug($formData['name'], '-');
        EventCategory::create($formData);
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
        return view('dashboard/event_categories/edit',[
            'eventCategory' => $eventCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EventCategory $eventCategory)
    {
        $formData = $request->validate([
            'name' => ['required', 'max:255', 'string', Rule::unique('event_categories')->ignore($eventCategory->id)],
        ]);
        
        $formData['slug'] = Str::slug($formData['name'], '-');
        $eventCategory->update($formData);
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
