<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Espace privé</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php include 'include/header.php'; ?>

    <main class="private-content">
        <h1>🔐 Espace privé - Documentation interne</h1>

        <section>
            <h2>📁 Livrables</h2>
            <ul>
                <li><a href="documents/livrable_final.pdf" target="_blank">Livrable final (PDF)</a></li>
                <li><a href="images/PLANARCH.pdf" target="_blank">Configuration réseau</a></li>
                <li><a href="images/test_connection.png" target="_blank">Captures de tests</a></li>
            </ul>
        </section>

        <section>
            <h2>🔑 Identifiants & Mots de passe</h2>
            <ul>
                <li><a href="login.pdf" target="_blank">Fichier logins/mots de passe (🔒 accès restreint)</a></li>
            </ul>
        </section>


        <section>
            <h2>📊 Résultats de tests</h2>
            <ul>
                <li>Connexion site web → base de données : ✅ OK</li>
                <li>Connexion téléphonie IP (softphone → téléphone physique) : ✅ OK</li>
                <li>DNS / DHCP fonctionnels sur Windows Server : ✅ OK</li>
                <li>Monitoring via The Dude : ✅ OK</li>
            </ul>
        </section>

        <section>
            <h2>👥 Équipe projet SAÉ24</h2>
            <table>
                <thead>
                    <tr><th>Nom</th><th>Responsabilités</th><th>Rôle</th></tr>
                </thead>
                <tbody>
                    <tr><td>GAETAN</td><td>Supervision The Dude, gestion de projet, livrables</td><td><strong>Chef de projet</strong></td></tr>
                    <tr><td>MAMADOU</td><td>Serveur Linux Ubuntu Mate (Web, MySQL, FTP, TFTP, Asterisk, SMTP/POP3)</td><td>Membre</td></tr>
                    <tr><td>ILIAN</td><td>Système de téléphonie (Asterisk), softphones, téléphones physiques</td><td>Membre</td></tr>
                    <tr><td>NAEL</td><td>Windows Server 2019 (AD, DHCP, DNS), site Web RWD, simulation Packet Tracer</td><td>Membre</td></tr>
                </tbody>
            </table>
        </section>

        <section>
            <h2>🛠️ Problèmes rencontrés</h2>
            <ul>
                <li>Connexion refusée entre PHP et la base de données → Résolu avec autorisations GRANT + port 3306</li>
                <li>Session non persistante sur plusieurs pages → Solution : ajout correct de <code>session_start()</code> dans chaque page</li>
                <li>Accès non sécurisé à private.php → Redirection automatique si session non active</li>
            </ul>
        </section>

        <section>
            <h2>📌 Bilan</h2>
            <p>
                Le projet SAE24 a permis de déployer une infrastructure réseau complète avec :
                services Windows et Linux, téléphonie IP, supervision, site web dynamique, le tout testé et documenté.
                Grâce à une bonne organisation et à des solutions techniques rapides, tous les objectifs ont été atteints.
            </p>
        </section>

    </main>
</body>
</html>
