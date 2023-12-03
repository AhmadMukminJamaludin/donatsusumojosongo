<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
                <div class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-64 object-cover object-center" src="{{ asset('startbootstrap/assets/img/logo.png') }}" alt="Card image">
                    <div class="px-6 py-4">
                        <h2 class="text-xl font-semibold text-gray-800">Card Title</h2>
                        <p class="text-gray-600 mt-2">Some description or content for the card.</p>
                    </div>
                    <div class="px-6 py-4">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#Tag1</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#Tag2</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
