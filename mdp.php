<?php include'menu.php';
echo "Entrer mot de passe";
;?>

<form class="" action="le_secret.php" method="post">
  <label for="mdp">Entrer votre mot de passe de 4 caractères au  maximum</label>
  <input type="password" name="mdp" maxlength="4">
  <input type="submit"  value="valider">
