@extends('layout.app')
@section('content')

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
           Message Detail
        </div>
    </div>
<!-- Breadcrumb end -->
<div class="w-[80%] h-max  mx-auto ">
    <div class="mt-5 md:mt-0 px-5 py-4">

        <div class="px-5 py-4 bg-white shadow sm:rounded-md ">
           <div class="px-4  text-left sm:px-6">
            <a href='javascript:history.back()'>
                <button
              type="submit"
              class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >
              Back
            </button>
            </a>
          </div>
            <h1 class="mx-auto mb-2 text-3xl text-center text-blue-400">
          Message Detail
          </h1>
          <hr />
          <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
             <div>
              <label
                for="about"
                class="block font-medium text-gray-700 text-lg"
              >
                  Name
              </label>
              <div class="mt-1">

                   {{$message->name}}

              </div>
            </div>
            <hr>
             <div>
              <label
                for="about"
                class="block font-medium text-gray-700 text-lg"
              >
                  Email
              </label>
              <div class="mt-1">

                   {{$message->email}}

              </div>
            </div>
            <hr>
             <div>
              <label
                for="about"
                class="block font-medium text-gray-700 text-lg"
              >
                  Phone
              </label>
              <div class="mt-1">

                   {{$message->phone}}

              </div>
            </div>
            <hr>
            <div>
              <label
                for="about"
                class="block font-medium text-gray-700 text-lg"
              >
                Message  Title
              </label>
              <div class="mt-1">

                   {{$message->title}}

              </div>
            </div>
            <hr>
            <div>
              <label
                for="about"
                class="block font-medium text-gray-700 text-lg"
              >
             Message Description
              </label>
              <div class="mt-1">
                {{$message->description}}
              </div>
            </div>
            <hr>


          </div>



        </div>

    </div>
</div>


@endsection
