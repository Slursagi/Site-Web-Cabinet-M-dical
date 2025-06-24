<?php
session_start();
include 'include/lang.php';
include 'include/header.php';
?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <title>SAÉ24 - <?php echo $t['title']; ?></title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" type="image/x-icon" href="images/icon.ico">
</head>
<body>


<main>
    <section class="hero">
        <h1><?php echo $t['welcome']; ?></h1>
        <p><?php echo $t['intro']; ?></p>
    </section>

    <section class="presentation">
        <h2><?php echo $t['content_title']; ?></h2>
        <ul>
            <li><strong><?php echo $t['team']; ?> :</strong> <?php echo $t['team_desc']; ?></li>
            <li><strong><?php echo $t['deliverables']; ?> :</strong> <?php echo $t['deliverables_desc']; ?></li>
            <li><strong><?php echo $t['phone_plan']; ?> :</strong> <?php echo $t['phone_plan_desc']; ?></li>
            <li><strong><?php echo $t['problems']; ?> :</strong> <?php echo $t['problems_desc']; ?></li>
            <li><strong><?php echo $t['private_space']; ?> :</strong> <?php echo $t['private_space_desc']; ?></li>
        </ul>
    </section>
</main>

</body>
</html>
