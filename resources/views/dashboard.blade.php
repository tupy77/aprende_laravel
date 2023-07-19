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
                <x-stats>
                    <x-slot name="title">Transactions every 24 hours</x-slot>
                    <x-slot name="description">This is a description</x-slot>
                    44 million
                </x-stats>
            </div>
        </div>
    </div>
</x-app-layout>
