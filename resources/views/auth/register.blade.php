@extends('layouts.app')

@section('title', 'Login')

@section('header')

    <x-header>

    </x-header>

@endsection


@section('main')

    <h1 class="text-4xl text-center my-6">Register</h1>

    <x-form action="/register" method="POST">
        @csrf

        <label for="name">Name</label>
        <x-input type="text" name="name"/>

        <x-error error="name"/>

        <label for="email">Email</label>
        <x-input type="email" name="email"/>

        <x-error error="email"/>

        <label for="password">Password</label>
        <x-input type="password" name="password"/>

        <x-error error="password"/>

        <label for="password_confirmation">Repeat password</label>
        <x-input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat password..."/>

        <x-error error="password-confirmation"/>

        <x-button>Register</x-button>
    </x-form>

    <p class="text-blue-400 text-center mt-2 hover:text-blue-600">
        <a href="/login">Already have an account? Login</a>
    </p>

@endsection