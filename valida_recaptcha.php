<?php	
    session_start();

    if(isset($_POST['g-recaptcha-response']))
    {
        $captcha_data = $_POST['g-recaptcha-response'];
    }

    if(!$captcha_data){
	header("Location: recaptcha.php");
        exit;
    }

    $resposta = file_get_contents(
        "https://www.google.com/recaptcha/api/siteverify?secrete=6Ld7P9cUAAAAAKwQ8Zx0ozD5jgJEK76lotawut6O&response".
        $captcha_data);
        if($resposta.sucess)
        {
	    $_SESSION['tentativas'] = 0;
            header("Location: index.php");
	}
		
    
?>
