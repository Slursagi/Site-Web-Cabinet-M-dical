<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include 'include/lang.php';
?>

<!DOCTYPE html>
<html $lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'fr';>
<head>
    <meta charset="UTF-8">
    <title><?= $lang["private_space_title"] ?></title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" type="image/x-icon" href="images/icon.ico">
</head>
<body>
    <?php include 'include/header.php'; ?>

    <main class="private-content">
        <h1><?= $lang["private_space_title"] ?></h1>

        <section>
            <h2><?= $lang["deliverables_section"] ?></h2>
            <ul>
                <li><a href="images/PLANARCH.pdf" target="_blank"><?= $lang["network_config"] ?></a></li>
                <li><a href="images/test_connection.png" target="_blank"><?= $lang["test_screenshots"] ?></a></li>
            </ul>
        </section>

        <section>
            <h2><?= $lang["logins_section"] ?></h2>
            <ul>
                <li><a href="login.pdf" target="_blank"><?= $lang["login_file"] ?></a></li>
            </ul>
        </section>

        <section>
            <h2><?= $lang["test_results_section"] ?></h2>
            <ul>
                <li><?= $lang["test_php_mysql"] ?></li>
                <li><?= $lang["test_telephony"] ?></li>
                <li><?= $lang["test_dns_dhcp"] ?><br><img src="images/IP.png" alt="DHCP and DNS" width="70%"></li>
                <li><?= $lang["test_dude"] ?><br><img src="images/Thedude.png" alt="Dude" width="70%"></li>
            </ul>
        </section>

        <section>
            <h2><?= $lang["task_distribution_section"] ?></h2>
            <h3>Gaetan Wesemann (<?= $lang["project_leader"] ?>)</h3>
            <ul>
                <li><?= $lang["task_gaetan_1"] ?></li>
                <li><?= $lang["task_gaetan_2"] ?></li>
                <li><?= $lang["task_gaetan_3"] ?></li>
                <li><?= $lang["task_gaetan_4"] ?></li>
            </ul>
            <h3>Nael Zerroukhi</h3>
            <ul>
                <li><?= $lang["task_nael_1"] ?></li>
                <li><?= $lang["task_nael_2"] ?></li>
                <li><?= $lang["task_nael_3"] ?></li>
            </ul>
            <h3>Mamadou Bah</h3>
            <ul>
                <li><?= $lang["task_mamadou_1"] ?></li>
                <li><?= $lang["task_mamadou_2"] ?></li>
            </ul>
            <h3>Ilian Bouffersaoui</h3>
            <ul>
                <li><?= $lang["task_ilian_1"] ?></li>
                <li><?= $lang["task_ilian_2"] ?></li>
            </ul>
        </section>
	<section>
		<ul>
			<h2><?= $lang["probtitre"] ?></h2>
			<li><a href="images/prob+solu.pdf" target="_blank"><?= $lang["prob+solu"] ?></a></li>
		</ul>
	</section>
        <section>
            <h2><?= $lang["diagrams_section"] ?></h2>
            <ul>
                <li><strong><?= $lang["diagram_phone"] ?></strong><br><img src="images/PlanTelephonique.png" alt="Plan Téléphonique" width="70%"></li>
                <li><strong><?= $lang["diagram_network"] ?></strong><br><img src="images/reseau.png" alt="Réseau" width="70%"></li>
                <li><strong><?= $lang["diagram_gantt"] ?></strong><br><img src="images/gantt.png" alt="Gantt" width="70%"></li>
            </ul>
        </section>

        <section>
            <h2><?= $lang["selfeval_section"] ?></h2>
            <ul>
                <li><a href="images/auto.pdf" target="_blank"><?= $lang["selfeval_pdf"] ?></a></li>
                <li><a href="images/eval.pdf" target="_blank"><?= $lang["eval_pdf"] ?></a></li>
            </ul>
        </section>

        <section>
            <h2><?= $lang["issues_section"] ?></h2>
            <ul>
                <li><?= $lang["issue_php_mysql"] ?></li>
                <li><?= $lang["issue_sessions"] ?></li>
                <li><?= $lang["issue_redirect"] ?></li>
            </ul>
        </section>

        <section>
            <h2><?= $lang["summary_section"] ?></h2>
            <p><?= $lang["summary_text"] ?></p>
        </section>
    </main>
</body>
</html>
