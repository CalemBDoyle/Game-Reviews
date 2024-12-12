<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All developers') }}
        </h2>
    </x-slot>
    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>
    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h3 class="font-semibold text-lg mb-4">List of developers</h3>
                            @foreach($developers as $developer)
                            <a href="{{route('developers.show', $developer) }}">
                                <x-developer-card
                                    :name="$developer->name"
                                    :image="$developer->image"
                                />
                            </a>
                            <!-- Edit and Delete Buttons -->
                            <div class="mt-4 flex space-x-2">
                            <!-- Edit Button route to developers.edit and receives the $developer object so it knows which developer is being edited -->
                            <a href="{{ route('developers.edit', $developer) }}" class="text-gray-600 bg-orange-700 font-bold py-2 px-4 rounded">
                                Edit    
                            </a>

    <!-- Delete Button (you need a form to send DELETE requests) -->
                            <form action="{{ route('developers.destroy', $developer) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this developer?');">
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-gray-600 font-bold py-2 px-4 rounded">
                                 Delete
                            </button>
                            </form>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
