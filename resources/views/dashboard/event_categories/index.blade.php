@extends('layout.app')

@section('content')
<!-- Breadcrumb start -->
<div class="flex items-center p-2 m-2">
    <!--
        Prev nav: {text-slate-800, hover:text-primary} ,
        Active nav: {text-gray-500 bg-slate-300 p-2 px-3 rounded-full}
    -->
    <div class="capitalize font-semibold text-slate-800 flex items-center hover:text-primary">
        <!-- Home icon -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
        </svg>
        dashboard
    </div>
    <!-- ChevronForward icon -->
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-3">
        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
    </svg>
    <div class="capitalize font-semibold text-gray-500 bg-slate-300 p-2 px-3 rounded-full">
        Event Categories
    </div>
</div>
<!-- Breadcrumb end -->
<div class="relative overflow-x-auto shadow-md m-2 rounded-lg">
    <table class="w-full text-sm text-left dark:text-gray-400">
        <thead class="text-xxs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>             
                <th scope="col" class="px-6 py-3">
                    Actions
                    </form>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($eventCategories as $eventCategory)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$eventCategory->name}}
                </th>
                <td class="px-6 py-4">
                    <a href="{{route('eventCategories.edit',['eventCategory'=>$eventCategory->slug])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <form method="POST" action="{{ route('eventCategories.delete',['eventCategory'=>$eventCategory->slug]) }}">
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
{{ $eventCategories->links() }}

@endsection