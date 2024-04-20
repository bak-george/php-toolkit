<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css') 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.23.0/min/vs/loader.js"></script>
    <title>PHP ToolBox</title>
</head>
<body class="custom-background flex items-center justify-center min-h-screen font-mono">
    <div class="bg-[#AEB2D5] m-3 space-y-10 shadow-2xl rounded-3xl md:p-5 relative"> 
        <header class="bg-[#484C89] text-white w-full rounded-t-3xl border-b-4 border-[#777BB3] flex flex-col items-center justify-items-center shadow-lg relative top-0 left-0 p-3">
            <h1 class="text-4xl p-5 drop-shadow-lg hover-effect-h1">
                <a href="{{ route('home') }}">
                    PHP Toolkit
                </a>
            </h1>
        </header>


