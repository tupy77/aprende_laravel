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

                @php
                    $title = 'Transactions every 24 hours';
                    $description = 'This is a description';
                    $type = 'danger';
                    $alert_header = 'Alerta';
                    $alert_text = 'Este es un texto de alerta';
                @endphp

                {{-- Cuidado con los dos puntos antes del nombre de la variable --}}
                <x-alert2 :title="$title" :description="$description" :type="$type" id="test" class="mb-4">
                    44 million
                    <x-slot name="alert_header">
                        {{ $alert_header }}
                    </x-slot>
                    <x-slot name="alert_text">
                        {{ $alert_text }}
                    </x-slot>
                </x-alert2>

            </div>
        </div>
    </div>
</x-app-layout>
