@props(['title', 'genre', 'description', 'year', 'image'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300">
    <h4 class="font-bold text-lg">{{ $title }}</h4>
    <img src="{{ asset('images/' . $image) }}" alt="{{ $title }}" class="w-full max-w-xs h-auto object-cover">
</div>