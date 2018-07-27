<?php
$isOk = true;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>exercice</title>
  </head>
  <body>
    <p>
      <?php
        if ($isOk == false) {
          echo 'c\'est pas bon';
        }
        else {
          echo 'c\'est ok !!!';
        }
      ?>
    </p>
  </body>
</html>
