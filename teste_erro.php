<?php
session_start();

$tentativa = $_SESSION['tentativas'];

if($tentativa > 6) 
{
  header("Location: recaptcha.php");
}

?>