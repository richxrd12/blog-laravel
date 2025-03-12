@extends('layouts.app')

@section('title', $blog->title)

@section('header')
    <nav>
        <a href="/home">Home</a>
    </nav>
@endsection

@section('main')

    <h1>{{ $blog->title }}</h1>

    <p>{{ $blog->text }}</p>

    <p>Creado por {{ $blog->user->name }}</p>
    
    <form action="/blog/{{ $blog->id }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">Delete</button>
    </form>

    <a href="/blog/{{ $blog->id }}/edit">Edit</a>
@endsection