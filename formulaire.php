<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire</title>
  </head>
  <body>

    <?php include'menu.php' ?>
        <form class="formulaire" action="cible_envoi.php" method="post" enctype="multipart/form-data">

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
           <label for="loisir">Loisir</label>
           <select class="" name="loisir">
             <option value="sport">sport</option>
             <option value="geeker">geeker</option>
             <option value="sortir">sortir</option>
           </select>
          <br><hr>

          <!-- • envoyer un fichier -->
          <form class="" action="cible_envoi.php" method="post" >
            <p>
              <label for="monfichier">Upload image</label><br><br>
              <input type="file" name="monfichier"><br><br>
              <input type="submit" name="monfichier">
            </p>
          </form>
                              <hr><br>
          <!-- input type reset -->
          <button type="reset" name="button-reset">recommencer</button>

        </form>


  </body>
</html>
