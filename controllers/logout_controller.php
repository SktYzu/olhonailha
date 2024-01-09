<?php

session_start();

session_unset();

session_destroy();


header('Location: /olhonailha/views/login.php');
setcookie('msg', "Você deslogou de sua conta com sucesso!", time() + 3, '/olhonailha/');
setcookie('tipo', 'sucesso', time() + 3, '/olhonailha/');
header('Location: /olhonailha/views/perfil.php');

exit();
