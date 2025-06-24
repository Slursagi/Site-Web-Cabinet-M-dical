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
    <link rel="icon" type="image/x-icon" href="images/icon.ico">
</head>
<body>
    <?php include 'include/header.php'; ?>

    <main class="private-content">
        <h1>Espace privé - Documentation interne</h1>

        <section>
            <h2>Livrables</h2>
            <ul>
                <li><a href="documents/livrable_final.pdf" target="_blank">Livrable final (PDF)</a></li>
                <li><a href="images/PLANARCH.pdf" target="_blank">Configuration réseau</a></li>
                <li><a href="images/test_connection.png" target="_blank">Captures de tests</a></li>
            </ul>
        </section>

        <section>
            <h2>Identifiants & Mots de passe</h2>
            <ul>
                <li><a href="login.pdf" target="_blank">Fichier logins/mots de passe (accès restreint)</a></li>
            </ul>
        </section>

        <section>
            <h2>Résultats de tests</h2>
            <ul>
                <li>Connexion site web → base de données :OK</li>
                <li>Connexion téléphonie IP (softphone → téléphone physique) :OK</li>
		<li>DNS / DHCP fonctionnels sur Windows Server :OK<br><img src="images/IP.png" alt="DHCP et DNS" width="70%"></li>
                <li>Monitoring via The Dude :OK</li>
            </ul>
        </section>

        <section>
            <h2>Répartition des tâches</h2>
            <h3>Gaetan Wesemann (chef de projet)</h3>
            <ul>
                <li>Mise en place de l'hyperviseur ESXi</li>
                <li>Création et configuration de la VM Ubuntu Linux</li>
                <li>Rédaction des livrables (plan, logins, Gantt, docs PDF)</li>
                <li>Organisation du travail au sein de l'équipe</li>
            </ul>

            <h3>Nael Zerroukhi</h3>
            <ul>
                <li>Installation et configuration de Windows Server 2019 (contrôleur de domaine)</li>
                <li>Développement du site web en PHP (partie publique et privée)</li>
                <li>Mise en place du point d'accès Wi-Fi</li>
            </ul>

            <h3>Mamadou Bah</h3>
            <ul>
                <li>Configuration réseau intrasite</li>
                <li>Mise en œuvre du routage IP, du plan d'adressage, et des interconnexions</li>
            </ul>

            <h3>Ilian Bouffersaoui</h3>
            <ul>
                <li>Mise en œuvre de la téléphonie IP (ToIP) avec Asterisk</li>
                <li>Configuration des postes téléphoniques et du plan de numérotation</li>
            </ul>
        </section>

        <section>
            <h2>Diagrammes et documents</h2>
            <ul>
                <li><strong>Plan de numérotation :</strong><br><img src="images/PlanTelephonique.png" alt="Plan de numérotation" width="70%"></li>
                <li><strong>Schéma réseau :</strong><br><img src="images/reseau.png" alt="Schéma réseau" width="70%"></li>
                <li><strong>Diagramme de Gantt :</strong><br><img src="images/gantt.png" alt="Gantt" width="70%"></li>
            </ul>
        </section>

        <section>
            <h2>Autoévaluation</h2>
            <ul>
                <li><a href="images/auto.pdf" target="_blank">Voir les autoévaluations (PDF)</a></li>
		<li><a href="images/eval.pdf" target="_blank">Voir l'évaluations croisé (PDF)</a></li>
            </ul>
        </section>

        <section>
            <h2>Problèmes rencontrés</h2>
            <ul>
                <li>Connexion refusée entre PHP et la base de données → Résolu avec autorisations GRANT + port 3306</li>
                <li>Session non persistante sur plusieurs pages → Solution : ajout correct de <code>session_start()</code> dans chaque page</li>
                <li>Accès non sécurisé à private.php → Redirection automatique si session non active</li>
            </ul>
        </section>

        <section>
            <h2>Bilan</h2>
            <p>
                Le projet SAE24 a permis de déployer une infrastructure réseau complète avec :
                services Windows et Linux, téléphonie IP, supervision, site web dynamique, le tout testé et documenté.
                Grâce à une bonne organisation et à des solutions techniques rapides, tous les objectifs ont été atteints.
            </p>
        </section>

    </main>
</body>
</html>
