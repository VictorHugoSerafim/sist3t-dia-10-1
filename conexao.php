<?php
    define('HOST','i0rgccmrx3at3wv3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
    define('DB','aqpr222w7u270hu7');
    define('USER','tju84nj1hcz7xwhn');
    define('PASS','escnt6m40aoymihq');
    
    try{
        $pdo = new PDO("mysql:host=".HOST.";dbname=".DB,USER,PASS,array(PDO
        ::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
//         echo "Conectado";
    }catch(Exception $e){
        echo "Nao conectou". $e->getMessage();
        exit;
    }
?>
