<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - Admin</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100">
        <div class="flex h-screen overflow-hidden">
            
            <aside class="w-64 bg-gray-900 text-gray-300 flex flex-col flex-shrink-0 transition-all duration-300">
                <div class="h-16 flex items-center px-4 bg-gray-950 border-b border-gray-800 gap-2">
                    <i class="fas fa-utensils text-orange-500 text-xl"></i>
                    <span class="font-bold text-white text-lg tracking-wider">Sabor & Arte</span>
                    <span class="text-xs bg-orange-500 text-white px-1.5 py-0.5 rounded font-mono">LTE</span>
                </div>

                <div class="p-4 border-b border-gray-800 flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-gray-700 flex items-center justify-center text-white font-bold uppercase shadow-inner">
                        {{ substr(Auth::user()?->name ?? 'V', 0, 1) }}
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-sm font-semibold text-white truncate">{{ Auth::user()?->name ?? 'Visitante' }}</p>
                        <span class="text-xs text-emerald-400 flex items-center gap-1">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 inline-block animate-pulse"></span> Online
                        </span>
                    </div>
                </div>

                <nav class="flex-1 px-2 py-4 space-y-1 overflow-y-auto">
                    <p class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Navegação</p>

                    <a href="{{ route('dashboard') }}" class="flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition {{ request()->routeIs('dashboard') ? 'bg-orange-500 text-white font-semibold shadow-md' : 'hover:bg-gray-800 hover:text-white' }}">
                        <i class="fas fa-tachometer-alt w-6 text-center text-base {{ request()->routeIs('dashboard') ? 'text-white' : 'text-gray-400' }}"></i>
                        <span>Painel Principal</span>
                    </a>

                    <a href="{{ route('restaurantes.index') }}" class="flex items-center px-3 py-2.5 text-sm font-medium rounded-lg transition {{ request()->routeIs('restaurantes.*') ? 'bg-orange-500 text-white font-semibold shadow-md' : 'hover:bg-gray-800 hover:text-white' }}">
                        <i class="fas fa-store w-6 text-center text-base {{ request()->routeIs('restaurantes.*') ? 'text-white' : 'text-gray-400' }}"></i>
                        <span>Restaurantes</span>
                    </a>

                    <p class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider pt-4 mb-2">Ações</p>

                    <a href="{{ route('home') }}" class="flex items-center px-3 py-2.5 text-sm font-medium rounded-lg hover:bg-gray-800 hover:text-white transition">
                        <i class="fas fa-globe w-6 text-center text-gray-400 text-base"></i>
                        <span>Ver Site</span>
                    </a>

                    <form method="POST" action="{{ route('logout') }}" class="block">
                        @csrf
                        <button type="submit" class="w-full flex items-center px-3 py-2.5 text-sm font-medium text-red-400 rounded-lg hover:bg-red-950/30 hover:text-red-300 transition text-left">
                            <i class="fas fa-sign-out-alt w-6 text-center text-base text-red-400"></i>
                            <span>Sair</span>
                        </button>
                    </form>
                </nav>
            </aside>

            <div class="flex-1 flex flex-col overflow-hidden">
                
                <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6 flex-shrink-0 shadow-sm">
                    <div class="flex items-center gap-4">
                        <button class="text-gray-500 hover:text-gray-700 text-lg focus:outline-none">
                            <i class="fas fa-bars"></i>
                        </button>
                        @isset($header)
                            <div class="text-gray-800 font-semibold text-lg">
                                {{ $header }}
                            </div>
                        @endisset
                    </div>

                    <div class="flex items-center gap-4">
                        <span class="text-sm text-gray-500 hidden sm:inline">Painel: <strong class="text-gray-700">Admin</strong></span>
                    </div>
                </header>

                <main class="flex-1 overflow-x-hidden overflow-y-auto p-6 bg-gray-100">
                    {{ $slot }}
                </main>
            </div>

        </div>
    </body>
</html>