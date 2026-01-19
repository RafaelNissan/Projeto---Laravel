<!-- estrutura base do site -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TechStore - O Futuro é Aqui</title>

    <!-- fonte do Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS e JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- estilos do Livewire -->
    @livewireStyles
</head>

<body class="font-sans antialiased bg-[#f8fafc] text-[#1e293b]">

    <!-- conteúdo das páginas -->
    <main>
        {{ $slot }}
    </main>

    <!-- scripts do Livewire (faz a mágica funcionar) -->
    @livewireScripts
</body>

</html>