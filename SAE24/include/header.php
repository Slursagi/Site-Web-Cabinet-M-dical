<div class="top-header">
  <div class="nav-container">
    <?php
    include_once 'include/lang.php';

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $current = basename($_SERVER["PHP_SELF"]);
    $langue_actuelle = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'fr';

    $pages = [
        "SAE24.php" => $t["accueil"],
        "equipe.php" => $t["equipe"],
        "livrables.php" => $t["livrables"],
        "telephonie.php" => $t["telephonie"],
        "problemes.php" => $t["problemes"],
    ];

    foreach ($pages as $url => $name) {
        if ($url !== $current) {
            echo "<a href=\"$url\">$name</a>";
        }
    }

    if (isset($_SESSION['login'])) {
        if ($current !== "private.php") {
            echo "<a href=\"private.php\">{$t["espace_prive"]}</a>";
        }
        echo "<a href=\"logout.php\">{$t["logout"]}</a>";
    } else {
        if ($current !== "login.php") {
            echo "<a href=\"login.php\">{$t["login"]}</a>";
        }
    }

    $autre_langue = ($langue_actuelle === 'fr') ? 'en' : 'fr';
    $label_langue = strtoupper($autre_langue);
    echo "<a href=\"?lang=$autre_langue\" class=\"lang-switch\">$label_langue</a>";
    ?>
  </div>
</div>
