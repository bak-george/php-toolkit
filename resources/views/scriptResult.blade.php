@include('partials.header')
    <section class="flex flex-col items-center space-y-4">
        <h2 class="text-2xl drop-shadow-lg">Script Result</h1>
        <div class="flex w-[80rem] h-auto">
            <pre class="w-1/2 text-wrap drop-shadow-lg h-auto">{{!! $result['output'] !!}}</pre>
            <div class="w-1/2">
                <pre class="text-white text-wrap text-left leading-loose bg-black shadow-lg rounded-2xl p-2 h-auto">{{ $styledCode }}</pre>
            </div>
        </div>
    </section>
