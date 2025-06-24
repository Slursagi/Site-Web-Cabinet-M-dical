<?php
session_start();
include 'include/lang.php';
include 'include/header.php';
?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo $lang['team_page_title']; ?> - SAE 24</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" type="image/x-icon" href="images/icon.ico">
</head>
<body>

<main class="repartition">
    <h1><?php echo $lang['team_main_title']; ?></h1>

    <h2><strong>Gaetan Wesemann (<?php echo $lang['project_leader']; ?>)</strong></h2>
    <ul>
        <li><?php echo $lang['task_gaetan_1']; ?></li>
        <li><?php echo $lang['task_gaetan_2']; ?></li>
        <li><?php echo $lang['task_gaetan_3']; ?></li>
        <li><?php echo $lang['task_gaetan_4']; ?></li>
    </ul>

    <h2>Nael Zerroukhi</h2>
    <ul>
        <li><?php echo $lang['task_nael_1']; ?></li>
        <li><?php echo $lang['task_nael_2']; ?></li>
        <li><?php echo $lang['task_nael_3']; ?></li>
    </ul>

    <h2>Mamadou Bah</h2>
    <ul>
        <li><?php echo $lang['task_mamadou_1']; ?></li>
        <li><?php echo $lang['task_mamadou_2']; ?></li>
    </ul>

    <h2>Ilian Bouffersaoui</h2>
    <ul>
        <li><?php echo $lang['task_ilian_1']; ?></li>
        <li><?php echo $lang['task_ilian_2']; ?></li>
    </ul>
</main>

</body>
</html>