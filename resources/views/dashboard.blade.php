<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Painel Administrativo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- SE O USUÁRIO ESTIVER LOGADO --}}
            @auth
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="p-6 text-gray-900 font-medium text-lg mb-4">
                        {{ __("Você está logado!") }} Bem-vindo, {{ Auth::user()->name }}.
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 px-6">
                        <div class="p-6 bg-blue-50 border border-blue-200 rounded-lg shadow-sm">
                            <p class="text-sm font-semibold text-blue-600 uppercase tracking-wider">Total de Restaurantes</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">{{ $totalRestaurantes }}</p>
                        </div>
                        
                        <div class="p-6 bg-green-50 border border-green-200 rounded-lg shadow-sm">
                            <p class="text-sm font-semibold text-green-600 uppercase tracking-wider">Último Cadastrado</p>
                            <p class="text-xl font-bold text-gray-800 mt-2">
                                {{ $melhorAvaliado?->nome ?? 'Nenhum restaurante cadastrado' }}
                            </p>
                        </div>
                    </div>

                    <div class="mt-8 px-6">
                        <a href="{{ route('restaurantes.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 transition ease-in-out duration-150">
                            Gerenciar Restaurantes
                        </a>
                    </div>
                </div>
            @endauth

            {{-- SE O USUÁRIO FOR UM VISITANTE (NÃO LOGADO) --}}
            @guest
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-12 text-center">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Acesso Restrito</h3>
                    <p class="text-gray-600 mb-8">Para gerenciar os restaurantes e acessar as estatísticas do painel, por favor escolha uma das opções abaixo:</p>
                    
                    <div class="flex justify-center gap-4">
                        <a href="{{ route('login') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 border border-transparent rounded-md font-semibold text-sm text-white shadow-sm hover:bg-blue-700 transition ease-in-out duration-150">
                            Entrar (Login)
                        </a>
                        
                        <a href="{{ route('register') }}" class="inline-flex items-center px-6 py-3 bg-gray-200 border border-transparent rounded-md font-semibold text-sm text-gray-700 shadow-sm hover:bg-gray-300 transition ease-in-out duration-150">
                            Criar Conta (Registrar)
                        </a>
                    </div>
                </div>
            @endguest

        </div>
    </div>
</x-app-layout>