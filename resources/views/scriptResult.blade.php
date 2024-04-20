@include('partials.header')
<section class="flex flex-col items-center space-y-4">
    <h2 class="text-2xl drop-shadow-lg">Script Result</h2>
    <div class="flex w-[80rem] h-auto space-x-2">
        <div class="w-1/2 h-80">
            <div id="output" class="shadow-lg h-full"></div>
        </div>
        <div class="w-1/2 h-80">
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
        automaticLayout: true,
        fontSize: 16,
        formatOnType: true
    });
});
</script>

<script>
require.config({ paths: { 'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.23.0/min/vs' }});

require(['vs/editor/editor.main'], function() {
    var editor = monaco.editor.create(document.getElementById('output'), {
        value: `{{!!$result['output']!!}}`,
        language: 'plaintext', 
        theme: 'vs-dark', 
        automaticLayout: true,
        fontSize: 16,
        formatOnType: true
    });
});
</script>
