<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/assets/styles/order.css">
    <link rel="stylesheet" href="../../public/assets/styles/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="/HTML E CSS/PROJETO TDE/src/imagens/favicon.png" type="image/x-icon">
    <title>Formulário</title>
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
                    <a href="order.html" style="text-decoration: none; color: black;">Peça Aqui</a>
                </button>
                <li> <i class="fa-solid fa-basket-shopping" id="navicon"></i></li>

            </ul>
        </nav>   
    </header>
    <main>
        <section id="forms">
            <h1>Contato</h1>
            <form action="" id="form">
                <div id="labels">
                    <div class="nome">
                        <label for="nome">Nome: </label>
                        <br>
                        <input style="width: 100%" type="text" name="addName" id="addName" placeholder="Digite seu nome" method="post">
                    </div> <!-- ID SERVE PARA O JAVASCRIPT, JÁ O NAME, SERVE PARA ENVIAR A INFORMAÇÃO, JÁ O ACTION SERVE PARA ONDE ENVIARÁ AS INFORMAÇÕES DA PÁGINA-->
                    <div class="email">
                        <label for="email">Email: </label>
                        <br> <!-- o method post, serve para carregar as informações no corpo da página, já o get, para a url da página-->
                        <input style="width: 100%" type="email" name="addEmail" id="addEmail" placeholder="Digite seu e-mail" method="post">
                    </div>
                    <div id="idade">
                        <label for="telefone">Telefone: </label>
                        <br>
                        <input style="width: 100%"type="phone" id="addPhone" name="addPhone" placeholder="Digite seu Telefone" method="post">
                        <br>
                    </div>
                    <div id="escolha">
                        <label for="bairro">Bairro Que Será Enviado: </label>
                        <br>
                        <select name="bairro" id="bairro" method="post">
                            <option value="" selected disabled class="placeholder" style="color: grey;">Selecione uma opção...</option>

                            <option value="boqueirao">Região Boqueirão</option>
                            <option value="boaVista">Região Boa Vista</option>
                            <option value="barreirinho">Região Barreirinho</option>
                            <option value="jardimBotânico">Jardim Botânico</option>
                        </select>
                    </div>
                    <div class="duvida">
                        <label for="duvida">informações Gerais do Endereço: </label>
                        <br>
                        <textarea name="duvida" id="duvida" method="post" placeholder="Ex: Atrás do Fórum..." cols="30" rows="10"></textarea>
                    </div>
                    <button class="botao_padrao" id="btn-address" onclick="action()" >Enviar </button>
                </div>
            </form>
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

    <script src="js/order.js"></script>

</body>
</html>