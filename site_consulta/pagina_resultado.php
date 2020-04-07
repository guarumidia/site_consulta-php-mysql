<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Resultado da pesquisa</title>

    <link rel="shortcut icon" href="favicon.ico">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <script src="js/script.js"></script>

</head>

<?php
include "conexao.php";
?>
    <body>

    <div class="container-fluid">
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


    <?php
	$verifica = 0;
	$nome_curso = $_POST['nome_curso'];
	$conteudo_curso = $_POST['conteudo_curso'];
	$modalidade = $_POST['modalidade'];


	if($modalidade == 1) {

        if (!empty($_POST['nome_curso']) && !empty($_POST['conteudo_curso'])) {
            $result_cursos = "SELECT * FROM graduacao WHERE (area_id LIKE '%$nome_curso%' or area_id2 LIKE '%$nome_curso%' or area_id3 LIKE '%$nome_curso%') and (deficiencia_id LIKE '%$conteudo_curso%' or deficiencia_id2 LIKE '%$conteudo_curso%' or deficiencia_id3 LIKE '%$conteudo_curso%' or deficiencia_id4 LIKE '%$conteudo_curso%' or deficiencia_id5 LIKE '%$conteudo_curso%' or deficiencia_id6 LIKE '%$conteudo_curso%' or deficiencia_id7 LIKE '%$conteudo_curso%' or deficiencia_id8 LIKE '%$conteudo_curso%')";
            $resultado_cursos = mysqli_query($link, $result_cursos);
            $verifica = mysqli_num_rows($resultado_cursos);
        } elseif (!empty($_POST['nome_curso'])) {
            $result_cursos = "SELECT * FROM graduacao WHERE area_id LIKE '%$nome_curso%'";
            $resultado_cursos = mysqli_query($link, $result_cursos);
            $verifica = mysqli_num_rows($resultado_cursos);
        } elseif (!empty($_POST['conteudo_curso'])) {
            $result_cursos = "SELECT * FROM graduacao WHERE deficiencia_id LIKE '%$conteudo_curso%'";
            $resultado_cursos = mysqli_query($link, $result_cursos);
            $verifica = mysqli_num_rows($resultado_cursos);
        }

    }else if($modalidade==2){
        if (!empty($_POST['nome_curso']) && !empty($_POST['conteudo_curso'])) {
            $result_cursos = "SELECT * FROM extensao WHERE area_id LIKE '%$nome_curso%' and (deficiencia_id LIKE '%$conteudo_curso%' or deficiencia_id2 LIKE '%$conteudo_curso%' or deficiencia_id3 LIKE '%$conteudo_curso%' or deficiencia_id4 LIKE '%$conteudo_curso%' or deficiencia_id5 LIKE '%$conteudo_curso%' or deficiencia_id6 LIKE '%$conteudo_curso%' or deficiencia_id7 LIKE '%$conteudo_curso%' or deficiencia_id8 LIKE '%$conteudo_curso%')";
            $resultado_cursos = mysqli_query($link, $result_cursos);
            $verifica = mysqli_num_rows($resultado_cursos);
        } elseif (!empty($_POST['nome_curso'])) {
            $result_cursos = "SELECT * FROM extensao WHERE area_id LIKE '%$nome_curso%'";
            $resultado_cursos = mysqli_query($link, $result_cursos);
            $verifica = mysqli_num_rows($resultado_cursos);
        } elseif (!empty($_POST['conteudo_curso'])) {
            $result_cursos = "SELECT * FROM extensao WHERE deficiencia_id LIKE '%$conteudo_curso%'";
            $resultado_cursos = mysqli_query($link, $result_cursos);
            $verifica = mysqli_num_rows($resultado_cursos);
        }
    }else {
        if (!empty($_POST['nome_curso']) && !empty($_POST['conteudo_curso'])) {
            $result_cursos = "SELECT * FROM pesquisa WHERE area_id LIKE '%$nome_curso%' and (deficiencia_id LIKE '%$conteudo_curso%' or deficiencia_id2 LIKE '%$conteudo_curso%' or deficiencia_id3 LIKE '%$conteudo_curso%' or deficiencia_id4 LIKE '%$conteudo_curso%' or deficiencia_id5 LIKE '%$conteudo_curso%' or deficiencia_id6 LIKE '%$conteudo_curso%' or deficiencia_id7 LIKE '%$conteudo_curso%' or deficiencia_id8 LIKE '%$conteudo_curso%')";
            $resultado_cursos = mysqli_query($link, $result_cursos);
            $verifica = mysqli_num_rows($resultado_cursos);
        } elseif (!empty($_POST['nome_curso'])) {
            $result_cursos = "SELECT * FROM pesquisa WHERE area_id LIKE '%$nome_curso%'";
            $resultado_cursos = mysqli_query($link, $result_cursos);
            $verifica = mysqli_num_rows($resultado_cursos);
        } elseif (!empty($_POST['conteudo_curso'])) {
            $result_cursos = "SELECT * FROM pesquisa WHERE deficiencia_id LIKE '%$conteudo_curso%'";
            $resultado_cursos = mysqli_query($link, $result_cursos);
            $verifica = mysqli_num_rows($resultado_cursos);
        }
    }

	if($verifica > 0){
		while($rows_cursos = mysqli_fetch_array($resultado_cursos)) {

            if ($modalidade == 1) {
                ?>
                <div class="container-fluid">
                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "CÓDIGO (MEC)"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['codigo_mec']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "CÓDIGO (SIGA)"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['codigo_siga']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "CURSO"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['nome_curso']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                    <span class="form-control" id='titulo_resultado'><?php echo "GRAU"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['grau']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "MODALIDADE"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['modalidade']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "TURNO"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['turno']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "UNIDADE"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['unidade']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "CENTRO"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['centro']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "CAMPUS"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['campus']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "VERSÃO CURRICULAR"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['versao_curricular']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "CÓDIGO DA DISCIPLINA"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['codigo_disciplina']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "NOME DA DISCIPLINA"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['nome_disciplina']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "TIPO"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['tipo']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "PERÍODO"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['periodo']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "CRÉDITOS"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['creditos']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "CARGA HORÁRIA TEÓRICA"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['horaria_teorica']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "CARGA HORÁRIA PRÁTICA"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['horaria_pratica']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "CARGA HORÁRIA EXTENSÃO"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['horaria_extensao']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "EMENTA"; ?></span>
                            </div>
                            <div class="col-8">
                                <textarea class="form-control" id='info_resultado'
                                          rows="5"><?php echo $rows_cursos['ementa']; ?></textarea>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "CONTATO"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['contato']; ?></span>
                            </div>
                        </div>
                    </form>



                    <hr>

                </div>
                <?php
            } elseif ($modalidade == 2) {
                ?>

                <div class="container-fluid">
                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "PROJETO DE PESQUISA"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['projeto_pesquisa']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "DATA DE INÍCIO"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['data_inicio']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "DESCRIÇÃO"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['descricao']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "DOCENTE RESPONSÁVEL"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['docente']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "CONTATO"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['contato']; ?></span>
                            </div>
                        </div>
                    </form>

                    <hr>

                </div>

                <?php
            }else{
                ?>

                <div class="container-fluid">
                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "PROJETO DE PESQUISA"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['projeto_pesquisa']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "DATA DE INÍCIO"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['data_inicio']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "DESCRIÇÃO"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['descricao']; ?></span>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "DOCENTE RESPONSÁVEL"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['docente']; ?></span>
                            </div>
                        </div>
                    </form>



                    <form>
                        <div class="row">
                            <div class="col-4">
                                <span class="form-control" id='titulo_resultado'><?php echo "CONTATO"; ?></span>
                            </div>
                            <div class="col-8">
                                <span class="form-control"
                                      id='info_resultado'><?php echo $rows_cursos['contato']; ?></span>
                            </div>
                        </div>
                    </form>



                    <hr>

                </div>

                <?php
            }
        }
	}else{
		echo "Nenhum curso encontrado na pesquisa";
	}


?>

                <form name="voltar" method="post" action="pesquisar.php">
                    <input type="submit" name="voltar" value="VOLTAR" id="btn-voltar">
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
