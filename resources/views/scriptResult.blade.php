@include('partials.header')
<section class="flex flex-col items-center space-y-4">
    <h2 class="text-2xl drop-shadow-lg">Script Result</h2>
    <div class="flex w-[80rem] h-[40rem]">
        <div class="w-1/2 h-auto border-r-4 border-[#484C89]">
            <div id="output" class="shadow-lg h-full rounded-l-3xl overflow-hidden"></div>
        </div>
        <div class="w-1/2 h-auto border-l-4 border-[#484C89]">
            <div id="editor" class="shadow-lg h-full rounded-r-3xl overflow-hidden"></div>
        </div>
    </div>
</section>


<script>
require.config({ paths: { 'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.23.0/min/vs' }});

require(['vs/editor/editor.main'], function() {
    var editorData = [
        { id: 'editor', value: `{!! $styledCode !!}`, language: 'php' },
        { id: 'output', value: `{!! $result['output'] !!}`, language: 'plaintext' }
    ];

    editorData.forEach(function(data) {
        var editor = monaco.editor.create(document.getElementById(data.id), {
            value: data.value,
            language: data.language, 
            theme: 'vs-dark', 
            automaticLayout: true,
            fontSize: 16,
            formatOnType: true
        });
    });
});
</script>
