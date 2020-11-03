
    
    <?php
     $cabecalho_title="Produto da Mirror Fashion";
    include("cabecalho.php"); ?>
    <div class="container">
        <div class="produto">
             <h1>Fuzzy Cartigan</h1>
        
                <p>por apenas R$ 20,90</p>

            <form action="checkout.php" method="POST">
                <fieldset class="cores">
                     <fieldset class="tamanho">
                    <legend>Escolha o tamanho:</legend>

                    <input type="hidden" name="nome" value="Fuzzy Cardigan">
                    <input type="hidden" name="preco" value="20,90">

                    <input type="range" min="36" max="46" value="42" step="2" name="tamanho">
                    <output for="tamanho" name="valortamanho">42</output>
                    </fieldset>
                    
                    <legend>Escolha a cor:</legend>
                <input type="radio" name="cor" value="verde" id="verde" checked>
                <label for="verde">
                    <img src="img/produtos/foto2-verde.png" alt="verde">
                </label>

                <input type="radio" name="cor" value="rosa" id="rosa">
                <label for="rosa">
                    <img src="img/produtos/foto2-rosa.png" alt="rosa">
                </label>

                <input type="radio" name="cor" value="azul" id="azul">
                <label for="azul">
                    <img src="img/produtos/foto2-azul.png" alt="azul">
                </label>

            </fieldset>

            <input type="submit" class="comprar" value="Comprar">
        </form>
    </div>

    <div class="detalhes">
        <h2>Detalhes do Produto</h2>

        <p>Esse é o melhor casaco de cartigan que você ja viu.
            excelente material italiano com estampa desenhada pelos artezoes da
            comunidade de Krotor, nas ilhas gregas. Compre ja e receba hoje 
            mesmo pela nossa entrega a jato.</p>

            <table>
                <thead>
                    <tr>
                        <th>Caracteristica</th>
                        <th>Detalhe</th>
                    </tr>
            </thead>

            <body>
                <tr>
                    <td>Modelo</td>
                    <td>Cartiga 7845</td>
                </tr>
                <tr>
                    <td>Material</td>
                    <td>Algodao e Poliester</td>
                </tr>
                <tr>
                    <td>Cores</td>
                    <td>Azul, Rosa e Verde</td>
                </tr>
                <tr>
                    <td>Lavagem</td>
                    <td>Lavar a Mâo</td>
                </tr>
                <script src="js/produto.js"></script>
            </body>
            </table>
    </div>


 <?php include("rodape.php"); ?> 

    
