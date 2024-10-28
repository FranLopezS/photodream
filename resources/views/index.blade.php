<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @livewireScripts
    @vite('resources/css/app.css')
    <title>PhotoAPP</title>
    <style>
        /* fluid 5 columns */
        .grid-sizer,
        .grid-item { width: 20%; }
        /* 2 columns */
        .grid-item--width2 { width: 40%; }
        .grid-item {
            margin-bottom: 10px;
        }
        .grid-masonry {
            margin: 0 auto;
            width: 1500px;
        }
        body {
            background: url({{ asset('fondo.jpg') }});
        }
        @font-face {
            font-family: Cinzel;
            src: url({{asset('fonts/Cinzel-VariableFont_wght.ttf')}});
        }
        @font-face {
            font-family: DancingScript;
            src: url({{asset('fonts/DancingScript-VariableFont_wght.ttf')}});
        }
    </style>
    <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
</head>
<body class="bg-cyan-50">
    <header class="flex flex-col justify-center items-center min-w-max  p-2">
        <h1 class="font-semibold text-6xl text-[#4f1340]" style="font-family: Cinzel;">
            Photodream
        </h1>
        <h2 class="font-thin text-2xl text-[#534a38]" style="font-family: DancingScript;">
            If you can imagine it, it's here
        </h2>
    </header>
    <main>
        <div class="flex justify-center">
            <livewire:input-search/>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>