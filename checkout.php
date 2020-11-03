<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Checkout Mirror Fashion</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/bootstrap-flatly.css">
    </head>
    <body>
        <div class="navbar navebar-default">
            <div class="navbar-header">
                
                <a class="navbar-brand" href="index.php">Mirror Fashion</a>
            </div>

            <ul class="nav navbar-nav">
                <li class="active"><a href="sobre.php">Sobre</a></li>
                <li><a href="#">Ajuda</a></li>
                <li><a href="#">Perguntas Frequentes</a></li>
                <li><a href="#">Entre em Contato</a></li>
            </ul>
            </div>

        <div class=jumbotron>
            <div class="container">
        <h1>Ótima Escolha!</h1>
        <p>Obrigado por comprar na Mirror Fashion!
            preencha seus dados para efetivar a compra.</p>
            </div><!--FIM DIV CONTAINER-->
        </div><!--FIM JUMBOTRON-->

        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-lg-3">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h2 class="panel-title">Sua Compra</h2>
            </div><!--FIM PANEL HEADING-->
                </div>
            
            <div class="panel-body">
        </div>

            <img src="img/produtos/foto2-<?= $_POST['cor'] ?>.png" class="img-thumbmail img-responsive">
            <dl>
                <dt>Produto</dt>
                <dd><?= $_POST['nome'] ?></dd>

                <dt>Preço</dt>
                <dd id="preco">R$ <?= $_POST['preco'] ?></dd>

                <output for="preco" id="total" class="form-control">
                    <?= $POST ['preco'] ?>
                </output>

                <dt>cor</dt>
                <dd><?= $_POST['cor'] ?></dd>

                <dt>Tamanho</dt>
                <dd><?= $_POST['tamanho'] ?></dd>
            </dl>
            <div class="form-group">
                <label for="qt">Quantidade</label>
                <input id="qt" class="form-control" type="number" min="0" max="99" value="1">
            </div>
            
            <div class="form-group">
                <label for="total">Total</label>
                <output id="total" class="form-control">
                    <?= $_POST ['preco'] ?>
                </output>
            </div>
            </div><!--FIM PANEL BODY-->

            <form class="col-sm-8 col-lg-9">
                <div class="row">
                <fieldset class="col-md-6">
                    <legend>Dados Pessoais</legend>
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" id="nome" name="nome" autofocus required>
                    </div>

                    <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-group" id="email" name="email" placeholder="email@exemplo.com">
                    </div>

                    <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="cpf" class="form-group" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="sim" name="spam" checked>
                            Quero receber spam da Mirror Fashion.
                        </label>
                    </div>
                </fieldset>

                <fieldset class="col-md-6">
                    <legend>Cartão de Crédito</legend>
                        <div class="form-group">
                            <label for="numero-cartao">Numero -CVV</label>
                            <input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
                        </div>

                        <div class="form-group">
                            <label for="bandeira-cartao">Bandeira</label>
                            <select name="bandeira-cartao" id="bamdeira-cartao" class="form-control">
                                <option value="master">MasterCard</option>
                                <option value="visa">Visa</option>
                                <option value="amex">American Express</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="validade-cartao">Validade</label>
                            <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                        </div>
                </fieldset>

                <button type="submit" class="btn btn-primary">
                    <spam class="glyphicon glyphicon-thumbs-up"></spam>
                Confirmar Pedido
                </button>
            </form>
        </div><!--FIM PANEL-->
        </div><!--FIM CONTAINER PANEL-->

       <script src="js/bootstrap.js"></script>
            
    </body>
</html>