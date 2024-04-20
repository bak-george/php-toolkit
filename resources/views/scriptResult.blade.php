@include('partials.header')
<section class="flex flex-col items-center space-y-4">
    <h2 class="text-2xl drop-shadow-lg">Script Result</h2>
    <div class="flex w-[80rem] h-auto">
        <pre class="w-1/2 text-wrap drop-shadow-lg h-auto">{{ $result['output'] }}</pre>
        <div class="w-1/2 h-80"> <!-- Increased height to 64px, adjust as needed -->
            <div id="editor" class="shadow-lg h-full"></div>
        </div>
    </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.23.0/min/vs/loader.js"></script>
<script>
require.config({ paths: { 'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.23.0/min/vs' }});

require(['vs/editor/editor.main'], function() {
    var editor = monaco.editor.create(document.getElementById('editor'), {
        value: `{{!!$styledCode!!}}`,
        language: 'php', 
        theme: 'vs-dark', 
        automaticLayout: true
    });
});
</script>
