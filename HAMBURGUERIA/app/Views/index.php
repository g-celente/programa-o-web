<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../public/assets/styles/index.css">
    <link rel="stylesheet" href="../../public/assets/styles/cardapio.css">
    <link rel="stylesheet" href="../../public/assets/styles/avaliacao.css">
    <title>Pai Do Burger</title>
    <link rel="shortcut icon" href="/HTML E CSS/PROJETO TDE/src/imagens/favicon.png" type="image/x-icon">    
</head>
<body>
    <header>
        <nav id="navbar">
            <i class="fa-solid fa-burger" id="navicon"> PAI DO BURGUER</i>

            <ul id="nav_list">
                <li class="nav_item">
                    <a href="/programa-o-web/HAMBURGUERIA/app/Views/index.php">Home</a>
                </li>
                <li class="nav_item">
                    <a href="/programa-o-web/HAMBURGUERIA/app/Views/index.php/#menu">Cardápio</a>
                </li>
                <li class="nav_item">
                    <a href="/programa-o-web/HAMBURGUERIA/app/Views/index.php#testimonials">Avaliações</a>
                </li>
                <li class="nav_item">
                    <a href="/programa-o-web/HAMBURGUERIA/app/Views/sobre.php">Sobre</a>
                </li>
                <li class="nav_item">
                    <a href="/programa-o-web/HAMBURGUERIA/app/Views/contact.php">Contato</a>
                </li>

                <button class="botao_padrao">
                    <a href="/programa-o-web/HAMBURGUERIA/app/Views/order.php" style="text-decoration: none; color: black;">Peça Aqui</a>
                </button>
                <li> <i class="fa-solid fa-basket-shopping" id="navicon"></i></li>

            </ul>
        </nav>

    </header>

    <main id="content">
        <section id="home">
        
            <div id="cta">
                <h1 class="title">
                    O sabor que vai até
                    <span>Você</span>
                </h1>

                <p class="descricao">
                    Bem vindo ao paraíso da empresa de promoções 
                </p>
                
                <div id="cta_botao">
                    <a href="#menu" class="botao_padrao">Ver Cardápio</a>

                </div>

            </div>
            
        </section>
        <section id="menu">
            <h2 class="section-title"> Cardápio </h2>
            <h3 class="section-subtitle">Nossos Pratos Especiais</h3>

            <div id="pratos">
                <div class="prato">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <img src="src/imagens/1.png" class="dish-image" alt="Hamburguer">

                    <h3 class="dish-title">
                        CADILLAC
                    </h3>

                    <span class="dish-descricao">
                        Pão de brioche, 150g de hambúrguer artesanal assado, 
                        bacon, queijo cheddar, queijo mussarela, molho da casa, 
                        alface, tomate, cebola roxa
                    </span>

                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span> (500+) </span>
                    </div>

                    <div class="preco">
                        <h4>R$21,50</h4>
                        <button class="botao_padrao">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </button>
                    </div>
                    
                </div>
                
                <div class="prato">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <img src="src/imagens/3.png" class="dish-image" alt="Hamburguer">

                    <h3 class="dish-title">
                        BIGFOOT
                    </h3>

                    <span class="dish-descricao">
                        Pão de hambúrguer, 2 hambúrgueres de 150g artesanal assado, 
                        bacon, queijo cheddar, queijo mussarela, molho da casa, 
                        alface, tomate, cebola roxa
                    </span>

                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span> (500+) </span>
                    </div>

                    <div class="preco">
                        <h4>R$28</h4>
                        <button class="botao_padrao">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </button>
                    </div>
                    
                </div>
               
                <div class="prato">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <img src="src/imagens/5.png" class="dish-image" alt="Hamburguer">

                    <h3 class="dish-title">
                        CHARGER R/T
                    </h3>

                    <span class="dish-descricao">
                        Pão de brioche, 3 hambúrgueres de 150g artesanal assado, 
                        bacon, triplo cheddar, molho da casa, alface, tomate, 
                        cebola roxa
                    </span>

                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span> (500+) </span>
                    </div>

                    <div class="preco">
                        <h4>R$27</h4>
                        <button class="botao_padrao">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </button>
                    </div>
                    
                </div>
                <div class="prato">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <img src="src/imagens/6.png" class="dish-image" alt="Hamburguer">

                    <h3 class="dish-title">
                        MAVERICK
                    </h3>

                    <span class="dish-descricao">
                        Pão de hambúrguer, 150g de hambúrguer assado, bacon, relish de pepino agridoce, 
                        queijo cheddar, molho da casa, alface, tomate, cebola roxa
                    </span>

                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span> (500+) </span>
                    </div>

                    <div class="preco">
                        <h4>R$23,50</h4>
                        <button class="botao_padrao">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </button>
                    </div>
                    
                </div>
            </div>

        </section>
        <section id="testimonials">
            <img src="src/imagens/chefe cozinha.png"  id="testimonials_chef" alt="Chefe de Cozinha">

            <div id="testimonials_content">
                <h2 class="section-title">
                    Depoimentos
                </h2>

                <h3 class="section-subtitle">
                    Oque os Clientes Falam Sobre Nós
                </h3>

                <div id="feedbacks">
                    <div class="feedback">
                        <img src="src/imagens/avatar.png" class="feedback-avatar" alt="Avatar">
                        <div class="feedback-content">
                            <p>
                                Juliana Silva
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>
                            <p>
                                Melhor Hamburguer que já comi em toda minha vida... Atendimento super rápido
                                e muito atenciosos com meu pedido, com certeza farei mais pedidos com eles!!
                            </p>
                        </div>
                    </div>
                    <div class="feedback">
                        <img src="src/imagens/avatar2.png" class="feedback-avatar" alt="Avatar">
                        <div class="feedback-content">
                            <p>
                                Laura Ramos
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>
                            <p>
                                Tive um problema com o lanche na hora da compra, porém o chefe e o gerente foram 
                                muito atenciosos comigo, me oferecendo até outro Hamburguer na hora... Hamburguer e ambiente
                                sensacionais!!
                            </p>
                        </div>
                    </div>
                </div>
                <button class="botao_padrao">
                    Ver mais Avaliações
                </button>
            </div>
        </section>
    </main>

    <footer>
        <img src="src/imagens/wave (1).svg" alt="Imagem de uma onda">

        <div id="footer_itens">
            <span id="copyright">
                &copy 2024 Pai Do Burger
            </span>

        </div>

        <div class="social-media-buttons">
            <a href="https://delivery.yooga.app/Pai-do-burger/tabs/home">
                <i class="fa-brands fa-whatsapp"></i>
            </a>

            <a href="https://www.instagram.com/pai_do_burger/">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>

    </footer>

 
</body>
</html>