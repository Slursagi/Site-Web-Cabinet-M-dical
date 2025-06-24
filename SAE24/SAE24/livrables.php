<?php
session_start();
include 'include/lang.php';
include 'include/header.php';
?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo $lang['deliverables_page_title']; ?></title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" type="image/x-icon" href="images/icon.ico">
</head>
<body>


<main>
    <h1><?php echo $lang['deliverables_main_title']; ?></h1>
    <ul>
        <li><strong><?php echo $lang['intro_page']; ?></strong> : <a href="SAE24.php"><?php echo $lang['see_intro']; ?></a></li>
        <li><strong><?php echo $lang['team_presentation']; ?></strong> : <a href="images/presentation.pdf"><?php echo $lang['see_presentation']; ?></a></li>
        <li><strong><?php echo $lang['network_plan']; ?></strong> : <a href="images/PlanAdresse.pdf"><?php echo $lang['plan_file']; ?></a></li>
        <li><strong><?php echo $lang['phone_plan']; ?></strong> : <a href="images/PlanTelephonique.png"><?php echo $lang['numbers_file']; ?></a></li>
        <li><strong>Packet Tracer</strong> : <a href="SAE24.pkt">Packet Tracer</a></li>
        <li><strong><?php echo $lang['test_results']; ?></strong> : <a href="images/test_connection.png"><?php echo $lang['network_pings']; ?></a></li>
        <li><strong><?php echo $lang['vm_test_results']; ?></strong> : <a href="images/pingvm.png"><?php echo $lang['vm_pings']; ?></a></li>
        <li><strong>Gantt</strong> : <a href="images/gantt.png"><?php echo $lang['gantt_chart']; ?></a></li>
        <li><strong><?php echo $lang['github']; ?></strong> : <a href="https://github.com/Slursagi/Site-Web-Cabinet-M-dical">GitHub</a></li>
        <li><strong><?php echo $lang['self_eval']; ?></strong> : <a href="images/auto.pdf"><?php echo $lang['self_eval_file']; ?></a></li>
	<li><strong><?php echo $lang['poc_title']; ?></strong> : <a href="images/guide.pdf"><?php echo $lang['poc_text']; ?></a></li>
    </ul>
</main>

</body>
</html>
