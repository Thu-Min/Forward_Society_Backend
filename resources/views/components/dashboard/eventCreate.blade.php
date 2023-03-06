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
    event
  </div>
</div>
<!-- Breadcrumb end -->
<div class="w-[80%] h-max  mx-auto ">
  <div class="mt-5 md:mt-0 ">
    <form action="{{route('events.store')}}" class="py-4 px-5 " method="POST" enctype="multipart/form-data">
      @csrf
      <div class="py-4 px-5 shadow bg-white sm:rounded-md  ">
        <h1 class="mb-2 text-blue-400 text-3xl text-center mx-auto">
          Event Create Form
        </h1>
        <hr />
        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
          <div>
            <label for="about" class="block text-md font-medium text-gray-700">
              Event Title
            </label>
            <div class="mt-1">
              <input name="name" class="py-2 px-4 border outline-none shadow-sm focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" value="{{old('name')}}" placeholder="Event Title..." />
            </div>
            @error('name')
            <div class="text-red-600 text-xs">{{ $message }}</div>
            @enderror
          </div>

          <div>
            <label for="about" class="block text-md font-medium text-gray-700">
              Event Slug
            </label>
            <div class="mt-1">
              <input name="slug" class="py-2 px-4 border outline-none shadow-sm focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" value="{{old('slug')}}" placeholder="Event Title..." />
            </div>
            @error('slug')
            <div class="text-red-600 text-xs">{{ $message }}</div>
            @enderror
          </div>

          <div>
            <label for="about" class="block text-md font-medium text-gray-700">
              Event Description
            </label>
            <div class="mt-1">
              <textarea id="description" name="description" rows="3" class="py-2 px-4 outline-none border shadow-sm focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Event Description....">{{old('description')}}</textarea>
            </div>
            @error('description')
            <div class="text-red-600 text-xs">{{ $message }}</div>
            @enderror
          </div>

          <div>
            <label for="about" class="block text-md font-medium text-gray-700">
              Event Description Detail
            </label>
            <div class="mt-1">
              <textarea id="description_detail" name="description_detail" rows="3" class="py-2 px-4 outline-none border shadow-sm focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Event Description....">{{old('description_detail')}}</textarea>
            </div>
            @error('description_detail')
            <div class="text-red-600 text-xs">{{ $message }}</div>
            @enderror
          </div>

          <div>
            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Event Status</label>
            <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option @if(old('status') && old('status')=='upcoming' ) selected @endif value="upcoming">Upcoming</option>
              <option @if(old('status') && old('status')=='ongoing' ) selected @endif value="ongoing">Ongoing</option>
              <option @if(old('status') && old('status')=='finished' ) selected @endif value="finished">Finished</option>
            </select>
            @error('status')
            <div class="text-red-600 text-xs">{{ $message }}</div>
            @enderror
          </div>

          <div class="">
            <label for="about" class="block text-md font-medium text-gray-700">
              Event Thumbnail
            </label>
            <input type="file" name="thumbnail">
            @error('thumbnail')
            <div class="text-red-600 text-xs">{{ $message }}</div>
            @enderror
          </div>

          <div class="flex justify-between items-center">
            <div class="w-[45%]">
              <label for="instructor" class="block text-md font-medium text-gray-700">
                Event Instructor
              </label>
              <div class="mt-1">
                <input name="instructor" value="{{old('instructor')}}" class="py-2 px-4 border outline-none shadow-sm focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Event Instructor..." />
              </div>
              @error('instructor')
              <div class="text-red-600 text-xs">{{ $message }}</div>
              @enderror
            </div>

            <div class="w-[45%]">
              <label for="categories" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Event Category</label>
              <select id="categories" name="categories[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" multiple>
                @foreach($categories as $category)
                <option value="{{$category->id}}" @if(old('categories')) @foreach(old('categories') as $index=> $value)
                  @if($value == $category->slug)
                  selected
                  @endif
                  @endforeach
                  @endif
                  >{{$category->name}}</option>
                @endforeach
              </select>
              @error('categories')
              <div class="text-red-600 text-xs">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="flex justify-between items-center">
            <div class="w-[45%]">
              <label for="start_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Date</label>
              <div class="relative max-w-sm">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <input id="start_date" name="start_date" datepicker type="date" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-400 focus:border-blue-400 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" />
              </div>
              @error('start_date')
              <div class="text-red-600 text-xs">{{ $message }}</div>
              @enderror
            </div>

            <div class="w-[45%]">
              <label for="end_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End Date</label>
              <div class="relative max-w-sm">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <input id="end_date" name="end_date" datepicker type="date" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-400 focus:border-blue-400 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" />
              </div>
              @error('end_date')
              <div class="text-red-600 text-xs">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="flex justify-between items-center">
            <div class="w-[45%]">
              <label for="start_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Time</label>

              <div class="relative max-w-sm">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <input id="start_time" name="start_time" datepicker type="time" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-400 focus:border-blue-400 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select time" />
              </div>
              @error('start_time')
              <div class="text-red-600 text-xs">{{ $message }}</div>
              @enderror
            </div>

            <div class="w-[45%]">
              <label for="end_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End Time</label>
              <div class="relative max-w-sm">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                  </svg>
                </div>

                <input id="end_time" name="end_time" datepicker type="time" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-400 focus:border-blue-400 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select time" />
              </div>
              @error('end_time')
              <div class="text-red-600 text-xs">{{ $message }}</div>
              @enderror
            </div>

          </div>



          <div class="px-4 py-3 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Create
            </button>
          </div>
        </div>
    </form>
  </div>
</div>

@endsection