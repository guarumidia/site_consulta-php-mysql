<?php
error_reporting(E_ALL);
session_start();
include ("conexao.php");

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    echo "<script>location.href='index.php';</script>";
    exit();
}

$usuario = mysqli_real_escape_string($link, $_POST['usuario']);
$senha = mysqli_real_escape_string($link, $_POST['senha']);

$query = "SELECT * FROM usuario WHERE usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($link, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    echo "<script>location.href='painel.php';</script>";
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    echo "<script>location.href='index.php';</script>";
}

?>

