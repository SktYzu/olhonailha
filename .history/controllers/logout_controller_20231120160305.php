<?php

session_start();

session_unset(); 

session_destroy();


header('Location: /olhonailha/views/login.php');

exit();
