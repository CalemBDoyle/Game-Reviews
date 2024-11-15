@props(['action', 'method', 'game'])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <!--title-->
    <div class="mb-4">
        <label for="title" class="block text-sm text-gray-700">Title</label>
        <input
            name="title"
            id="title"
            value="{{ old('title', $game->title ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('title')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!--genre-->
    <div class="mb-4">
        <label for="genre" class="block text-sm text-gray-700">Genre</label>
        <input
            name="genre"
            id="genre"
            value="{{ old('genre', $game->genre ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('genre')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!--year-->
    <div class="mb-4">
        <label for="year" class="block text-sm text-gray-700">year</label>
        <input
            name="year"
            id="year"
            value="{{ old('year', $game->year ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('year')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    
    <!--desc-->
    <div class="mb-4">
        <label for="description" class="block text-sm text-gray-700">Description</label>
        <input
            name="description"
            id="description"
            value="{{ old('description', $game->description ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('description')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!--image-->
    <div class="mb-4">
        <label for="image" class="block text-sm font-medium text-gray-700">Game Cover Image</label>
        <input
            type="file"
            name="image"
            id="image"
            {{ isset($game) ? '' : 'required' }}
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
        />
        @error('image')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>



    @isset($game->image)
        <div class="mb-4">
            <img src="{{ asset($game->image) }}" alt="game cover" class="w-24 h-32 object-cover">
        </div>
    @endisset

    <!--button-->
    <div>
        <x-primary-button>
            {{ isset($game) ? 'Update game' : 'Add game' }}
        </x-primary-button>
    </div>
</form>

