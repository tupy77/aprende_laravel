<article {{ $attributes->merge(['class' => "border-1-4 p-4 $classes", "role" => 'alert']) }}>
    <h1 class="font-bold">{{ $alert_header }}</h1>
    <p>{{ $alert_text }}</p>
</article>