@extends('layout.app')

@section('content')
    <div class="container max-w-md mx-auto">
        
        @if ($errors->any())
            <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4" role="alert">
                <ol>
                    @foreach ($errors->all() as $error)
                        <li class="mb-1">{{ $error }}</li>
                    @endforeach
                </ol>
            </div>
        @endif
    
        <form method="post" class="max-w-md mx-auto">
            @csrf
            @method('POST')
            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2" for="title">
                    Title
                </label>
                <input type="text" name="title" id="title"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       placeholder="Enter article title">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2" for="body">
                    Body
                </label>
                <textarea name="body" id="body"
                          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                          placeholder="Enter article body"></textarea>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2" for="category">
                    Category
                </label>
                <select name="category_id"
                        class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    @foreach ($category as $category)
                        <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2" for="author_name">
                    Content Writer
                </label>
                <input type="text" name="author_name" id="author_name"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       placeholder="Enter Content Writer Name">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2" for="designer_name">
                    Graphic Designer
                </label>
                <input type="text" name="designer_name" id="designer_name"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       placeholder="Enter Graphic Designer Name">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2" for="image">
                    Image
                </label>
                <input type="text" name="image" id="image"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       placeholder="Image Url">
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Add Blog
                </button>
            </div>
        </form>
    </div>
@endsection
