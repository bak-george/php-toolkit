@php
    $basicFuncLinks = [
        ['route' => 'arrays.show', 'text' => 'arrays'],
        ['route' => 'strings.show', 'text' => 'strings'],
        ['route' => 'utilities.show', 'text' => 'utilities'],
        ['route' => 'functions.show', 'text' => 'functions'],
    ];

    $algorithmLinks = [
            ['route' => 'linkedlists.show', 'text' => 'linkedlists']
        ]
@endphp
@include('partials.header')
<section id="basic-func" class="flex flex-col justify-items-center max-w-7xl px-4 sm:px-6 lg:px-8">
    <h2>{{ 'Basic Functionalities' }}</h2>
    <div class="flex flex-row justify-items-center space-x-4 mx-auto">
    @foreach ($basicFuncLinks as $basicFuncLink)
        <a class="text-2xl hover-effect-h2" href="{{ route($basicFuncLink['route'], [$basicFuncLink['text']]) }}">{{ ucfirst($basicFuncLink['text']) }}</a>
    @endforeach
    </div>
</section>
<section id="algorithms" class="flex flex-col justify-items-center max-w-7xl px-4 sm:px-6 lg:px-8">
    <h2>{{ 'Data Structure and Algorithms' }}</h2>
    <div class="flex flex-row justify-items-left space-x-4">
    @foreach ($algorithmLinks as $algorithmLink)
        <a class="text-2xl hover-effect-h2" href="{{ route($algorithmLink['route'], [$algorithmLink['text']]) }}">{{ ucfirst($algorithmLink['text']) }}</a>
    @endforeach
    </div>
</section>