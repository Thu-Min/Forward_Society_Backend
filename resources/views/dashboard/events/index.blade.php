@extends('layout.app')

@section('content')
<x-breadcrumb content="Events" />
<div class="relative overflow-x-auto shadow-md m-2 rounded-lg">
    <table class="w-full text-sm text-left dark:text-gray-400">
        <thead class="text-xxs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Instructor
                </th>
                <th scope="col" class="px-6 py-3">
                    Event Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Start Date
                </th>
                <th scope="col" class="px-6 py-3">
                    End Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Start Time
                </th>
                <th scope="col" class="px-6 py-3">
                    End Time
                </th>
                <th scope="col" class="px-6 py-3">
                    Actions
                    </form>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$event->name}}
                </th>
                <td class="px-6 py-4">
                    {{$event->description}}
                </td>
                <td class="px-6 py-4">
                    {{$event->instructor}}
                </td>
                <td class="px-6 py-4">
                    {{$event->status}}
                </td>
                <td class="px-6 py-4">
                    {{$event->start_date}}
                </td>
                <td class="px-6 py-4">
                    {{$event->end_date}}
                </td>
                <td class="px-6 py-4">
                    {{$event->start_time}}
                </td>
                <td class="px-6 py-4">
                    {{$event->end_time}}
                </td>
                <td class="px-6 py-4">
                    <a href="{{route('events.edit',['event'=>$event->slug])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="{{route('events.show',['event'=>$event->slug])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                    <form method="POST" action="{{ route('events.delete',['event'=>$event->slug]) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $events->links() }}

@endsection