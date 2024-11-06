<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="flex flex-col min-h-screen bg-gray-100">
    <x-banner />
    <!-- Botón de menú para abrir la sidebar en pantallas pequeñas -->
    <header class="flex items-center justify-between p-4 bg-white shadow-md">
        <!-- Page Content -->
        @livewire('navigation-menu')
    </header>

    <!-- Modal de Sidebar -->
    <div id="sidebarModal" class="fixed inset-0 z-40 flex items-start bg-gray-900 bg-opacity-50 md:hidden">
        <div class="w-64 h-full p-4 text-white bg-gray-800">
            <button id="closeSidebar" class="text-gray-400 hover:text-white">
                ✖️ Cerrar
            </button>
            <livewire:Layouts.Sidebar />
        </div>
    </div>

    <!-- Sidebar permanente para pantallas grandes -->
    <div class="hidden p-4 text-white bg-gray-800 md:flex md:fixed md:inset-y-0 md:left-0 md:w-64">
        <div>
            <livewire:Layouts.Sidebar />
        </div>
    </div>

    <!-- Contenido principal -->
    <main class="flex-1 p-8 md:ml-64">
        <main>
            {{ $slot }}
        </main>
    </main>
    @stack('modals')

    @livewireScripts
    <!-- Script para controlar el modal de la sidebar -->
    <script>
        const openSidebar = document.getElementById('openSidebar');
        const closeSidebar = document.getElementById('closeSidebar');
        const sidebarModal = document.getElementById('sidebarModal');

        openSidebar.addEventListener('click', () => {
            sidebarModal.classList.remove('hidden');
        });

        closeSidebar.addEventListener('click', () => {
            sidebarModal.classList.add('hidden');
        });

        // Cerrar modal al hacer clic fuera de la sidebar
        sidebarModal.addEventListener('click', (event) => {
            if (event.target === sidebarModal) {
                sidebarModal.classList.add('hidden');
            }
        });
    </script>
</body>

</html>