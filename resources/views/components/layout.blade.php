<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @wireUiScripts
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <main>
        <nav class="bg-white px-6 py-4 shadow">
            <div class="flex justify-between items-center p-6 bg-teal-500">
                <div class="flex items-center">
                    <img src="images/todo-natal.svg" alt="Logo" class="h-16 w-h-16 mr-2">
                    <span class="text-cyan-100 font-semibold text-3xl">Dev-Todo</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{route('home')}}" wire:navigate class="text-cyan-100 text-lg hover:underline">Home</a>
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button class="px-4 py-2 text-lg bg-teal-600 font-medium text-cyan-100 rounded hover:underline">Recursos</button>
                        </x-slot>
                        <x-dropdown.item href="tarefas" wire:navigate wire:click="createTask" icon="plus" label="Adicionar Tarefa" />
                        <x-dropdown.item icon="clipboard" separator label="Criar Projeto" />
                        <x-dropdown.item separator label="Logout" />
                    </x-dropdown>
                    <a href="#contato" class="text-cyan-100 text-lg hover:underline">Ferramentas</a>
                    <a href="#contato" class="text-cyan-100 text-lg hover:underline">Contato</a>
                    <a href="{{route('login')}}" wire:navigate class="text-cyan-100 text-lg hover:underline">Login</a>
                </div>
            </div>
        </nav>
        {{ $slot }}
    </main>
    </div>
    @livewireScripts
</body>

</html>
