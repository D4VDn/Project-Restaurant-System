@extends('layouts.app')

@section('titulo', $restaurante->nome)

@section('conteudo')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $restaurante->nome }}</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3 text-center">
                @if($restaurante->foto)
                    <img src="{{ Storage::url($restaurante->foto) }}"
                         class="img-fluid rounded" style="max-height:200px;">
                @else
                    <div class="p-4 bg-light rounded text-muted">Sem foto</div>
                @endif
            </div>
            <div class="col-md-9">
                <table class="table table-bordered">
                    <tr>
                        <th>Nome</th>
                        <td>{{ $restaurante->nome }}</td>
                    </tr>
                    <tr>
                        <th>Categoria</th>
                        
                        <td>{{ $restaurante->tipo_culinaria }}</td>
                    </tr>
                    <tr>
                        <th>Telefone</th>
                        
                        <td>{{ $restaurante->telefone }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ route('restaurantes.edit', $restaurante) }}" class="btn btn-warning">
            <i class="fas fa-edit"></i> Editar
        </a>
        <a href="{{ route('restaurantes.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Voltar
        </a>
    </div>
</div>
@endsection