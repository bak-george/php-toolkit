@include('partials.header')
    <section class="flex flex-col items-center mx-auto justify-items-center max-w-7xl lg:px-8 space-y-4">
        <h2 class="text-4xl drop-shadow-lg">Linked Lists</h2>
        <ul class="space-y-4 flex flex-col items-stretch mx-auto justify-items-center"> 
            @foreach ($files as $file)
                <a href="{{ route('script.result', ['category' => 'linkedLists', 'title' => $file]) }}">
                    <li class="hover-effect-btn p-2 shadow-2xl rounded-2xl bg-white drop-shadow-lg">{{ $file }}</li>
                </a>
            @endforeach
        </ul>
    </section>
@include('partials.footer')