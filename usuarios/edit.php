<?php
session_start();
include_once("../conexao/conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);



$result_usuarios = "UPDATE usuario
SET nome ='$nome', login ='$login',senha = '$senha'
WHERE id = '$id'";

$resultado_usuario = mysqli_query($conn, $result_usuarios);

if(mysqli_affected_rows($conn))
{
    $_SESSION['msg'] = "<p style='color:green'>Usuario alterado com sucesso</p>";
    header("Location: listar.php");
}
else
{
    $_SESSION['msg'] = "<p style='color:red'>Usuario nao foi alterado com sucesso</p>";
    header("Location: listar.php");
}
