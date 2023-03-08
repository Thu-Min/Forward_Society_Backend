@extends('layout.app')

@section('content')
<x-breadcrumb content="Event Category"/>
<x-form-wrapper>
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
          <x-label for="name" value="Event Category Title" />
          <div class="mt-1">
            <input name="name" class="py-2 px-4 border outline-none shadow-sm focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" value="{{old('name',$eventCategory->name)}}" placeholder="Event Category Title..." />
          </div>
          <x-error name='name' />
        </div>

        <div class="px-4 py-3 text-right sm:px-6">
          <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Update
          </button>
        </div>
      </div>
  </form>
</x-form-wrapper>

@endsection