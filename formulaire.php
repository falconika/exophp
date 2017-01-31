<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire</title>
  </head>
  <body>

<?php include'menu.php' ?>
    <form class="" action="traitementformulaire.php" method="post">

      <!-- • nom (input) -->
      <label for="nom">Votre nom</label> <br>
      <input type="text" name="nom" >
      <br><br><hr>


      <!-- • prénom (input) -->
      <label for="prenom">Votre prénom</label> <br>
      <input type="text" name="prenom">
      <br><br><hr>


      <!-- • âge (input ou liste déroulante) -->
      <label for="age">Votre âge </label> <br>
      <input type="number" name="age" value="18" step="1" min="0">
      <br><br><hr>


      <!-- • sexe (bouton radio) -->
      <label for="sexe">Votre sexe</label><br>
      <input type="radio" name="sexe" value="homme" id="homme" checked="checked" /> <label for="homme">homme</label>
      <input type="radio" name="sexe" value="femme" id="femme" /> <label for="femme">femme</label>
      <br><br><hr>

      <!-- • ville (input) -->
      <label for="ville">Votre ville</label><br>
      <select class="" name="ville">
        <option value="Lille">Lille</option>
        <option value="Roubaix">Roubaix</option>
        <option value="Tourcoing">Tourcoing</option>
      </select>
      <br><hr>


       <!-- • loisirs (boutons à cocher) -->



      <!-- • envoyer un fichier -->




      <!-- input type reset -->

    </form>

  </body>
</html>
