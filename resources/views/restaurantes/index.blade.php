<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Restaurantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-lg font-bold text-gray-800">Lista de Restaurantes</h3>
                        <a href="{{ route('restaurantes.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 transition ease-in-out duration-150">
                            <i class="fas fa-plus mr-2"></i> Novo Restaurante
                        </a>
                    </div>
                    
                    <div class="card-body p-0 overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 table-striped table-hover">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Foto</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Categoria</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Telefone</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse($restaurantes as $restaurante)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $restaurante->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if($restaurante->foto)
                                            <img src="{{ Storage::url($restaurante->foto) }}"
                                                 width="50" height="50"
                                                 style="object-fit:cover; border-radius:5px;">
                                        @else
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">Sem foto</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $restaurante->nome }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">{{ $restaurante->tipo_culinaria }}</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $restaurante->telefone }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                        <a href="{{ route('restaurantes.show', $restaurante) }}" class="text-blue-600 hover:text-blue-900">
                                            <i class="fas fa-eye"></i> Visualizar
                                        </a>
                                        <a href="{{ route('restaurantes.edit', $restaurante) }}" class="text-yellow-600 hover:text-yellow-900">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('restaurantes.destroy', $restaurante) }}"
                                              method="POST" style="display:inline"
                                              onsubmit="return confirm('Deseja excluir este restaurante?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-red-600 hover:text-red-900 bg-transparent border-0 p-0 cursor-pointer">
                                                <i class="fas fa-trash"></i> Excluir
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">Nenhum restaurante cadastrado.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="card-footer mt-4">
                        {{ $restaurantes->links('pagination::tailwind') }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>