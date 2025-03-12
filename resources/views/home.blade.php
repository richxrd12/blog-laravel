@extends('layouts.app')

@section('title', 'Home')

@section('header')

    <x-header>

    </x-header>

@endsection

@section('main')

    <div class="flex items-center justify-center mt-4">
        <a href="/add" class="bg-blue-500 hover:bg-blue-700 text-white font-light py-2 px-4 rounded-full">
            + Add new Blog
        </a>
    </div>
    @php
        use App\Models\Blog;
        
        $blogs = Blog::all();
        $userBlogs = auth()->user()->blogs;  

    @endphp

    <div id="posts" class="flex flex-wrap gap-x-6 gap-y-4 justify-center w-5/6 m-auto">
        @foreach ($blogs as $blog)
            <x-card :title="$blog->title" :text="$blog->text" :id="$blog->id">
                @if ($userBlogs->contains($blog))
                    <a href="/blog/{{ $blog->id }}/edit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded ml-2 mb-3">Edit post</a>
                @endif
            </x-card>
        @endforeach
    </div>
@endsection