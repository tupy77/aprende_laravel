@props(['title', 'description', 'type', 'alert_header', 'alert_text'])
{{-- @props(['title', 'description', 'type' => 'info', 'alert_header', 'alert_text']) // Con esto le damos un valor por defecto a type --}}

@php
    switch ($type) {
        case 'info':
            $classes = 'bg-blue-100 border-blue-400 text-blue-700';
            break;

        case 'danger':
            $classes = 'bg-red-100 border-red-400 text-red-700';
            break;
        
        default:
            $classes = 'bg-green-100 border-green-400 text-green-700';
            break;
    }

@endphp

<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                <dt class="text-base leading-7 text-gray-600">Transactions every 24 hours</dt>
                <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">44 million</dd>
            </div>
            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                <dt class="text-base leading-7 text-gray-600">Assets under holding</dt>
                <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">$119 trillion
                </dd>
            </div>
            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                <dt class="text-base leading-7 text-gray-600">{{ $title }}</dt>
                <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                    {{ $slot }}</dd>
                <p>{{ $description }}</p>
            </div>
        </dl>
    </div>
</div>

<article class=" border-1-4 p-4 {{ $classes }} " role="alert">
    <h1 class="font-bold">{{ $alert_header }}</h1>
    <p>{{ $alert_text }}</p>
</article>
