<?php
define('DBLOCAL', 'localhost');
define('DBNOME', 'olhonailha');
define('USUARIO', 'root');
define('SENHA', '');

class conectarDB
{
    public static function conectar()
    {
        $conn = new PDO('mysql:host='.DBLOCAL.';dbname='.DBNOME, USUARIO,SENHA);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}
