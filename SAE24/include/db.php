<?php
$host = "192.168.50.3";
$dbname = "cabinet_pm1";
$username = "gwesemann";
$password = "passroot";
$charset = "utf8";

try {
    $dsn = "mysql:host=$host;port=3306;dbname=$dbname;charset=$charset";

    if (!isset($host) || !isset($dbname) || !isset($username) || !isset($password)) {
        throw new Exception("Variables de connexion manquantes.");
    }

    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
