@extends('layout.app')

@section('content')
<!-- Breadcrumb start -->
<div class="flex items-center p-2 m-2">
    <!--
        Prev nav: {text-slate-800, hover:text-primary} ,
        Active nav: {text-gray-500 bg-slate-300 p-2 px-3 rounded-full}
    -->
        <div
            class="flex items-center font-semibold capitalize text-slate-800 hover:text-primary">
            <!-- Home icon -->
            <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-6 h-6 mr-2">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
            </svg>
            dashboard
        </div>
        <!-- ChevronForward icon -->
        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-6 h-6 mx-3">
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
        </svg>
        <div
            class="p-2 px-3 font-semibold text-gray-500 capitalize rounded-full bg-slate-300">
            Messages List
        </div>
        {{--
        <a href="{{route('timeline.createPage')}}">
            <button class="px-4 py-2 ml-4 font-semibold text-white bg-blue-600 rounded-lg shadow-md btn-contained hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Create Timeline</button>
        </a> --}}
    </div>
<!-- Breadcrumb end -->
 @if(count($messages)>0)
    <div class="relative m-2 overflow-x-auto rounded-lg shadow-md">


             <table class="w-full text-sm text-left dark:text-gray-400">
            <thead class="text-gray-700 uppercase text-xxs bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                       ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                       Phone
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $t)
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                       {{$t->id}}
                    </th>

                    <td class="px-6 py-4">
                        {{ Str::limit($t->name, 30) }}
                    </td>
                      <td class="px-6 py-4">
                        {{ Str::limit($t->email, 30) }}
                    </td>
                    <td class="px-6 py-4">
                        {{ Str::limit($t->phone, 30) }}
                    </td>
                     <td class="px-6 py-4">
                        {{ Str::limit($t->title, 30) }}
                    </td>

                    <td class="px-6 py-4">

                         {{ Str::limit($t->description, 45) }}
                    </td>
                    <td class="px-6 py-4">
                         <a href="{{route('messages.detail',$t->id)}}" class="ml-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                          <a href="{{route('messages.delete',$t->id)}}" class="ml-3 font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>

                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>
        @else
           <h3 class="mx-auto mt-10 text-2xl font-semibold text-center text-blue-600"> There is no Messages Data.</h3>
        @endif

    </div>

@endsection
