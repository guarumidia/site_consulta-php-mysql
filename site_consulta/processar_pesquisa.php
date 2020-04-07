<?php
include "conexao.php";
session_start();
?>

<?php

$grandearea = $_POST['grandearea'];
$area = $_POST['area'];
$deficiencia = $_POST['deficiencia'];
$deficiencia2 = $_POST['deficiencia2'];
$deficiencia3 = $_POST['deficiencia3'];
$deficiencia4 = $_POST['deficiencia4'];
$deficiencia5 = $_POST['deficiencia5'];
$deficiencia6 = $_POST['deficiencia6'];
$deficiencia7 = $_POST['deficiencia7'];
$deficiencia8 = $_POST['deficiencia8'];
$projeto_pesquisa = $_POST['projeto_pesquisa'];
$data_inicio = $_POST['data_inicio'];
$descricao = $_POST['descricao'];
$docente = $_POST['docente'];
$contato = $_POST['contato'];


$sql = "INSERT INTO pesquisa VALUES ";
$sql .= "(DEFAULT, '$grandearea', '$area', '$deficiencia', '$deficiencia2', '$deficiencia3', '$deficiencia4', '$deficiencia5', '$deficiencia6', '$deficiencia7', '$deficiencia8', '$projeto_pesquisa', '$data_inicio', '$descricao', '$docente','$contato')";
mysqli_query($link, $sql) or die("Erro ao tentar cadastrar, tente novamente mais tarde.");
mysqli_close($link);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Site Consulta</title>

    <script src="js/script.js"></script>

</head>
<body>
<div class="container-fluid">
    <?php
    if(isset($_SESSION['nao_autenticado'])):
        ?>
        <div class="alert alert-danger" role="alert">
            Erro! usuário ou senha inválidos!!!
        </div>
    <?php
    endif;
    unset($_SESSION['nao_autenticado']);
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="index.php"><span id="nome">Nome</span><br><span id="projeto">Projeto</span></a>
        <?php
        if(isset($_SESSION['usuario'])):
            ?>
            <span>Olá, <?php echo $_SESSION['usuario'] ?>!</span>
            <span><a href="logout.php">&nbsp;sair</a></span>
        <?php
        endif;
        ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li>
                    <button class="btn btn-success" name="increase-font"  id="increase-font" title="Aumentar fonte">A +</button>
                </li>
                <li>
                    <button class="btn btn-info" name="decrease-font" id="decrease-font" title="Diminuir fonte">A -</button>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">O Projeto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pesquisar.php">Pesquisar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Fale conosco</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="painel.php">Área do desenvolvedor</a>
                </li>
            </ul>

            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">

                <li class="dropdown order-1">

                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Desenvolvedor <span class="caret"></span></button>

                    <ul class="dropdown-menu dropdown-menu-right mt-2">
                        <li class="px-3 py-2">
                            <form class="form" role="form" action="login.php" method="post">
                                <div class="form-group">
                                    <input id="emailInput" placeholder="usuário" name="usuario" class="form-control form-control-sm" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <input id="passwordInput" placeholder="senha" name="senha" class="form-control form-control-sm" type="password" required="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>



                                <div class="form-group text-center">
                                    <small><a href="#" data-toggle="modal" data-target="#modalPassword">Esqueceu a senha?</a></small>
                                </div>
                            </form>
                        </li>
                    </ul>
        </div>
    </nav>

    <div class="row mt-4">

        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-4 col-9">
            <img src="img/logo.png" class="img-fluid m-md-5" id="logo">
        </div>
        <div class="col-lg-7 col-md-8 col-sm-8 col-12" id="capa-dir">
            <h1><span id="nome">CADASTRO </span><span id="projeto">GRADUAÇÃO</span></h1>
            <div class="alert alert-success" role="alert">
                <?php
                echo "Pesquisa cadastrada com sucesso!";
                ?>
            </div>
            <form  name="voltar" method="post" action="painel.php">
                <input type="submit" name="conheca" value="VOLTAR" id="btn-conheca">
            </form>
        </div>
    </div>
</div>

<footer id="myFooter">
    <div class="container">
        <p class="footer-copyright">© 2019 Copyright - Desenvolvido por Daniel Silva</p>
    </div>
    <div class="footer-social">
        <a href="#" class="social-icons"><i class="fa fa-facebook"></i></a>
        <a href="#" class="social-icons"><i class="fa fa-instagram"></i></a>
        <a href="#" class="social-icons"><i class="fa fa-youtube"></i></a>
        <a href="#" class="social-icons"><i class="fa fa-twitter"></i></a>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(".close").click(function(){
        $.each($('modal-header'), function () {
            this.pause();
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $('[data-toggle="popover"]').popover()
    })

    }
</script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>