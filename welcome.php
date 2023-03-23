<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8"> 
    <title>Bem vindo</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<link rel="stylesheet" href="style2.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
   <main>
    <h1 class="my-5">Oi, <b style="text-align: center; text-decoration: underline;"><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bem vindo ao nosso site.</h1>
    <p>
        <a href="reset-password.php" class="button_redefina">Redefina sua senha</a>
        <a href="logout.php" class="button_sairconta">Sair da conta</a>
    </p>
    
		<a href="lista_pops.html"  class="link_entrar">Entrar</a>
        
   </main>
</body>
</html>