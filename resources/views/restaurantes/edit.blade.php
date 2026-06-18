@extends('layouts.app')

@section('titulo', 'Editar Restaurante')

@section('conteudo')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Editar: {{ $restaurante->nome }}</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('restaurantes.update', $restaurante) }}"
              method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('restaurantes._form')

            {{-- Foto atual --}}
            @if($restaurante->foto)
            <div class="mt-2">
                <label>Foto atual:</label><br>
                <img src="{{ Storage::url($restaurante->foto) }}"
                     height="100" style="border-radius:8px;">
                <p class="text-muted small">Envie uma nova imagem para substituir.</p>
            </div>
            @endif

            <div class="mt-3">
                <button type="submit" class="btn btn-warning">
                    <i class="fas fa-save"></i> Atualizar
                </button>
                <a href="{{ route('restaurantes.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Voltar
                </a>
            </div>
        </form>
    </div>
</div>
@endsection