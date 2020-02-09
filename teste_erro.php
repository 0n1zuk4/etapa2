<?php
session_start();

$tentativa = $_SESSION['tentativas'];

if($tentativa > 5) 
{
  header("Location: recaptcha.php");
}

?>
