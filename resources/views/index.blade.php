<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
    @vite('resources/css/app.css')
    @livewireScripts
    <title>Photodream</title>
    <style>
        :root {
            --main-width-item: 20%;
        }
        
        .grid-sizer,
        .grid-item {
            width: var(--main-width-item);
        }

        .grid-item {
            margin-bottom: 10px;
        }

        .grid-masonry {
            margin: 0 auto;
        }

        @font-face {
            font-family: Cinzel;
            src: url({{asset('fonts/Cinzel-VariableFont_wght.ttf')}});
        }

        @font-face {
            font-family: DancingScript;
            src: url({{asset('fonts/DancingScript-VariableFont_wght.ttf')}});
        }

        dialog::backdrop {
            background-color: #ecfeff;
            opacity: 1;
        }
    </style>
    <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
</head>

<body class="bg-cyan-50">
    <header class="flex flex-col justify-center items-center min-w-max  p-2">
        <h1 class="font-semibold text-5xl sm:text-6xl text-[#2e6c93] bg-[#ffffff94] rounded-md"
            style="font-family: Cinzel;">
            Photodream
        </h1>
        <h2 class="font-thin text-2xl text-[#2d7c8e]" style="font-family: DancingScript;">
            If you can imagine it, it's here
        </h2>
    </header>
    <main>
        <livewire:input-search />
        <dialog id="modal_loading" class="modal bg-transparent">
            <img src="{{ asset('loading.gif') }}" alt="Loading" style="cursor: crosshair;" />
        </dialog>
    </main>
    <footer>

    </footer>
    <script>
        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            document.documentElement.style.cssText = "--main-width-item: 99%";
        }
    </script>
</body>

</html>