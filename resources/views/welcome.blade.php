@php
    $links = [
        ['route' => 'arrays.show', 'text' => 'arrays'],
        ['route' => 'strings.show', 'text' => 'strings'],
        ['route' => 'utilities.show', 'text' => 'utilities'],
        ['route' => 'functions.show', 'text' => 'functions'],
    ];
@endphp
@include('partials.header')
<section class="flex justify-items-center space-x-4 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
@foreach ($links as $link)
    <a class="text-2xl hover-effect-h2" href="{{ route($link['route'], [$link['text']]) }}">{{ ucfirst($link['text']) }}</a>
@endforeach
</section>

