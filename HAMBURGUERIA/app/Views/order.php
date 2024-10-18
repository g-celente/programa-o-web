<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../public/assets/styles/index.css">
    <link rel="stylesheet" href="../../public/assets/styles/order.css">
    <title>Faça Seu Pedido</title>
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
    <main>
        <section id="forms">
            <h1>Monte Seu Lanche</h1>
            <div class='form'>
                <form action="adress.html" id="form">
                    <div id="labels">
                        <div id="escolha">
                            <label for="problema">Tamanho Do Lanche </label>
                            <br>
                            <select name="sizeLaunch" id="sizeLaunch" method="post">
                                <option value="" selected disabled class="placeholder" style="color: grey;">Selecione uma opção...</option>
                                <option value="large">Grande (300g)</option>
                                <option value="medium">Médio (150g)</option>
                                <option value="small">Pequeno (75g)</option>
                            </select>
                        </div>
                        <div id="escolha">
                            <label for="typeBrad">Tipo de Pão </label>
                            <br>
                            <select name="typeBrad" id="typeBrad" method="post">
                                <option value="" selected disabled class="placeholder" style="color: grey;">Selecione uma opção...</option>
                                <option value="brioche">Brioche</option>
                                <option value="integral">Integral</option>
                                <option value="centeio">Centeio</option>
                                <option value="semGluten">Sem Glúten</option>
                            </select>
                        </div> <!-- ID SERVE PARA O JAVASCRIPT, JÁ O NAME, SERVE PARA ENVIAR A INFORMAÇÃO, JÁ O ACTION SERVE PARA ONDE ENVIARÁ AS INFORMAÇÕES DA PÁGINA-->
                
                        <div id="escolha">
                            <label for="typeProt">Tipo de Proteína: </label>
                            <br>
                            <select name="typeProt" id="typeProt" method="post">
                                <option value="" selected disabled class="placeholder" style="color: grey;">Selecione uma opção...</option>
                                <option value="frango">Frango</option>
                                <option value="carneVermelha">Carne Vermelha</option>
                                <option value="suino">Suína</option>
                            </select>
                        </div>
                        <div id="escolha">
                            <label for="typeMolho">Molhos:</label>
                            <br>
                            <select name="typeMolho" id="typeMolho" method="post">
                                <option value="" selected disabled class="placeholder" style="color: grey;">Selecione uma opção...</option>
                                <option value="ketchup">Ketchup</option>
                                <option value="barbecue">Barbecue</option>
                                <option value="mostarda">Mostarda</option>
                                <option value="maionese">Maionese</option>
                            </select>
                        </div>
                        <div id="escolha">
                            <label for="saladCheck">Saladas: </label>
                            <div class="checkbox-container">
                                <label for="">Tomate</label>
                                <input type="checkbox" id="tomate" name="salad" value="tomate">
                            </div>
                            <div class="checkbox-container">
                                <label for=""> Alface</label>
                                <input type="checkbox" id="alface" name="salad"  value="alface">
                            </div>
                            <div class="checkbox-container">
                                <label for="">Cebola Roxa</label>
                                <input type="checkbox" id="cebola-roxa" name="salad" value="cebola-roxa">
                            </div>
                            <div class="checkbox-container">
                                <label for=""> Picles</label>
                                <input type="checkbox" id="picles" name="salad" value="picles">
                            </div>
                            <div class="checkbox-container">
                                <label for=""> Pepino</label>
                                <input type="checkbox" id="pepino" name="salad" value="pepino">
                            </div>

                        </div>
                        <div id="escolha">
                            <label for="cheese">Queijos: </label>
                            <input type="radio" name="cheese" id="cheese"> Mussarela
                            <input type="radio" name="cheese" id="cheese"> Cheddar
                            <input type="radio" name="cheese" id="cheese"> Cheese Cake
                        </div>
                        <div class="infoPedido">
                            <label for="infoPedido">informações Gerais do Pedido: </label>
                            <br>
                            <textarea name="infoPedido" id="infoPedido" method="post" placeholder="Ex: Carne Mal Passada..." cols="30" rows="10"></textarea>
                        </div>
                        <button class="botao_padrao" onsubmit="">Enviar </button>
                    </div>
                </form>
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