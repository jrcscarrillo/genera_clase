<?php  

function conecta_PDO() {
    $userName = "jrcscarrillo";
    $password = "AnyaCarrill0";
    $dbName = "dbaurora";
    $server = "localhost";
    $charset = 'utf8';
    $dsn = "mysql:host=$server;dbname=$dbName;charset=$charset";
try {
    $db = new PDO($dsn, $userName, $password);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
    return $db;
}
