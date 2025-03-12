@extends('layouts.app')

@section('title', 'Add blog')

@section('header')

    <x-header></x-header>

@endsection


@section('main')

    <h1 class="text-3xl text-center my-10">Add a new post</h1>

    <x-form action="/blog/add" method="POST">
        @csrf
        <label for="title">Title</label>
        <x-input type="text" name="title"/>
    
        <label for="text">Text</label>
        <x-input type="textarea" name="text"/>
        
        <x-button>Add</x-button>
    </x-form>

@endsection