<?php
session_start();
include_once("../conexao/conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);



$result_usuarios = "INSERT INTO 
usuario (nome, login, senha)
VALUES ('$nome', '$login', '$senha')";

$resultado_usuario = mysqli_query($conn, $result_usuarios);

if(mysqli_insert_id($conn))
{
    $_SESSION['msg'] = "<p style='color:green'>Usuario cadastrado com sucesso</p>";
    header("Location: listar.php");
}
else
{
    $_SESSION['msg'] = "<p style='color:red'>Usuario nao foi cadastrado com sucesso</p>";
    header("Location: listar.php");
}
