<?php
// vérifier que le nom a été ajouté
$_nom=htmlspecialchars($_POST['nom']);
$_prenom=htmlspecialchars($_POST['prenom']);
$_age=htmlspecialchars($_POST['age']);
$_sexe=htmlspecialchars($_POST['sexe']);
$_ville=htmlspecialchars($_POST['ville']);
$_loisir=htmlspecialchars($_POST['loisir']);
$_fichier_recu=htmlspecialchars($_POST['monfichier']);
if (isset($_nom)) {
  if (isset($_nom)) {
    echo "vous vous appelez ".$_nom.' '.$_prenom.' !<br>';
    if (isset($_age)) {
      echo'Vous avez '.$_age.' ans.<br>';
      if (isset($_sexe)) {
        echo "Vous êtes ".$_sexe.'.<br>';
        if (isset($_ville)) {
          echo "Vous habitez dans la ville de ".$_ville.'.<br>';
          if (isset($_loisir)) {
            echo "Vous aimez le ".$_loisir.'.<br>';


// <!-- Vérifier tout d'abord si le visiteur a bien envoyé un fichier  -->
// <!-- (en testant la variable $_FILES['monfichier'] avec isset())  -->
// <!-- et s'il n'y a pas eu d'erreur d'envoi  -->
// <!-- (grâce à$_FILES['monfichier']['error']). -->
  if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] ==0)
  {

      // <!-- Vérifier si la taille du fichier ne dépasse pas 1 Mo par exemple (environ 1 000 000 d'octets) grâce à  -->
      // <!-- $_FILES['monfichier']['size']. -->
      if ($_FILES['monfichier']['size']<= 10000000)
        {
          // <!-- Vérifier si l'extension du fichier est autorisée  -->
          // <!-- (il faut interdire à tout prix que les gens puissent envoyer des fichiers PHP,
          // sinon ils pourraient exécuter des scripts sur votre serveur).  -->
          // <!-- Dans notre cas, nous autoriserons seulement les images (fichiers .png, .jpg, .jpeg et .gif). -->
          // <!-- Nous analyserons pour cela la variable $_FILES['monfichier']['name']. -->
          // 1 Creer une variable recuperant les informations du nom via pathinfo
          $_info_fichier=pathinfo($_FILES['monfichier']['name']);

          // 2 pathinfo recupere toute les info du nom, mais on ne veut que l'extension
          // donc on recherche la variable ['extension'] dans la variable contenant toute les extensions nouvellement crée
          $_extension_upload= $_info_fichier['extension'];

          // on creer un array (dans une var) des extension qu'on veut accepter
          $_extension_autoriser= array('extension' => png,jpg,jpeg,gif);

          // on compare les 2 variables pour savoir si nos extensions existe dans le tableau
          if (in_array($_extension_upload,$_extension_autoriser)) {

            // si elle existe on upload le fichier en utilisant la fonction move_uploaded_file
            // Le premier paremetre de move_uploaded_file = le fichier d'origine, le second est le fichier d'arrivé.
            // Pour construire le path on utilise la fonction basename et un concaténation
            move_uploaded_file($_FILES['monfichier']['tmp'], 'upload/'. basename($_FILES['monfichier']['name']));
            // et on envoi un msg de confirmation
            echo "Votre fichier a bien été envoyé.";
            # code...
         }
        }
       }
     }}}}}}








 ?>
