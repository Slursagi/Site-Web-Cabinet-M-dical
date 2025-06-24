<?php
$host = "192.168.50.3"; // Remplace par l’IP de ta VM XAMPP si elle change
$dbname = "cabinet_pm1";
$username = "gwesemann";
$password = "passroot";
$charset = "utf8";

try {
    $dsn = "mysql:host=$host;port=3306;dbname=$dbname;charset=$charset";

    // Vérification manuelle pour PHP < 7.0 (sans ??)
    if (!isset($host) || !isset($dbname) || !isset($username) || !isset($password)) {
        throw new Exception("Variables de connexion manquantes.");
    }

    $pdo = new PDO($dsn, $username, $password);
    // Active le mode exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
