<div class="max-w-sm rounded overflow-hidden border-1 border-gray-500 mt-5 justify-center items-center size-80 flex flex-col min-h-full">
    <h2 class="m-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-2xl dark:text-black w-fit">{{ $title }}</h2>
    <p class="px-4 text-center w-full line-clamp-8 overflow-hidden">{{ $text }}</p>

    <div class="flex items-end mt-auto">
        <a href="/blog/{{ $id }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mb-3">Ver post</a>
        {{ $slot }}
    </div>
</div>