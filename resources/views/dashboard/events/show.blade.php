@extends('layout.app')

@section('content')
<x-breadcrumb content="Events">
    <x-slot name="detail">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
        <div class="capitalize font-semibold text-gray-500 bg-slate-300 p-2 px-3 rounded-full">
            Event Detail
        </div>
    </x-slot>
</x-breadcrumb>
<h2>Event Title - {{$event->name}}</h2>
<p>Event description{{$event->description}}</p>
<p>Event description detail - {{$event->description_detail}}</p>
<p>Event instructor - {{$event->instructor}}</p>
<p>Event status - {{$event->status}}</p>
<p>Event start date - {{$event->start_date}}</p>
<p>Event end date - {{$event->end_date}}</p>
<p>Event start time - {{$event->start_time}}</p>
<p>Event end time - {{$event->end_time}}</p>
@foreach($event->eventCategory as $singleEventCategory)
<p>Event Category - {{$singleEventCategory->name}}</p>
@endforeach
<img src="/storage/{{$event->thumbnail}}" alt="event thumbnail">

@endsection