@props([
    'type',
    'name',
])

<input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" placeholder="{{ ucfirst($name) }}..."
    class="px-4 py-1 border rounded-lg mb-4 mt-2">