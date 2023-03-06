@extends('layout.app')

@section('content')
    
    <div class="container max-w-md mx-auto">
        @if ($errors->any())
        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post">    
            @csrf
            @method('POST')
            
                 
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="title">
                        Title
                    </label>
                    <input type="text" name="title" id="title" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('title', $blog->title) }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="body">
                            Body
                    </label>
                        <textarea name="body" id="body" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('body', $blog->body) }}</textarea>
                </div>                
      
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="category">
                    Category
                </label>
                <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="category_id" id="category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $blog->category_id === $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Update</button>
        </form>
    </div>
@endsection
