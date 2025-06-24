<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Téléphonie</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

    <?php include 'include/header.php'; ?>

    <main>
        <h1>📞 Système de téléphonie - SAÉ24</h1>

        <section>
            <h2>🔧 Solution choisie : Asterisk</h2>
            <p>
                Le serveur Linux héberge le service Asterisk, un IPBX open-source permettant la gestion de la téléphonie sur IP.
                Il permet de configurer des postes internes, des transferts, des messages vocaux, et des scénarios personnalisés.
            </p>
        </section>

        <section>
            <h2>📟 Appareils utilisés</h2>
            <ul>
                <li><strong>Softphones :</strong> Jitsi ou Zoiper utilisés pour simuler les postes internes depuis les PC</li>
                <li><strong>Téléphones IP FON-175 :</strong> utilisés pour les postes physiques</li>
                <li><strong>Mobile Aastra 320w :</strong> téléphone Wi-Fi configuré sur le réseau</li>
            </ul>
        </section>

        <section>
            <h2>📞 Plan de numérotation</h2>
            <p>Chaque poste est identifié par un numéro interne :</p>
            <ul>
                <li>4030 : Secrétaire</li>
                <li>4031 : Dentiste</li>
                <li>4032 à 4034 : Kinés</li>
                <li>4035 : Médecin</li>
                <li>4036 : Mobile Wi-Fi</li>
            </ul>
        </section>

        <section>
            <h2>🔍 Tests réalisés</h2>
            <ul>
                <li>Commandes <code>sip show peers</code> et <code>sip show users</code> vérifiées dans Asterisk</li>
                <li>Appels internes testés entre softphones</li>
                <li>Fonctionnement des scénarios simples (appel secrétaire, message d'accueil)</li>
            </ul>
        </section>
    </main>
</body>
</html>
