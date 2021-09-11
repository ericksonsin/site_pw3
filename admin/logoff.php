<?php session_start();

// destruir todas as variaveis de sessão (usuario clicar em sair)

session_destroy();

header("location:../login.php");


?>