<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Lobster+Two:ital,wght@1,700&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <title>Cardápio</title>
</head>

<body>
    <header>
        <a href="index.html" id="sair">Sair</a>
        <br>
        <img src="img/logob.png" alt="" class="head">
    </header>
    <!--Categorias de opções de comida -->
    <h1>Cardápio</h1>
    <h2>Lanches:</h2>
    <div id="lanches">
        <div>
            <img class="lanches_img" src="img/cachorro_quente.jpg" alt="Cachorro quente">
            <h3>Cachorro quente</h3>
        </div>
        <div>
            <img class="lanches_img" src="img/coxinha.jpg" alt="Coxinha">
            <h3>Coxinha</h3>
        </div>
        <div>
            <img class="lanches_img" src="img/pastel.jpeg" alt="Pastel">
            <h3>Pastel</h3>
        </div>
        <div>
            <img class="lanches_img" src="img/pizza.jpg" alt="Pizza">
            <h3>Pizza</h3>
        </div>
        <div>
            <img class="lanches_img" src="img/hamburguer.jpg" alt="Hambúrguer">
            <h3>Hambúrguer</h3>
        </div>
        <div>
            <img class="lanches_img" src="img/lasanha.jpg" alt="Lasanha">
            <h3>Lasanha</h3>
        </div>
    </div><br>
    <h2>Jantar:</h2>
    <div id="jantar">
        <div>
            <img class="lanches_img" src="img/feijoada.jpg" alt="Feijoada">
            <h3>Feijoada</h3>
        </div>
        <div>
            <img class="lanches_img" src="img/macarronada.jpg" alt="Macarronada">
            <h3>Macarronada</h3>
        </div>
        <div>
            <img class="lanches_img" src="img/Strogonoff.png" alt="Strogonoff">
            <h3>Strogonoff</h3>
        </div>
    </div><br>
    <h2>Sobremesas:</h2>
    <div id="sobremesas">
        <div>
            <img src="img/pudim.jpeg" alt="Pudim" class="lanches_img">
            <h3>Pudim</h3>
        </div>
        <div>
            <img src="img/bolo_pote.jpeg" alt="Bolo de Pote" class="lanches_img">
            <h3>Bolo de Pote</h3>
        </div>
        <div>
            <img src="img/brigadeiro.jpeg" alt="Brigadeiro" class="lanches_img">
            <h3>Brigadeiro</h3>
        </div>
        <div>
            <img src="img/trufas.jpeg" alt="Trufas" class="lanches_img">
            <h3>Trufas</h3>
        </div>
        <div>
            <img src="img/sorvete.jpeg" alt="Sorvete" class="lanches_img">
            <h3>Sorvete</h3>
        </div>
    </div><br>
    <h2>Bebidas:</h2>
    <div id="bebidas">
        <div>
            <img class="lanches_img" src="img/agua.jpg" alt="Água">
            <h3>Água</h3>
        </div>
        <div>
            <img class="lanches_img" src="img/coca.jpeg" alt="Coca-Cola">
            <h3>Coca-Cola(500mL)</h3>
        </div>
        <div>
            <img class="lanches_img" src="img/sucos.jpg" alt="Sucos">
            <h3>Sucos(250ml)</h3>
        </div>
    </div>    
    <!--Tabela para consultar preços-->
    <div ><br>
        <table id="p_lanches">
            <tr id="cabecalho">
                <td>Comida</td>
                <td>Preço</td>
                <td>Sabor</td>
            </tr>
            <tr class="categoria">
                <td colspan="5">Lanches</td>
            </tr>
            <tr>
                <td>Cachorro quente</td>
                <td>R$8,00</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Coxinha</td>
                <td>R$4,00</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Pastel</td>
                <td>R$4,00</td>
                <td>Frango, misto, queijo e carne</td>
            </tr>
            <tr>
                <td>Pizza</td>
                <td>R$6,00(Fatia) e R$40,00(Inteira)</td>
                <td>Calabresa, portuguesa, marguerita e frango com catupiry</td>
            </tr>
            <tr>
                <td>Hambúrguer</td>
                <td>R$5,00</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Lasanha</td>
                <td>R$20,00</td>
                <td>-</td>
            </tr>
            <tr class="categoria">
                <td colspan="5">Jantar</td>
            </tr>
            <tr>
                <td>Feijoada</td>
                <td>R$20,00</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Macarronada</td>
                <td>R$16,00</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Strogonoff</td>
                <td>R$28,00</td>
                <td>-</td>
            </tr>
            <tr class="categoria">
                <td colspan="5">Sobremesas</td>
            </tr>
            <tr>
                <td>Pudim</td>
                <td>R$30,00</td>
                <td>_</td>
            </tr>
            <tr>
                <td>Bolo de Pote</td>
                <td>R$8,00</td>
                <td>Morango, chocolate, ninho e coco</td>
            </tr>
            <tr>
                <td>Brigadeiro</td>
                <td>R$5,00(6 unidades)</td>
                <td>Chocolate, chocolate branco e beijinho</td>
            </tr>
            <tr>
                <td>Trufas</td>
                <td>R$3,00</td>
                <td>Morango, brigadeiro, maracujá, ninho, leite condensado e beijinho</td>
            </tr>
            <tr>
                <td>Sorvete</td>
                <td>R$10,00(500g)</td>
                <td>Morango, chocolate, abacaxi ao vinho, açaí com banana e arco-íris</td>
            </tr>
            <tr class="categoria">
                <td colspan="5">Bebidas</td>
            </tr>
            <tr>
                <td>Água</td>
                <td>R$2,00</td>
                <td>Com gás e sem gás</td>
            </tr>
            <tr>
                <td>Coca</td>
                <td>R$5,00</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Sucos</td>
                <td>R$5,50</td>
                <td>Maracujá, laranja, acelora, goiaba e limonada</td>
            </tr>
        </table>
    </div>
    <button id="btn">Ver preços</button>
    <footer>
        <div id="footer">
            <div class="footer_img">
                <img src="img/instagram.png" alt="Logo Instagram">
                <p>@_tasty_and_fast</p>
            </div>
            <div class="footer_img">
                <img src="img/whatsapp.png" alt="Logo WhatsApp">
                <p>(88) 98137-3886</p>
            </div>
            <div class="footer_img">
                <img src="img/gmail.png" alt="Logo Gmail">
                <p>tastyandfast162@gmail.com</p>
            </div>
        </div><br><br>
        <p>Entregas em Massapê, Aiuá, Mirim, Padre Linhares e proximidades!</p>
        <a href="https://goo.gl/maps/oUGWLXr3ZFArhTRn6" target="_blank">Padre Linhares, Massapê-CE</a>
    </footer>
    <script src="js/index.js"></script>
</body>

</html>