<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $restaurante->nome }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <div class="card">
                    <div class="card-header mb-6">
                        <h3 class="text-lg font-bold text-gray-800">Visualizar Dados</h3>
                    </div>
                    
                    <div class="card-body">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                            
                            {{-- Coluna da Foto (col-md-3) --}}
                            <div class="md:col-span-1 flex flex-col items-center justify-start bg-gray-50 p-4 rounded-xl border border-gray-100">
                                @if($restaurante->foto)
                                    <img src="{{ Storage::url($restaurante->foto) }}"
                                         class="max-w-full h-auto rounded shadow-sm" style="max-height:200px; object-fit: cover;">
                                @else
                                    <div class="p-8 bg-gray-200 rounded text-gray-500 text-sm font-medium w-full text-center">
                                        <i class="fas fa-image block text-2xl mb-1"></i> Sem foto
                                    </div>
                                @endif
                            </div>

                            {{-- Coluna da Tabela (col-md-9) --}}
                            <div class="md:col-span-3 overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200 border border-gray-200 rounded-lg">
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50 w-1/4">Nome</th>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">{{ $restaurante->nome }}</td>
                                        </tr>
                                        <tr>
                                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">Categoria</th>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                    {{ $restaurante->tipo_culinaria }}
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">Telefone</th>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $restaurante->telefone }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    
                    {{-- Rodapé com as Ações --}}
                    <div class="card-footer mt-8 pt-4 border-t border-gray-100 flex items-center gap-3">
                        <a href="{{ route('restaurantes.edit', $restaurante) }}" class="inline-flex items-center px-4 py-2 bg-yellow-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-700 transition ease-in-out duration-150 shadow-sm">
                            <i class="fas fa-edit mr-2"></i> Editar
                        </a>
                        <a href="{{ route('restaurantes.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-300 transition ease-in-out duration-150">
                            <i class="fas fa-arrow-left mr-2"></i> Voltar
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>