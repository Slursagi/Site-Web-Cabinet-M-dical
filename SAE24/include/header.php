<div class="top-header">
  <div class="nav-container">
    <?php
      if (session_status() === PHP_SESSION_NONE) {
          session_start();
      }

      $pages = [
        "SAE24.php" => "Accueil",
        "equipe.php" => "Équipe",
        "livrables.php" => "Livrables",
        "telephonie.php" => "Téléphonie",
        "problemes.php" => "Problèmes",
      ];

      $current = basename($_SERVER["PHP_SELF"]);

      foreach ($pages as $url => $name) {
          if ($url !== $current) {
              echo "<a href=\"$url\">$name</a>";
          }
      }

      // Affichage conditionnel selon connexion
      if (isset($_SESSION['login'])) {
          if ($current !== "private.php") {
              echo "<a href=\"private.php\">Espace privé</a>";
          }
          echo "<a href=\"logout.php\">Déconnexion</a>";
      } else {
          if ($current !== "login.php") {
              echo "<a href=\"login.php\">Connexion</a>";
          }
      }
    ?>
  </div>
</div>
