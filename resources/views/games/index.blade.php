<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Games') }}
        </h2>
    </x-slot>
    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>
    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h3 class="font-semibold text-lg mb-4">List of Games</h3>
                        <div class="grid grid cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($games as $game)
                            <a href="{{route('games.show', $game) }}">
                                <x-game-card
                                    :title="$game->title"
                                    :image="$game->image"
                                />
                            </a>
                            <!-- Edit and Delete Buttons -->
                            <div class="mt-4 flex space-x-2">
                            <!-- Edit Button route to games.edit and receives the $game object so it knows which game is being edited -->
                            <a href="{{ route('games.edit', $game) }}" class="text-gray-600 bg-orange-700 font-bold py-2 px-4 rounded">
                                Edit    
                            </a>

    <!-- Delete Button (you need a form to send DELETE requests) -->
                            <form action="{{ route('games.destroy', $game) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this game?');">
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