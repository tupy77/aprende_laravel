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
                <x-stats :title="$title" :description="$description" :type="$type" :alert_header="$alert_header" :alert_text="$alert_text">
                    44 million
                </x-stats>

                
                <x-stats>
                    44 million

                    <x-slot name="description">This is a description</x-slot>

                    <x-slot name="title">
                        <div>
                            <h1>Asi es mas facil enviar cosas mas complejas</h1>
                            <p>Ves</p>
                        </div>
                    </x-slot>

                    <x-slot name="type">info</x-slot>
                    <x-slot name="alert_header">Alerta</x-slot>
                    <x-slot name="alert_text">Este es un texto de alerta</x-slot>
                    
                </x-stats>
            </div>
        </div>
    </div>
</x-app-layout>
