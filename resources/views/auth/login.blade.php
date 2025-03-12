@extends('layouts.app')

@section('title', 'Login')

@section('header')

    <x-header></x-header>

@endsection

@section('main')

    <h1 class="text-4xl text-center my-6">Login</h1>

    <x-form action="/login" method="POST">
        
        @csrf

        <label for="email">Email</label>
        <x-input type="email" name="email"/>

        <x-error error="email"/>
        
        <label for="password">Password</label>
        <x-input type="password" name="password"/>

        <x-button>Login</x-button>
    </x-form>

    <p class="text-blue-400 text-center mt-2 hover:text-blue-600">
        <a href="/register">Do not have an account? Register</a>
    </p>

@endsection