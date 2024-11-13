
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Games') }}
        </h2>
    </x-slot>
    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>
<x-app-layout>
<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
               
                    <div class="border p-4 rounded-lg shadow-md">
                        @foreach($games as $game)
                        <a href="{{route('games.show', $game) }}">
                            <x-game-card
                                :title="$game->title"
                                :image="$game->image"
                            />
                        </a>

                        <!-- Edit and Delete Buttons -->
                        <div class="mt-4 flex space-x-2">
                            <!-- Edit Button route to games.edit and receives the $game object so it knows which game is for editing -->
                            <a href="{{ route('games.edit', $game) }}" class="text-gray-600 bg-orange-300 hover:bg-orange-700 font-bold py-2 px-4 rounded">
                                Edit
                            </a>

                            <!-- Delete Button (you need a form to send DELETE requests) -->
                            <!-- Delete Button route to games.destroy, passing game object -->
                            <form action="{{ route('games.destroy', $game) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this game?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-gray-600 font-bold py-2 px-4 rounded">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>