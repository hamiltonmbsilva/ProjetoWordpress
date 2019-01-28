<?php
/**
 * Created by PhpStorm.
 * User: Hamilton
 * Date: 28/01/2019
 * Time: 03:07
 */


$dsn = "mysql:dbname=aula;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

try{
    $db = new PDO($dsn, $dbuser, $dbpass);

}catch (PDOException $e){
    echo "Falhou: ".$e->getMessage();
}

?>