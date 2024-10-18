<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/assets/styles/forms.css">
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
                    <a href="/programa-o-web/HAMBURGUERIA/app/Views/order.php" style="text-decoration: none; color: black;">Peça Aqui</a>
                </button>
                <li> <i class="fa-solid fa-basket-shopping" id="navicon"></i></li>

            </ul>
        </nav>
    </header>
    <main>
        <section id="forms">
            <h1>Contato</h1>
            <form  id="form" action="/programa-o-web/HAMBURGUERIA/app/Controllers/ContatoController.php" method="post">
                <div id="labels">
                    <div class="nome">
                        <label for="nome">Nome: </label>
                        <br>
                        <input type="text" name="txtName" id="txtName" placeholder="Digite seu nome" >
                    </div> <!-- ID SERVE PARA O JAVASCRIPT, JÁ O NAME, SERVE PARA ENVIAR A INFORMAÇÃO, JÁ O ACTION SERVE PARA ONDE ENVIARÁ AS INFORMAÇÕES DA PÁGINA-->
                    <div class="email">
                        <label for="email">Email: </label>
                        <br> <!-- o method post, serve para carregar as informações no corpo da página, já o get, para a url da página-->
                        <input type="email" name="txtEmail" id="txtEmail" placeholder="Digite seu e-mail" >
                    </div>
                    <div id="idade">
                        <label for="telefone">Telefone: </label>
                        <br>
                        <input type="phone" id="txtPhone" name="txtPhone" placeholder="Digite seu Telefone" >
                        <br>
                    </div>
                    <div id="escolha">
                        <label for="problema">Motivo Contato: </label>
                        <br>
                        <select name="selecao" id="selecao" >
                            <option value="" selected disabled class="placeholder" style="color: grey;">Selecione uma opção...</option>

                            <option value="notSale">Não consigo fazer a Compra</option>
                            <option value="frete">Meu produto não chegou</option>
                            <option value="pedido">Não consigo Realizar o Pedido</option>
                            <option value="outro">Outros</option>
                        </select>
                    </div>
                    <div class="duvida">
                        <label for="duvida">Escreva seu problema: </label>
                        <br>
                        <textarea name="duvida" id="duvida"  placeholder="Ex: Não consigo baixar o arquivo..." cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="botao_padrao">Enviar</button>
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

            <a href="https://www.inst/programa-o-web/HAMBURGUERIAagram.com/pai_do_burger/">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>

    </footer>

    <script src="/programa-o-web/HAMBURGUERIA/public/js/forms.js"></script>

</body>
</html>