@props(['error'])

@error($error)
    <p class="text-red-500 text-center font-sans">{{ $message }}</p>
@enderror