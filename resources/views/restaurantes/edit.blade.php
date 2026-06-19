<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Restaurante') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <div class="card">
                    <div class="card-header mb-4">
                        <h3 class="text-lg font-bold text-gray-800">Editar: {{ $restaurante->nome }}</h3>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{ route('restaurantes.update', $restaurante) }}"
                              method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            @include('restaurantes._form')

                            {{-- Foto atual --}}
                            @if($restaurante->foto)
                            <div class="mt-4 p-4 bg-gray-50 rounded-lg border border-gray-200 inline-block">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Foto atual:</label>
                                <img src="{{ Storage::url($restaurante->foto) }}"
                                     height="100" class="h-24 object-cover rounded-lg shadow-sm">
                                <p class="text-gray-500 text-xs mt-2">Envie uma nova imagem caso queira substituir a atual.</p>
                            </div>
                            @endif

                            <div class="mt-6 flex items-center gap-3">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-yellow-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-700 transition ease-in-out duration-150 shadow-sm">
                                    <i class="fas fa-save mr-2"></i> Atualizar
                                </button>
                                <a href="{{ route('restaurantes.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-300 transition ease-in-out duration-150">
                                    <i class="fas fa-arrow-left mr-2"></i> Voltar
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>