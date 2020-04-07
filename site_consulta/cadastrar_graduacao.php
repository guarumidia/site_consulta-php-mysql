<?php
session_start();
include "verifica_login.php";
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
    <title>Cadastrar curso de graduação</title>

    <link rel="shortcut icon" href="favicon.ico">

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

            <h1><span id="nome">CADASTRAR </span><span id="projeto">GRADUAÇÃO</span></h1>

<form method="post" action="processar_graduacao.php">
    <label>Área de conhecimento</label>
    <select class="form-control" id="exampleFormControlSelect1" name="grandearea">
        <option>Nenhuma</option>
        <option value="1">CIÊNCIAS BIOLÓGICAS</option>
        <option value="2">CIÊNCIAS DA SAÚDE</option>
        <option value="3">CIÊNCIAS EXATAS E DA TERRA</option>
        <option value="4">CIÊNCIASHUMANAS</option>
        <option value="5">CIÊNCIAS SOCIAIS APLICADAS</option>
        <option value="6">ENGENHARIAS</option>
        <option value="7">LINGUÍSTICA, LETRAS E ARTES</option>
        <option value="8">OUTROS</option>

    </select>
    <br>

    <label>Área de conhecimento 2</label>
    <select class="form-control" id="exampleFormControlSelect1" name="grandearea2">
        <option>Nenhuma</option>
        <option value="1">CIÊNCIAS BIOLÓGICAS</option>
        <option value="2">CIÊNCIAS DA SAÚDE</option>
        <option value="3">CIÊNCIAS EXATAS E DA TERRA</option>
        <option value="4">CIÊNCIASHUMANAS</option>
        <option value="5">CIÊNCIAS SOCIAIS APLICADAS</option>
        <option value="6">ENGENHARIAS</option>
        <option value="7">LINGUÍSTICA, LETRAS E ARTES</option>
        <option value="8">OUTROS</option>

    </select>
    <br>

    <label>Área de conhecimento 3</label>
    <select class="form-control" id="exampleFormControlSelect1" name="grandearea3">
        <option>Nenhuma</option>
        <option value="1">CIÊNCIAS BIOLÓGICAS</option>
        <option value="2">CIÊNCIAS DA SAÚDE</option>
        <option value="3">CIÊNCIAS EXATAS E DA TERRA</option>
        <option value="4">CIÊNCIASHUMANAS</option>
        <option value="5">CIÊNCIAS SOCIAIS APLICADAS</option>
        <option value="6">ENGENHARIAS</option>
        <option value="7">LINGUÍSTICA, LETRAS E ARTES</option>
        <option value="8">OUTROS</option>

    </select>
    <br>

    <label>Subárea</label>
    <select class="form-control" id="exampleFormControlSelect1" name="area">
        <option>Nenhuma</option>
        <option value="1">ARQUITETURA E URBANISMO</option>
        <option value="2">ARTES</option>
        <option value="3">CIÊNCIAS DA INFORMAÇÃO</option>
        <option value="4">COMUNICAÇÃO</option>
        <option value="5">DIREITO</option>
        <option value="6">EDUCAÇÃO FÍSICA</option>
        <option value="7">ENGENHARIA CIVIL</option>
        <option value="8">ENGENHARIA SANITÁRIA</option>
        <option value="9">LETRAS</option>
        <option value="10">MEDICINA</option>
        <option value="11">NUTRIÇÃO</option>
        <option value="12">PROBABILIDADE E ESTATÍSTICA</option>
        <option value="13">PSICOLOGIA</option>
        <option value="14">SOCIOLOGIA</option>
        <option value="15">ADMINISTRAÇÃO</option>
        <option value="16">BIOLOGIA GERAL</option>
        <option value="17">CIÊNCIAS DA COMPUTAÇÃO</option>
        <option value="18">CIÊNCIA POLÍTICA</option>
        <option value="19">CIÊNCIAS ATUARIAIS</option>
        <option value="20">EDUCAÇÃO</option>
        <option value="21">ENFERMAGEM</option>
        <option value="22">ENGENHARIA DE PRODUÇÃO</option>
        <option value="23">ENGENHARIA MECÂNICA</option>
        <option value="24">FILOSOFIA</option>
        <option value="25">FISIOTERAPIA E TERAPIA OCUPACIONAL</option>
        <option value="26">FONOAUDIOLOGIA</option>
        <option value="27">GENÉTICA</option>
        <option value="28">MORFOLOGIA</option>
        <option value="29">ODONTOLOGIA</option>
        <option value="30">QUÍMICA</option>
        <option value="31">RELAÇÕES INTERNACIONAIS</option>

    </select>
    <br>

    <label>Subárea 2</label>
    <select class="form-control" id="exampleFormControlSelect1" name="area2">
        <option>Nenhuma</option>
        <option value="1">ARQUITETURA E URBANISMO</option>
        <option value="2">ARTES</option>
        <option value="3">CIÊNCIAS DA INFORMAÇÃO</option>
        <option value="4">COMUNICAÇÃO</option>
        <option value="5">DIREITO</option>
        <option value="6">EDUCAÇÃO FÍSICA</option>
        <option value="7">ENGENHARIA CIVIL</option>
        <option value="8">ENGENHARIA SANITÁRIA</option>
        <option value="9">LETRAS</option>
        <option value="10">MEDICINA</option>
        <option value="11">NUTRIÇÃO</option>
        <option value="12">PROBABILIDADE E ESTATÍSTICA</option>
        <option value="13">PSICOLOGIA</option>
        <option value="14">SOCIOLOGIA</option>
        <option value="15">ADMINISTRAÇÃO</option>
        <option value="16">BIOLOGIA GERAL</option>
        <option value="17">CIÊNCIAS DA COMPUTAÇÃO</option>
        <option value="18">CIÊNCIA POLÍTICA</option>
        <option value="19">CIÊNCIAS ATUARIAIS</option>
        <option value="20">EDUCAÇÃO</option>
        <option value="21">ENFERMAGEM</option>
        <option value="22">ENGENHARIA DE PRODUÇÃO</option>
        <option value="23">ENGENHARIA MECÂNICA</option>
        <option value="24">FILOSOFIA</option>
        <option value="25">FISIOTERAPIA E TERAPIA OCUPACIONAL</option>
        <option value="26">FONOAUDIOLOGIA</option>
        <option value="27">GENÉTICA</option>
        <option value="28">MORFOLOGIA</option>
        <option value="29">ODONTOLOGIA</option>
        <option value="30">QUÍMICA</option>
        <option value="31">RELAÇÕES INTERNACIONAIS</option>

    </select>
    <br>

    <label>Subárea 3</label>
    <select class="form-control" id="exampleFormControlSelect1" name="area3">
        <option>Nenhuma</option>
        <option value="1">ARQUITETURA E URBANISMO</option>
        <option value="2">ARTES</option>
        <option value="3">CIÊNCIAS DA INFORMAÇÃO</option>
        <option value="4">COMUNICAÇÃO</option>
        <option value="5">DIREITO</option>
        <option value="6">EDUCAÇÃO FÍSICA</option>
        <option value="7">ENGENHARIA CIVIL</option>
        <option value="8">ENGENHARIA SANITÁRIA</option>
        <option value="9">LETRAS</option>
        <option value="10">MEDICINA</option>
        <option value="11">NUTRIÇÃO</option>
        <option value="12">PROBABILIDADE E ESTATÍSTICA</option>
        <option value="13">PSICOLOGIA</option>
        <option value="14">SOCIOLOGIA</option>
        <option value="15">ADMINISTRAÇÃO</option>
        <option value="16">BIOLOGIA GERAL</option>
        <option value="17">CIÊNCIAS DA COMPUTAÇÃO</option>
        <option value="18">CIÊNCIA POLÍTICA</option>
        <option value="19">CIÊNCIAS ATUARIAIS</option>
        <option value="20">EDUCAÇÃO</option>
        <option value="21">ENFERMAGEM</option>
        <option value="22">ENGENHARIA DE PRODUÇÃO</option>
        <option value="23">ENGENHARIA MECÂNICA</option>
        <option value="24">FILOSOFIA</option>
        <option value="25">FISIOTERAPIA E TERAPIA OCUPACIONAL</option>
        <option value="26">FONOAUDIOLOGIA</option>
        <option value="27">GENÉTICA</option>
        <option value="28">MORFOLOGIA</option>
        <option value="29">ODONTOLOGIA</option>
        <option value="30">QUÍMICA</option>
        <option value="31">RELAÇÕES INTERNACIONAIS</option>

    </select>
    <br>

    <label>Deficiência</label>
    <select class="form-control" id="exampleFormControlSelect1" name="deficiencia">
        <option>Nenhuma</option>
        <option value="1">Auditiva/Mudez</option>
        <option value="2">Decorrentes de Senescência ou Senilidade</option>
        <option value="3">Física</option>
        <option value="4">Intelectual</option>
        <option value="5">Mental/Psicossocial</option>
        <option value="7">Visual</option>
        <option value="6">Todos</option>
    </select>
    <br>

    <label>Deficiência 2</label>
    <select class="form-control" id="exampleFormControlSelect1" name="deficiencia2">
        <option>Nenhuma</option>
        <option value="1">Auditiva/Mudez</option>
        <option value="2">Decorrentes de Senescência ou Senilidade</option>
        <option value="3">Física</option>
        <option value="4">Intelectual</option>
        <option value="5">Mental/Psicossocial</option>
        <option value="7">Visual</option>
        <option value="6">Todos</option>
    </select>
    <br>

    <label>Deficiência 3</label>
    <select class="form-control" id="exampleFormControlSelect1" name="deficiencia3">
        <option>Nenhuma</option>
        <option value="1">Auditiva/Mudez</option>
        <option value="2">Decorrentes de Senescência ou Senilidade</option>
        <option value="3">Física</option>
        <option value="4">Intelectual</option>
        <option value="5">Mental/Psicossocial</option>
        <option value="7">Visual</option>
        <option value="6">Todos</option>
    </select>
    <br>

    <label>Deficiência 4</label>
    <select class="form-control" id="exampleFormControlSelect1" name="deficiencia4">
        <option>Nenhuma</option>
        <option value="1">Auditiva/Mudez</option>
        <option value="2">Decorrentes de Senescência ou Senilidade</option>
        <option value="3">Física</option>
        <option value="4">Intelectual</option>
        <option value="5">Mental/Psicossocial</option>
        <option value="7">Visual</option>
        <option value="6">Todos</option>
    </select>
    <br>

    <label>Deficiência 5</label>
    <select class="form-control" id="exampleFormControlSelect1" name="deficiencia5">
        <option>Nenhuma</option>
        <option value="1">Auditiva/Mudez</option>
        <option value="2">Decorrentes de Senescência ou Senilidade</option>
        <option value="3">Física</option>
        <option value="4">Intelectual</option>
        <option value="5">Mental/Psicossocial</option>
        <option value="7">Visual</option>
        <option value="6">Todos</option>
    </select>
    <br>

    <label>Deficiência 6</label>
    <select class="form-control" id="exampleFormControlSelect1" name="deficiencia6">
        <option>Nenhuma</option>
        <option value="1">Auditiva/Mudez</option>
        <option value="2">Decorrentes de Senescência ou Senilidade</option>
        <option value="3">Física</option>
        <option value="4">Intelectual</option>
        <option value="5">Mental/Psicossocial</option>
        <option value="7">Visual</option>
        <option value="6">Todos</option>
    </select>
    <br>

    <label>Deficiência 7</label>
    <select class="form-control" id="exampleFormControlSelect1" name="deficiencia7">
        <option>Nenhuma</option>
        <option value="1">Auditiva/Mudez</option>
        <option value="2">Decorrentes de Senescência ou Senilidade</option>
        <option value="3">Física</option>
        <option value="4">Intelectual</option>
        <option value="5">Mental/Psicossocial</option>
        <option value="7">Visual</option>
        <option value="6">Todos</option>
    </select>
    <br>

    <label>Deficiência 8</label>
    <select class="form-control" id="exampleFormControlSelect1" name="deficiencia8">
        <option>Nenhuma</option>
        <option value="1">Auditiva/Mudez</option>
        <option value="2">Decorrentes de Senescência ou Senilidade</option>
        <option value="3">Física</option>
        <option value="4">Intelectual</option>
        <option value="5">Mental/Psicossocial</option>
        <option value="7">Visual</option>
        <option value="6">Todos</option>
    </select>
    <br>

    <input type="text" class="form-control" name="codigo_mec" placeholder="Digite o Código MEC...">
    <br>

    <input type="text" class="form-control" name="codigo_siga" placeholder="Digite o Código SIGA...">
    <br>

    <input type="text" class="form-control" name="nome_curso" placeholder="Digite o nome do curso...">
    <br>

    <input type="text" class="form-control" name="grau" placeholder="Digite o Grau do curso...">
    <br>

    <input type="text" class="form-control" name="modalidade" placeholder="Digite a Modalidade do curso...">
    <br>

    <input type="text" class="form-control" name="turno" placeholder="Digite o Turno do curso...">
    <br>

    <input type="text" class="form-control" name="unidade" placeholder="Digite a Unidade do curso...">
    <br>

    <input type="text" class="form-control" name="centro" placeholder="Digite o Centro do curso...">
    <br>

    <input type="text" class="form-control" name="campus" placeholder="Digite o Campus do curso...">
    <br>

    <input type="text" class="form-control" name="versao_curricular" placeholder="Digite a Versão Curricular do curso...">
    <br>

    <input type="text" class="form-control" name="codigo_disciplina" placeholder="Digite o Código da disciplina...">
    <br>

    <input type="text" class="form-control" name="nome_disciplina" placeholder="Digite o Nome da disciplina...">
    <br>

    <input type="text" class="form-control" name="tipo" placeholder="Digite o tipo de disciplina...">
    <br>

    <input type="text" class="form-control" name="periodo" placeholder="Digite o Período do curso...">
    <br>

    <input type="text" class="form-control" name="creditos" placeholder="Digite os créditos do curso...">
    <br>

    <input type="text" class="form-control" name="horaria_teorica" placeholder="Digite a Carga horária Teórica do curso...">
    <br>

    <input type="text" class="form-control" name="horaria_pratica" placeholder="Digite a Carga horária Prática do curso...">
    <br>

    <input type="text" class="form-control" name="horaria_extensao" placeholder="Digite a Carga horária de Extensão do curso...">
    <br>

    <textarea type="text" class="form-control" name="ementa" rows="3" placeholder="Digite a ementa do curso..."></textarea>
    <br>

    <input type="text" class="form-control" name="contato" placeholder="Digite Contato...">
    <br>

    <input type="submit" id="btn-conheca" value="Cadastrar">
    <br>
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