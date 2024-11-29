<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Games') }}
        </h2>
    </x-slot>
<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h3 class="font-semibold text-lg mb-4">Game Details</h3>
                        <x-game-details
                            :title="$game->title"
                            :genre="$game->genre"
                            :description="$game->description"
                            :year="$game->year"
                            :image="$game->image"
                        />

                            {{-- Book Reviews --}}
                    <h4 class="font-semibold text-md mt-8">Reviews</h4>
                    @if($book->reviews->isEmpty())
                        <p class="text-gray-600">No reviews yet.</p>
                    @else  
                        <ul class="mt-4 space-y-4">
                            @foreach($book->reviews as $review)
                                <li class="bg-gray-100 p-4 rounded-lg">
                                    <p class="font-semibold">{{ $review-user->name }} ({{ $review->created_at->format('M d, Y') }})</p>
                                    <p>Rating: {{ $review->rating }} / 5</p>
                                    <p>{{ $review->comment }}</p>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    <h4 class="font-semibold text-md mt-8">Add a Review</h4>
                    <form action="{{ route('reviews.store',) }}" method="POST" class="mt-4">
                        @csrf
                        <div class="mb-4">
                            <label for="rating" class="block font-medium text-sm text-gray-700">Rating</label>
                            <select name="rating" id="rating" class="mt-1 block w-full" required>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
