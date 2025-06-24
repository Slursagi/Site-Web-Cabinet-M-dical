<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Problèmes rencontrés</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

<?php include 'include/header.php'; ?>

<main>
    <h1>🛠️ Problèmes rencontrés durant le projet</h1>

    <section>
        <h2>💻 GAETAN - Chef de projet</h2>
        <ul>
            <li>Difficultés initiales à installer et configurer The Dude (droits admin + réseau détecté)</li>
            <li>Problème de coordination avec les membres au début → mise en place tardive de GANTT</li>
        </ul>
    </section>

    <section>
        <h2>🖥️ MAMADOU - Linux / Services réseau</h2>
        <ul>
            <li>Apache ne démarrait pas (conflit de ports avec un autre service)</li>
            <li>Problème de configuration de MySQL (mot de passe root mal défini)</li>
        </ul>
    </section>

    <section>
        <h2>📞 ILIAN - Téléphonie</h2>
        <ul>
            <li>Certains softphones ne détectaient pas le serveur Asterisk</li>
            <li>Le FON-175 n'arrivait pas à récupérer son IP en DHCP (réglé en IP statique)</li>
        </ul>
    </section>

<section>
    <h2>🌐 NAEL - Connexion admin / Base de données - Windows Server 2019</h2>
    <ul>
        <li>Connexion à la base de données impossible à cause de conflits de versions PHP et MySQL sur XAMPP</li>
        <li>La page login.php n'affichait pas le bon bouton dans le header → ajout d'une vérification de session</li>
        <li>Accès à l’espace privé possible même sans être connecté → redirection ajoutée si pas authentifié</li>
        <li>Création d'un bouton déconnexion visible uniquement pour l'admin connecté</li>
    </ul>
</section>

</main>

</body>
</html>
