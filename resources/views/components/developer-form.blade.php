@props(['action', 'method'])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <div class="mb-4">
        <label for="name" class="block text-sm text-gray-700">name</label>
        <input
            name="name"
            id="name"
            value="{{ old('name', $developer->name ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('name')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="bio" class="block text-sm text-gray-700">bio</label>
        <input
            name="bio"
            id="bio"
            value="{{ old('bio', $developer->bio ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('bio')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="image" class="block text-sm font-medium text-gray-700">developer Cover Image</label>
        <input
            type="file"
            name="image"
            id="image"
            {{ isset($developer) ? '' : 'required' }}
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
        />
        @error('image')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    <div>
        
        <x-primary-button>
            {{ isset($developer) ? 'Update developer' : 'Add developer' }}
        </x-primary-button>
    </div>
</form>