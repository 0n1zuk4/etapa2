<?php

    session_start();
    include_once("conexao/conexao.php");
  
    
    
    $login = mysqli_real_escape_string($conn, $_POST['login']);
    $senha= mysqli_real_escape_string($conn, $_POST['senha']);
    $_SESSION['tentativas'] == 0;
   
      

    $sql = "SELECT  id, login FROM usuario WHERE login = '$login' AND senha = '$senha'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
   
       


    if($row == 1){
        $_SESSION['login'] = $login;
        header('Location: dash/dash.php');
        
    }
    else
    {
        $_SESSION['tentativas'] ++;
        header('Location: index.php');
        exit();
        
        
        
    }

    

    

