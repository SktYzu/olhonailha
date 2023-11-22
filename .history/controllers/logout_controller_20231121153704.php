<?php

session_start();

session_unset();

session_destroy();


header('Location: /olhonailha/views/login.php');
setcookie('msg', "O seu usuario foi atualizado com sucesso!", time() + 5, '/olhonailha/');
setcookie('tipo', 'sucesso', time() + 5, '/olhonailha/');
header('Location: /olhonailha/views/perfil.php');

exit();
