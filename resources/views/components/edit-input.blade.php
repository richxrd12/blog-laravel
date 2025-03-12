@props([
    'type',
    'name',
    'value'
])

<input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" placeholder="{{ ucfirst($name) }}..." value="{{ $value }}"
    class="px-4 py-1 border rounded-lg mb-4 mt-2">