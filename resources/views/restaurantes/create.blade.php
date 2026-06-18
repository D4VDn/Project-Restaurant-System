@extends('layouts.app')

@section('titulo', 'Novo Restaurante')

@section('conteudo')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Cadastrar Restaurante</h3>
    </div>
    <div class="card-body">
        
        {{-- Bloco para exibição de erros de validação --}}
        @if ($errors->any())
            <div class="alert alert-danger" style="background-color: #f8d7da; color: #721c24; padding: 15px; margin-bottom: 20px; border: 1px solid #f5c6cb; border-radius: 4px;">
                <strong>Ops! Verifique os campos abaixo:</strong>
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('restaurantes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            @include('restaurantes._form')
            
            <div class="mt-3">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Salvar
                </button>
                <a href="{{ route('restaurantes.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Voltar
                </a>
            </div>
        </form>
    </div>
</div>
@endsection