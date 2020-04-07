<?php
include("conexao.php");
session_start();

$consulta = "SELECT * FROM grandearea";
$con = $link->query($consulta) or die($link->error);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Buscar cursos</title>

    <link rel="shortcut icon" href="favicon.ico">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <script src="js/script.js"></script>

</head>
<body>
<div class="container-fluid" id="principal">
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
            <h1 id="nome">Pesquisar</h1>
        </div>
    <div class="col-lg-7 col-md-8 col-sm-8 col-12">
    <form name="search_form" method="post" action="pagina_resultado.php" id="formulario">
        <div class="caixa-seletor">
            <select name="modalidade" class="appearance-select" id="id_modalidade">
                <option value="">Modalidade</option>
                <option value="1">Graduação</option>
                <option value="2">Extensão</option>
                <option value="3">Pesquisa</option>
            </select>
        </div>
        <div class="caixa-seletor">
        <select name="grandearea" class="appearance-select" id="id_grandearea">
            <option value="">
                Área de conhecimento
            </option>
            <?php while ($dado = $con->fetch_array()) {

                    $grandearea = $dado["grandearea"];
                    $grandearea_id = $dado["grandearea_id"];
                    echo "<option value='$grandearea_id'>$grandearea</option>";

             } ?>
        </select>
        </div>
        <?php
        $consulta = "SELECT * FROM area";
        $con = $link->query($consulta) or die($link->error);
        ?>
        <div class="caixa-seletor">
            <span class="carregando">Aguarde, carregando...</span>
        <select name="nome_curso" class="appearance-select" id="id_area">
            <option value="">
                Subárea
            </option>

        </select>
        </div>
        <?php
        $consulta = "SELECT * FROM deficiencia";
        $con = $link->query($consulta) or die($link->error);
        ?>
        <div class="caixa-seletor">
        <select name="conteudo_curso" class="appearance-select">
            <option value="">
                Deficiência
            </option>
            <?php while ($dado = $con->fetch_array()) {

                $deficiencia = $dado["deficiencia"];
                $deficiencia_id = $dado["deficiencia_id"];
                echo "<option value='$deficiencia_id'>$deficiencia</option>";

            } ?>
        </select>

        </div>
        <div class="caixa-botao">
            <input type="submit" name="submit" value="BUSCAR" id="button">
        </div>
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

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">
            google.load("jquery", "1.4.2");
        </script>

        <script type="text/javascript">
            $(function(){
                $('#id_grandearea').change(function(){
                    if( $(this).val() ) {
                        $('#id_area').hide();
                        $('.carregando').show();
                        $.getJSON('area_post.php?search=',{id_grandearea: $(this).val(), ajax: 'true'}, function(j){
                            var options = '<option value="">Área de conhecimento</option>';
                            for (var i = 0; i < j.length; i++) {
                                options += '<option value="' + j[i].id + '">' + j[i].area + '</option>';
                            }
                            $('#id_area').html(options).show();
                            $('.carregando').hide();
                        });
                    } else {
                        $('#id_area').html('<option value="">– SubÁrea –</option>');
                    }
                });
            });
        </script>

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
