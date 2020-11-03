<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>A Mirrror Fshion</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/estilos.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
    </head>
<body>
   <?php include("cabecalho.php"); ?>
    <div class="container destaque">
        <section class="busca">
            <h2>Busca</h2>

            <form>
                <input type="search">
                <input type="image" src="img/busca.png">
            </form>
        </section> <!--Fim Busca-->

        <section class="menu-departamentos">
            <h2>Departamentos</h2>

            <nav>
                <ul>
                    <li><a href="#">Blusas e Camisas</a>
                    <ul>
                        <li><a href="#">Manga Curta</a></li>
                        <li><a href="#">Manga Cumprida</a></li>
                        <li><a href="#">Camisa Social</a></li>
                        <li><a href="#">Camisa Casual</a></li>                       
                    </ul></li>
                    <li><a href="#">Calças</a></li>
                    <li><a href="#">Saias</a></li>
                    <li><a href="#">Vestidos</a></li>
                    <li><a href="#">Sapatos</a></li>
                    <li><a href="#">Bolsas e Carteiras</a></li>
                    <li><a href="#">Acessórios</a></li>
                </ul>
            </nav>
        </section> <!--Fim menu-departamentos-->

        <img src="img/destaque-home.png" alt="Promoção: Big City Night">
    </div> <!--Fim .container .destaque-->

    <div class="container paineis">
        <!--Os paineis de novidades e mais vendidos estarao aqui-->

        <section class="painel novidades">
            <h2>NOVIDADES</h2>

            <ol>
                <!--Primeiro produto-->
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura1.png">
                            <figcaption>Cardigan por R$ 129,90</figcaption>
                        </figure>
                    </a>
                </li>

                <li>
                    <a href="produto.php">
                        <figure>
                            <img src="img/produtos/miniatura2.png">
                            <figcaption>Camisa por R$ 20,90</figcaption>
                        </figure>
                    </a>
                </li>

                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura3.png">
                            <figcaption>Casaco por R$ 35,90</figcaption>
                        </figure>
                    </a>
                </li>

                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura4.png">
                            <figcaption>Jaqueta por R$ 150,90</figcaption>
                        </figure>
                    </a>
                </li>

                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura5.png">
                            <figcaption>Regata por R$ 16,90</figcaption>
                        </figure>
                    </a>
                </li>

                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura6.png">
                            <figcaption>BabyDon por 18,90</figcaption>
                        </figure>
                    </a>
                </li>
            </ol>
        </section>

        <section class="painel mais-vendidos">
            <h2>MAIS VENDIDOS</h2>

            <ol>
                <!--Primeiro produto da lista-->
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura7.png">
                            <figcaption>Camisola por R$ 15,90</figcaption>
                        </figure>
                    </a>
                </li>

                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura8.png">
                            <figcaption>Blusa por R$ 15,90</figcaption>
                        </figure>
                    </a>
                </li>

                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura9.png">
                            <figcaption>Camisa por R$ 25,90</figcaption>
                        </figure>
                    </a>
                </li>

                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura10.png">
                            <figcaption>Basica por R$ 35,90</figcaption>
                        </figure>
                    </a>
                </li>

                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura11.png">
                            <figcaption>Short por R$ 12,90</figcaption>
                        </figure>
                    </a>
                </li>

                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura12.png">
                            <figcaption>Camisa por 16,90</figcaption>
                        </figure>
                    </a>
                </li>
            </ol>
        </section>
    </div>

   <?php include("rodape.php"); ?>
</body>
</html>