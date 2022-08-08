<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <x-card title="Asha" class="bg-red-500"
        src="https://images.pexels.com/photos/45201/kitty-cat-kitten-pet-45201.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" />
    <x-card title="Marsel" class="bg-indigo-500" />
    <x-card title="Aldi" />
    <x-card title="Khalfan" />
    <x-card title="Muhammad Fahmi Albaihaqi" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFmvASAHQ8CVmBfLL7QEGefPp2P8W_-ffsHG7MUOlnGw&s"/>

    {{-- <div class="shadow rounded-md p-4">
        <h1 class="text-lg">title 1</h1>
    </div>
    <div class="shadow rounded-md p-4">
        <h1 class="text-lg">title 2</h1>
    </div>
    <div class="shadow rounded-md p-4">
        <h1 class="text-lg">title 3</h1>
    </div>
    <div class="shadow rounded-md p-4">
        <h1 class="text-lg">title 4</h1> --}}
        {{--
    </div> --}}

</x-app-layout>
