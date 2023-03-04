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
            Create Timeline
        </div>
    </div>
<!-- Breadcrumb end -->
<div class="w-[80%] h-max  mx-auto ">
    <div class="mt-5 md:mt-0 ">
      <form action="{{route('timeline.update',$timelineDBData['id'])}}" class="px-5 py-4 " method="POST" enctype="multipart/form-data">
        @csrf
        <div class="px-5 py-4 bg-white shadow sm:rounded-md ">
          <h1 class="mx-auto mb-2 text-3xl text-center text-blue-400">
            Timeline Edit Form
          </h1>
          <hr />
          <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
            <div>
              <label
                for="about"
                class="block font-medium text-gray-700 text-md"
              >
                Timeline Title
              </label>
              <div class="mt-1">
                <input
                  name="title"
                   value="{{old("title",$timelineDBData['title'])}}"
                  class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm outline-none focus:ring-blue-400 focus:border-blue-400 sm:text-sm"
                  placeholder="Timeline Title..."
                />
                @error("title")
                    <small class="text-red-600">{{$message}}</small>

                @enderror
              </div>
            </div>

            <div>
              <label
                for="about"
                class="block font-medium text-gray-700 text-md"
              >
                Timeline Description
              </label>
              <div class="mt-1">
                <textarea

                  name="description"
                  rows="3"
                  class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm outline-none focus:ring-blue-400 focus:border-blue-400 sm:text-sm"
                  placeholder="Timeline Description...."
                >{{old("description",$timelineDBData['description'])}}</textarea>
                  @error("description")
                    <small class="text-red-600">{{$message}}</small>
                @enderror
              </div>
            </div>
             <div>
                <img src="{{asset('storage/'.$timelineDBData['photo'])}}" />
              <label
                for="about"
                class="block mt-2 font-medium text-gray-700 text-md"
              >
                Timeline Image
              </label>
              <div class="mt-1">
                <input
                type="file"
                  name="image"
                  class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm outline-none focus:ring-blue-400 focus:border-blue-400 sm:text-sm"
                  placeholder="Timeline Image..."
                />
                 @error("image")
                    <small class="text-red-600">{{$message}}</small>
                @enderror
              </div>
            </div>


          </div>


          <div class="px-4 py-3 text-right sm:px-6">
            <button
              type="submit"
              class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >
              Update
            </button>
          </div>
        </div>
      </form>
    </div>
</div>


@endsection
