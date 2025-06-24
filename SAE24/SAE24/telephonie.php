<?php
session_start();
include 'include/lang.php';
include 'include/header.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo $lang['telephonie']; ?></title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" type="image/x-icon" href="images/icon.ico">
</head>
<body>


<main>
    <h1><?php echo $lang['telephony_title']; ?></h1>

    <section>
        <h2><?php echo $lang['asterisk_solution']; ?></h2>
        <p><?php echo $lang['asterisk_description']; ?></p>
    </section>

    <section>
        <h2><?php echo $lang['devices_used']; ?></h2>
        <ul>
            <li><strong><?php echo $lang['softphones']; ?> :</strong> <?php echo $lang['softphones_desc']; ?></li>
            <li><strong><?php echo $lang['fon175']; ?> :</strong> <?php echo $lang['fon175_desc']; ?></li>
            <li><strong><?php echo $lang['aastra']; ?> :</strong> <?php echo $lang['aastra_desc']; ?></li>
	    <li><strong><?php echo $lang['cisco']; ?> :</strong> <?php echo $lang['cisco_desc']; ?></li>
        </ul>
    </section>

    <section>
        <h2><?php echo $lang['dial_plan']; ?></h2>
        <p><?php echo $lang['dial_plan_intro']; ?></p>
        <ul>
            <li>300 : <?php echo $lang['secretary']; ?></li>
            <li>301 : <?php echo $lang['dentist']; ?></li>
            <li>302 -> 304 : <?php echo $lang['kines']; ?></li>
            <li>305 : <?php echo $lang['doctor']; ?></li>
            <li>306 : <?php echo $lang['wifi_mobile']; ?></li>
        </ul>
    </section>

    <section>
        <h2><?php echo $lang['tests_done']; ?></h2>
        <ul>
	    <li><?php echo $lang['sip_commands1']; ?><br><img src="images/Showpeers.PNG" alt="commaned sip" width="70%"></li>
	    <li><?php echo $lang['sip_commands2']; ?><br><img src="images/sipusers.PNG" alt="commaned sip" width="70%"></li>
            <li><?php echo $lang['internal_calls']; ?></li>
            <li><?php echo $lang['scenarios']; ?></li>
        </ul>
    </section>
</main>

</body>
</html>
