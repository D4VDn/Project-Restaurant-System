<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabor & Arte — Restaurantes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #121212;
            color: #f1f1f1;
            font-family: 'Segoe UI', sans-serif;
        }
        .navbar {
            background-color: #1a1a1a;
        }
        .navbar-brand {
            color: #e67e22 !important;
            font-weight: bold;
        }
        .hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                        url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1600&q=80');
            background-size: cover;
            background-position: center;
            padding: 120px 20px;
            text-align: center;
        }
        .hero h1 {
            font-weight: 800;
            font-size: 2.8rem;
        }
        .section-title {
            text-align: center;
            margin: 50px 0 30px;
            font-weight: 700;
            color: #e67e22;
        }
        .card-restaurante {
            background-color: #1e1e1e;
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s;
        }
        .card-restaurante:hover {
            transform: translateY(-5px);
        }
        .card-restaurante img {
            height: 200px;
            object-fit: cover;
        }
        .card-restaurante .card-body h5 {
            color: #f1f1f1;
            font-weight: 600;
        }
        .badge-avaliacao {
            background-color: #e67e22;
        }
        footer {
            background-color: #1a1a1a;
            padding: 30px 0;
            margin-top: 60px;
            text-align: center;
            color: #888;
        }
        .btn-admin {
            background-color: #e67e22;
            border: none;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">🍽️ Sabor & Arte</a>
        <a href="{{ route('dashboard') }}" class="btn btn-admin btn-sm text-white">
            <i class="fas fa-lock"></i> Área Administrativa
        </a>
    </div>
</nav>

<section class="hero">
    <h1>Experiência Gastronômica Única</h1>
    <p class="lead">Conheça os melhores restaurantes da nossa região</p>
</section>

<div class="container">
    <h2 class="section-title">Nossos Restaurantes</h2>
        
    <div class="row g-4">
        @forelse($restaurantes as $restaurante)
        <div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h5 class="mb-0">{{ $restaurante->nome }}</h5>
        <span class="text-muted float-right"><i class="fas fa-phone"></i> {{ $restaurante->telefone }}</span>    
    </div>
    <p class="text-muted small mb-1">
        <i class="fas fa-utensils"></i> {{ $restaurante->categoria }}
    </p>

    @empty

        <p>Nenhum restaurante encontrado.</p>

</div>
        @endforelse
    </div>
</div>

<footer>
    <p>&copy; {{ date('Y') }} Sabor & Arte — Todos os direitos reservados</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>