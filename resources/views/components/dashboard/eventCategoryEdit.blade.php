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
    Event Category
  </div>
</div>
<!-- Breadcrumb end -->
<div class="w-[80%] h-max  mx-auto ">
  <div class="mt-5 md:mt-0 ">
    <form action="{{route('eventCategories.update',['eventCategory'=>$eventCategory->slug])}}" class="py-4 px-5 " method="POST">
      @csrf
      @method('patch')
      <div class="py-4 px-5 shadow bg-white sm:rounded-md  ">
        <h1 class="mb-2 text-blue-400 text-3xl text-center mx-auto">
          Event Category Create Form
        </h1>
        <hr />
        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
          <div>
            <label for="about" class="block text-md font-medium text-gray-700">
              Event Category Title
            </label>
            <div class="mt-1">
              <input name="name" class="py-2 px-4 border outline-none shadow-sm focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" value="{{old('name',$eventCategory->name)}}" placeholder="Event Category Title..." />
            </div>
            @error('name')
            <div class="text-red-600 text-xs">{{ $message }}</div>
            @enderror
          </div>

          <div>
            <label for="about" class="block text-md font-medium text-gray-700">
              Event Category Slug
            </label>
            <div class="mt-1">
              <input name="slug" class="py-2 px-4 border outline-none shadow-sm focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" value="{{old('slug',$eventCategory->slug)}}" placeholder="Event Category Slug..." />
            </div>
            @error('slug')
            <div class="text-red-600 text-xs">{{ $message }}</div>
            @enderror
          </div>

          <div class="px-4 py-3 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Update
            </button>
          </div>
        </div>
    </form>
  </div>
</div>

@endsection