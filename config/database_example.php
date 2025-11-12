<?php
function getConnection(){
    $host = "sqlXXX.exemplo.com";
    $db   = "if0_40361991_seuBanco";
    $user = "if0_40361991";
    $pass = "SUA_SENHA";
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}
?>
