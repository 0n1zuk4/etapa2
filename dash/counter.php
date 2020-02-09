<?php
session_start();
include_once("../conexao/conexao.php");



$result_cliente = "SELECT * FROM Cliente";
$resultado_cliente = mysqli_query($conn, $result_cliente);
$total_cli =mysqli_num_rows($resultado_cliente);

$result_usuario = "SELECT * FROM Usuario";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$total_usr =mysqli_num_rows($resultado_usuario);
?>