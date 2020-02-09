<?php
session_start();
include_once("../conexao/conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$result_clientes = "DELETE FROM cliente WHERE id = '$id'";

$resultado_cliente = mysqli_query($conn, $result_clientes);

if (mysqli_affected_rows($conn)) {
    $_SESSION['msg'] = "<p style='color:green'>Cliente excluido com sucesso</p>";
    header("Location: listar2.php");
} else {
    $_SESSION['msg'] = "<p style='color:red'>Cliente nao foi excluido com sucesso</p>";
    header("Location: listar2.php");
}