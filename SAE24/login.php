<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require 'include/db.php';

if (isset($_POST['login']) && isset($_POST['mdp'])) {
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];

    try {
        $stmt = $pdo->prepare("SELECT * FROM Administration WHERE login = :login AND mdp = :mdp");
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':mdp', $mdp);
        $stmt->execute();

        if ($stmt->fetch()) {
            $_SESSION['login'] = $login;
            header("Location: private.php");
            exit;
        } else {
            $erreur = "Identifiants incorrects.";
        }
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion administrateur</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

<main>
    <?php include 'include/header.php'; ?>

    <h1>Connexion administrateur</h1>

    <?php
    if (isset($erreur)) {
        echo "<p style='color:red; text-align:center;'>$erreur</p>";
    }
    ?>

    <form method="post" action="">
        <label for="login">Login :</label>
        <input type="text" id="login" name="login" required>

        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp" required>

        <button type="submit">Se connecter</button>
    </form>
</main>

</body>
</html>
