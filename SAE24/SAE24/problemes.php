<?php
include 'include/lang.php';
include 'include/header.php';
?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo $lang['problems_page_title']; ?></title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" type="image/x-icon" href="images/icon.ico">
</head>
<body>


<main>
    <h1><?php echo $lang['problems_main_title']; ?> - SAÉ24</h1>

    <section>
        <h2>Gaétan Wesemann - <?php echo $lang['project_leader']; ?></h2>
        <ul>
            <li><strong><?php echo $lang['problem']; ?> :</strong> <?php echo $lang['gaetan_problem_1']; ?></li>
            <li><strong><?php echo $lang['solution']; ?> :</strong> <?php echo $lang['gaetan_solution_1']; ?></li>
            <li><strong><?php echo $lang['problem']; ?> :</strong> <?php echo $lang['gaetan_problem_2']; ?></li>
            <li><strong><?php echo $lang['solution']; ?> :</strong> <?php echo $lang['gaetan_solution_2']; ?></li>
        </ul>
    </section>

    <section>
        <h2>Nael Zerroukhi - Développement & Windows Server</h2>
        <ul>
            <li><strong><?php echo $lang['problem']; ?> :</strong> <?php echo $lang['nael_problem_1']; ?></li>
            <li><strong><?php echo $lang['solution']; ?> :</strong> <?php echo $lang['nael_solution_1']; ?></li>
            <li><strong><?php echo $lang['problem']; ?> :</strong> <?php echo $lang['nael_problem_2']; ?></li>
            <li><strong><?php echo $lang['solution']; ?> :</strong> <?php echo $lang['nael_solution_2']; ?></li>
            <li><strong><?php echo $lang['problem']; ?> :</strong> <?php echo $lang['nael_problem_3']; ?></li>
            <li><strong><?php echo $lang['solution']; ?> :</strong> <?php echo $lang['nael_solution_3']; ?></li>
        </ul>
    </section>

    <section>
        <h2>Mamadou Bah - Réseau et Routage</h2>
        <ul>
            <li><strong><?php echo $lang['problem']; ?> :</strong> <?php echo $lang['mamadou_problem_1']; ?></li>
            <li><strong><?php echo $lang['solution']; ?> :</strong> <?php echo $lang['mamadou_solution_1']; ?></li>
            <li><strong><?php echo $lang['problem']; ?> :</strong> <?php echo $lang['mamadou_problem_2']; ?></li>
            <li><strong><?php echo $lang['solution']; ?> :</strong> <?php echo $lang['mamadou_solution_2']; ?></li>
        </ul>
    </section>

    <section>
        <h2>Ilian Bouffersaoui - Téléphonie IP (ToIP)</h2>
        <ul>
            <li><strong><?php echo $lang['problem']; ?> :</strong> <?php echo $lang['ilian_problem_1']; ?></li>
            <li><strong><?php echo $lang['solution']; ?> :</strong> <?php echo $lang['ilian_solution_1']; ?></li>
            <li><strong><?php echo $lang['problem']; ?> :</strong> <?php echo $lang['ilian_problem_2']; ?></li>
            <li><strong><?php echo $lang['solution']; ?> :</strong> <?php echo $lang['ilian_solution_2']; ?></li>
        </ul>
    </section>

</main>
</body>
</html>
