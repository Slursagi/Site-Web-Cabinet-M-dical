<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

require 'include/db.php';
include 'include/lang.php';
include 'include/header.php';

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
            $erreur = $lang['incorrect_credentials'];
        }
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo $lang['login_title']; ?></title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" type="image/x-icon" href="images/icon.ico">
</head>
<body>

<main>

    <h1><?php echo $lang['login_title']; ?></h1>

    <?php
    if (isset($erreur)) {
        echo "<p style='color:red; text-align:center;'>$erreur</p>";
    }
    ?>

    <form method="post" action="">
        <label for="login"><?php echo $lang['login_label']; ?></label>
        <input type="text" id="login" name="login" required>

        <label for="mdp"><?php echo $lang['password_label']; ?></label>
        <input type="password" id="mdp" name="mdp" required>

        <button type="submit"><?php echo $lang['submit_login']; ?></button>
    </form>
</main>

</body>
</html>
