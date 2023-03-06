@extends('layout.app')

@section('content')
    <div class="container">
        <div class="bg-white shadow-sm rounded-lg p-4">

            <h5 class="text-lg font-medium mb-2">{{ $blog->title }}</h5>

            <p class="text-gray-500 text-sm mb-2">{{ $blog->created_at->diffForHumans() }}
                <br>
                Category: <b>{{ $blog->category->name }}</b>
                <br> 
                Content Writer: <b>{{ $blog->author_name }}</b>
                <br>
                 Garphic Desiginer: <b>{{ $blog->designer_name }}</b></p>

            <img src="{{ url(strval($blog->image)) }}" >

            <p class="text-gray-700">{{ $blog->body }}</p>

            <a href="{{ url("dashboard/blog/edit/$blog->id") }}" class="inline-block mt-4 px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition duration-200">Edit</a>

            <a href="{{ url("dashboard/blog/delete/$blog->id") }}" class="inline-block mt-4 px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition duration-200">Delete</a>
        </div>
    </div>
@endsection
