<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Restaurante') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <div class="card">
                    <div class="card-header mb-6 border-b border-gray-200 pb-4">
                        <h3 class="text-xl font-bold text-gray-800">Novo Registro</h3>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{ route('restaurantes.store') }}"
                              method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                                
                                {{-- Lado Esquerdo: Placeholder de Imagem ilustrativo --}}
                                <div class="md:col-span-1 flex flex-col items-center justify-start bg-gray-50 p-4 rounded-xl border border-gray-100">
                                    <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-3">Prévia da Foto</label>
                                    <div class="p-8 bg-gray-200 rounded text-gray-400 text-sm font-medium w-full text-center">
                                        <i class="fas fa-cloud-upload-alt block text-3xl mb-2 text-gray-400"></i>
                                        Nenhuma foto selecionada
                                    </div>
                                    <p class="text-gray-400 text-center mt-3" style="font-size: 11px;">Selecione um arquivo de imagem válido no campo ao lado.</p>
                                </div>

                                {{-- Lado Direito: Puxa os inputs do _form já estilizados --}}
                                <div class="md:col-span-3 space-y-4">
                                    @include('restaurantes._form')
                                </div>

                            </div>

                            {{-- Rodapé com botões de salvar/voltar combinando com o editar --}}
                            <div class="card-footer mt-8 pt-4 border-t border-gray-100 flex items-center gap-3">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-orange-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-orange-600 transition ease-in-out duration-150 shadow-sm cursor-pointer">
                                    <i class="fas fa-plus mr-2"></i> Concluir Cadastro
                                </button>
                                <a href="{{ route('restaurantes.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-300 transition ease-in-out duration-150">
                                    <i class="fas fa-arrow-left mr-2"></i> Cancelar
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>