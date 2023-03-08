@extends('layout.app')

@section('content')
<x-breadcrumb content="Events" />

<x-form-wrapper>
  <form action="{{route('events.store')}}" class="py-4 px-5 " method="POST" enctype="multipart/form-data">
    @csrf
    <div class="py-4 px-5 shadow bg-white sm:rounded-md  ">
      <h1 class="mb-2 text-blue-400 text-3xl text-center mx-auto">
        Event Create Form
      </h1>
      <hr />
      <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
        <div>
          <x-label for="name" value="Event Title"/>
          <div class="mt-1">
            <input name="name" class="py-2 px-4 border outline-none shadow-sm focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" value="{{old('name')}}" placeholder="Event Title..." />
          </div>
          <x-error name='name'/>
        </div>

        <div>
          <x-label for="description" value="Event Description"/>
          <div class="mt-1">
            <textarea id="description" name="description" rows="3" class="py-2 px-4 outline-none border shadow-sm focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Event Description....">{{old('description')}}</textarea>
          </div>
          <x-error name='description'/>
        </div>

        <div>
          <x-label for="description_detail" value="Event Description Detail"/>
          <div class="mt-1">
            <textarea id="description_detail" name="description_detail" rows="3" class="py-2 px-4 outline-none border shadow-sm focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Event Description....">{{old('description_detail')}}</textarea>
          </div>
          <x-error name='description_detail'/>
        </div>

        <div>
          <x-label for="status" value="Event Status"/>
          <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option @if(old('status') && old('status')=='upcoming' ) selected @endif value="upcoming">Upcoming</option>
            <option @if(old('status') && old('status')=='ongoing' ) selected @endif value="ongoing">Ongoing</option>
            <option @if(old('status') && old('status')=='finished' ) selected @endif value="finished">Finished</option>
          </select>
          <x-error name='status'/>
        </div>

        <div class="">
          <x-label for="thumbnail" value="Event Thumbnail"/>
          <input type="file" name="thumbnail">
          <x-error name='thumbnail'/>
        </div>

        <div class="flex justify-between items-center">
          <div class="w-[45%]">
            <x-label for="instructor" value="Instructor"/>
            <div class="mt-1">
              <input name="instructor" value="{{old('instructor')}}" class="py-2 px-4 border outline-none shadow-sm focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Event Instructor..." />
            </div>
            <x-error name='instructor'/>
          </div>

          <div class="w-[45%]">
          <x-label for="categories" value="Categories"/>
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
            <x-error name='categories'/>

          </div>
        </div>

        <div class="flex justify-between items-center">
          <div class="w-[45%]">
            <x-label for="start_date" value="Event Start Date"/>
            <div class="relative max-w-sm">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <input id="start_date" name="start_date" datepicker type="date" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-400 focus:border-blue-400 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" />
            </div>
            <x-error name='start_date'/>
          </div>

          <div class="w-[45%]">
           <x-label for="end_date" value="Event End Date"/>
            <div class="relative max-w-sm">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <input id="end_date" name="end_date" datepicker type="date" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-400 focus:border-blue-400 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" />
            </div>
            <x-error name='end_date'/>
          </div>
        </div>

        <div class="flex justify-between items-center">
          <div class="w-[45%]">
          <x-label for="start_time" value="Event Start Time"/>

            <div class="relative max-w-sm">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <input id="start_time" name="start_time" datepicker type="time" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-400 focus:border-blue-400 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select time" />
            </div>
            <x-error name='start_time'/>
          </div>

          <div class="w-[45%]">
            <x-label for="end_time" value="Event End Time"/>
            <div class="relative max-w-sm">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                </svg>
              </div>

              <input id="end_time" name="end_time" datepicker type="time" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-400 focus:border-blue-400 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select time" />
            </div>
            <x-error name='end_time'/>
          </div>
        </div>

        <div class="px-4 py-3 text-right sm:px-6">
          <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Create
          </button>
        </div>
      </div>
  </form>
</x-form-wrapper>

@endsection