@extends("layout.app")

@section("content")
    <div class="container">

        @if (session('info'))
            <div class="bg-blue-100 border-t-4 border-blue-500 rounded-b text-blue-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 0C4.476 0 0 4.477 0 10s4.476 10 10 10 10-4.477 10-10S15.524 0 10 0zm1 15H9v-2h2v2zm0-4H9V6h2v5z"/></svg></div>
                    <div>
                        <p class="font-bold">Info</p>
                        <p class="text-sm">{{ session('info') }}</p>
                    </div>
                </div>
            </div>
        @endif


        {{ $blog->links() }}

        @foreach ($blog as $blog)
            <div class="bg-white shadow-sm rounded-lg mb-4 p-4">
                <img src="{{ url(strval($blog->image)) }}" >
                <h5 class="text-lg font-medium mb-2">{{ $blog->title }}</h5>
                <p class="text-gray-500 text-sm mb-2">{{ $blog->created_at->diffForHumans() }}</p>
                <a href="{{ url("dashboard/blog/detail/$blog->id") }}" class="inline-block mt-2 px-4 py-2 bg-white-500 text-blue rounded hover:bg-blue-600 transition duration-200">View Detail &raquo;</a>
            </div>
        @endforeach
    </div>
@endsection
