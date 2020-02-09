<?php
session_start();
include_once("../conexao/conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$site = filter_input(INPUT_POST, 'site', FILTER_SANITIZE_STRING);


$result_clientes = "UPDATE cliente
SET nome ='$nome', endereco ='$endereco', numero = '$numero', bairro = '$bairro', cidade = '$cidade', 
cep = '$cep', uf = '$uf', email = '$email', cpf = '$cpf', telefone = '$telefone', site = '$site'
 WHERE id = '$id'";

$resultado_cliente = mysqli_query($conn, $result_clientes);

if(mysqli_affected_rows($conn))
{
    $_SESSION['msg'] = "<p style='color:green'>Cliente alterado com sucesso</p>";
    header("Location: listar2.php");
}
else
{
    $_SESSION['msg'] = "<p style='color:red'>Cliente nao foi alterado com sucesso</p>";
    header("Location: listar2.php");
}
