<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Sabor & Arte | Faça seu Pedido</title>
    <style>
        /* Configurações Globais e Cores */
        :root {
            --primary-color: #d97706; /* Amarelo/Laranja Gastronômico */
            --dark-color: #1f2937;    /* Grafite Escuro */
            --light-color: #f9fafb;   /* Fundo Claro */
            --text-muted: #6b7280;    /* Texto Secundário */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--light-color);
            color: var(--dark-color);
            line-height: 1.6;
        }

        /* Cabeçalho / Navegação */
        header {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-color);
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark-color);
            margin-left: 1.5rem;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover, .nav-links a.active {
            color: var(--primary-color);
        }

        /* Banner Principal */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1200&q=80') no-repeat center center/cover;
            height: 40vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            text-align: center;
            padding: 0 1rem;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 0.5rem;
        }

        /* Seções */
        .container {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 2rem;
        }

        .section-title {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2rem;
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background-color: var(--primary-color);
            margin: 0.5rem auto 0;
        }

        /* Grid do Cardápio */
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .menu-item {
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }

        .menu-item:hover {
            transform: translateY(-5px);
        }

        .menu-item-img {
            height: 200px;
            width: 100%;
            background-size: cover;
            background-position: center;
        }

        .menu-item-info {
            padding: 1.5rem;
        }

        .menu-item-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }

        .price {
            color: var(--primary-color);
            font-weight: bold;
        }

        .menu-item-desc {
            color: var(--text-muted);
            font-size: 0.95rem;
            margin-bottom: 1rem;
        }

        /* Formulário de Pedido */
        .order-form-container {
            background-color: #ffffff;
            padding: 2.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: var(--primary-color);
        }

        .btn-submit {
            display: block;
            width: 100%;
            padding: 1rem;
            background-color: var(--primary-color);
            color: #ffffff;
            border: none;
            border-radius: 6px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-submit:hover {
            background-color: #b45309;
        }

        /* Rodapé */
        footer {
            background-color: var(--dark-color);
            color: #ffffff;
            text-align: center;
            padding: 2rem;
            margin-top: 4rem;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.2rem; }
            .nav-container { flex-direction: column; gap: 1rem; }
            .nav-links a { margin: 0 0.75rem; }
        }
    </style>
</head>
<body>

    <header>
        <nav class="nav-container">
            <div class="logo">🍽️ Sabor & Arte</div>
            <div class="nav-links">
                <a href="#cardapio" class="active">Cardápio</a>
                <a href="#fazer-pedido">Fazer Pedido</a>
            </div>
        </nav>
    </header>

    <section class="hero">
        <h1>Experiência Gastronômica Única</h1>
        <p>Escolha seus pratos favoritos e receba no conforto da sua casa</p>
    </section>

    <div class="container">
        
        <section id="cardapio">
            <h2 class="section-title">Nosso Cardápio</h2>
            
            <div class="menu-grid">
                <div class="menu-item">
                    <div class="menu-item-img" style="background-image: url('https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=500&q=80');"></div>
                    <div class="menu-item-info">
                        <div class="menu-item-title">
                            <h3>Pizza Margherita</h3>
                            <span class="price">R$ 45,90</span>
                        </div>
                        <p class="menu-item-desc">Molho de tomate artesanal, muçarela de búfala, manjericão fresco e azeite extravirgem.</p>
                    </div>
                </div>

                <div class="menu-item">
                    <div class="menu-item-img" style="background-image: url('https://images.unsplash.com/photo-1568901346375-23c9450c58cd?auto=format&fit=crop&w=500&q=80');"></div>
                    <div class="menu-item-info">
                        <div class="menu-item-title">
                            <h3>Burger Artesanal</h3>
                            <span class="price">R$ 34,90</span>
                        </div>
                        <p class="menu-item-desc">Blend de carne 180g, queijo prato derretido, alface, tomate e maionese da casa no pão brioche.</p>
                    </div>
                </div>

                <div class="menu-item">
                    <div class="menu-item-img" style="background-image: url('https://images.unsplash.com/photo-1551183053-bf91a1d81141?auto=format&fit=crop&w=500&q=80');"></div>
                    <div class="menu-item-info">
                        <div class="menu-item-title">
                            <h3>Fettuccine Alfredo</h3>
                            <span class="price">R$ 49,90</span>
                        </div>
                        <p class="menu-item-desc">Massa fresca ao molho cremoso de parmesão e manteiga, acompanhado de tiras de frango grelhado.</p>
                    </div>
                </div>
            </div>
        </section>

        <hr style="border: 0; height: 1px; background: #eee; margin: 4rem 0;">

        <section id="fazer-pedido">
            <h2 class="section-title">Monte seu Pedido</h2>
            
            <div class="order-form-container">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="nome">Seu Nome</label>
                        <input type="text" id="nome" class="form-control" placeholder="Digite seu nome completo" required>
                    </div>

                    <div class="form-group">
                        <label for="prato">Selecione o Prato</label>
                        <select id="prato" class="form-control" required>
                            <option value="" disabled selected>Escolha uma opção...</option>
                            <option value="pizza">Pizza Margherita - R$ 45,90</option>
                            <option value="burger">Burger Artesanal - R$ 34,90</option>
                            <option value="massa">Fettuccine Alfredo - R$ 49,90</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="endereco">Endereço de Entrega</label>
                        <input type="text" id="endereco" class="form-control" placeholder="Rua, número, bairro e complemento" required>
                    </div>

                    <div class="form-group">
                        <label for="obs">Observações (Opcional)</label>
                        <textarea id="obs" class="form-control" rows="3" placeholder="Ex: sem cebola, ponto da carne, etc."></textarea>
                    </div>

                    <button type="submit" class="btn-submit">Enviar Pedido</button>
                </form>
            </div>
        </section>

    </div>

    <footer>
        <p>&copy; 2026 Restaurante Sabor & Arte. Todos os direitos reservados.</p>
    </footer>

</body>
</html>