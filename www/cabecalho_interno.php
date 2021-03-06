<!DOCTYPE html>
<html lang="br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-language" content="pt-br">
        <meta name="author" content="Danilo Sambugaro e Rafael Soratto">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title>GameOver - Sistema de Gerenciamento</title>
        <script src = "../lib/Jquery/jquery-3.2.1.min.js"></script>
        <link rel="stylesheet" href="../lib/bootstrap-3.3.7/css/bootstrap.min.css">
        <script src = "../lib/bootstrap-3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../style.css">
        <script src="../lib/jQuery-ui/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="../lib/jQuery-ui/jquery-ui.theme.min.css">
        <link rel="stylesheet" href="../lib/jQuery-ui/jquery-ui.min.css">
    </head>
    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../index.php"><span id="game-home">Game</span><span id="over-home">Over</span></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../pessoa.php">Pessoas</a></li>
                    <li><a href="../cliente.php">Clientes</a></li>
                    <li class="dropdown">
                        <a href="../pedido.php" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Pedidos<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../metodo.php">Métodos de Pagamento</a></li>
                        </ul>
                    </li>
                    <li><a href="../compra.php">Compras</a></li>
                    <li><a href="../funcionario.php">Funcionarios</a></li>
                    <li><a href="../supervisor.php">Supervisores</a></li>
                    <li class="dropdown">
                        <a href="../jogo.php" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Jogos<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../plataforma.php">Plataformas</a></li>
                            <li><a href="../genero.php">Gêneros</a></li>
                        </ul>
                    </li>
                    <li><a href="../empresa.php">Empresas</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mais<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../usuario.php">Usuários</a></li>
                            <li><a href="../estado.php">Estados</a></li>
                            <li><a href="../cidade.php">Cidades</a></li>
                            <li><a href="../relatorio.php">Relatórios</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <script>
            $('#game-home').mouseover(
                function (){
                    $('#over-home').css('color', '#337ab7');
                    $('#game-home').css('color', '#ffffff');
                }
            );
            $('#game-home').mouseout(
                function (){
                    $('#over-home').css('color', '#9d9d9d');
                    $('#game-home').css('color', '#9d9d9d');
                }
            );
            $('#over-home').mouseover(
                function (){
                    $('#over-home').css('color', '#337ab7');
                    $('#game-home').css('color', '#ffffff');
                }
            );
            $('#over-home').mouseout(
                function (){
                    $('#over-home').css('color', '#9d9d9d');
                    $('#game-home').css('color', '#9d9d9d');
                }
            );
        </script>
    </header>
    <body>
        <main>
