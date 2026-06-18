@extends('layouts.app')

@section('titulo', 'Restaurantes')

@section('conteudo')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">Lista de Restaurantes</h3>
        <a href="{{ route('restaurantes.create') }}" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i> Novo Restaurante
        </a>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($restaurantes as $restaurante)
                <tr>
                    <td>{{ $restaurante->id }}</td>
                    <td>
                        @if($restaurante->foto)
                            <img src="{{ Storage::url($restaurante->foto) }}"
                                 width="50" height="50"
                                 style="object-fit:cover; border-radius:5px;">
                        @else
                            <span class="badge badge-secondary">Sem foto</span>
                        @endif
                    </td>
                    <td>{{ $restaurante->nome }}</td>
                    
                    {{-- CORREÇÃO AQUI: Alterado de 'categoria' para 'tipo_culinaria' --}}
                    <td><span class="badge badge-info">{{ $restaurante->tipo_culinaria }}</span></td>

                    <td>{{$restaurante->telefone }}</td>
                    <td>
                        <a href="{{ route('restaurantes.show', $restaurante) }}"
                           class="btn btn-info btn-xs">
                            <i class="fas fa-eye"></i> Visualizar
                        </a>
                        <a href="{{ route('restaurantes.edit', $restaurante) }}"
                           class="btn btn-warning btn-xs">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                        <form action="{{ route('restaurantes.destroy', $restaurante) }}"
                              method="POST" style="display:inline"
                              onsubmit="return confirm('Deseja excluir este produto?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-xs">
                                <i class="fas fa-trash"></i> Excluir
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center text-muted">Nenhum produto cadastrado.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $restaurantes->links() }}
    </div>
</div>
@endsection