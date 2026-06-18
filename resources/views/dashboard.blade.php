@extends('layouts.app')

@section('titulo', 'Dashboard')

@section('conteudo')
<div class="row">
    <div class="col-md-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $totalRestaurantes }}</h3>
                <p>Produtos Cadastrados</p>
            </div>
            <div class="icon">
                <i class="fas fa-utensils"></i>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $melhorAvaliado->nome ?? '-' }}</h3>
                <p>Último Produto Cadastrado</p>
            </div>
            <div class="icon">
                <i class="fas fa-star"></i>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Bem-vindo ao Painel Administrativo!</h3>
    </div>
    <div class="card-body">
        <p>Use o menu lateral para gerenciar os produtos cadastrados no sistema.</p>
        <a href="{{ route('restaurantes.index') }}" class="btn btn-primary">
            <i class="fas fa-list"></i> Ver Produtos
        </a>
    </div>
</div>
@endsection