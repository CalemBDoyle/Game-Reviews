<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-white leading-tight">
            {{ __('Welcome to the Game Dashboard') }}
        </h2>
    </x-slot>

    <div class="bg-cover bg-center relative py-16" style="background-image: url('https://example.com/path-to-your-background-image.jpg');">
        <!-- Dark overlay for better text readability -->
        <div class="absolute inset-0 bg-black opacity-70"></div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative z-10">
            <div class="p-12 rounded-lg shadow-xl">
                <div class="text-center text-black">
                    <p class="text-2xl mb-6 opacity-90">Welcome to your dashboard, where you can see some games and developers.</p>
                    <p class="text-3xl font-semibold mb-8">
                        {{ __("You're logged in!") }}
                    </p>
                    <div class="mt-6">
                        <a href="{{ route('games.index') }}" class="text-black bg-yellow-500 hover:bg-yellow-400 font-semibold py-3 px-6 rounded-full transition ease-in-out duration-300">
                           View Games
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


