@extends('layouts.app')

@section('title', 'Edit')

@section('header')

    <x-header>
        
    </x-header>

@endsection

@section('main')

    <h1 class="text-3xl text-center my-10">Edit: <span>{{ $blog->title }}</span></h1>

    <x-form action="/blog/{{ $blog->id }}" method="POST">
        @method('PATCH')
        @csrf

        <label for="title">Title</label>
        <x-edit-input type="text" name="title" value="{{ $blog->title }}"/>
    
        <label for="text">Text</label>
        <x-edit-input type="textarea" name="text" value="{{ $blog->text }}"/>
        
        <x-button>Update</x-button>
    </x-form>

@endsection