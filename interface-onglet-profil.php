<?php include_once 'session_start.php'; ?>


<!DOCTYPE html>
  <html>
  <?php
      if (isset($_SESSION['nom'])) {  // verifie la presence d'une variable de session valide
    ?>

          <!--************* HEAD BALISE *************-->
          <?php
            include 'i-e/header_ppdc.php';
            // ie = interface exterieur
          ?>

          <!--************* LEFT COLON SESSION *************-->
          <?php
            if(isset($_SESSION['statut']) AND $_SESSION['statut'] == 'Candidat' || $_SESSION['statut'] == 'candidat') // recruteur
            {
              include 'i-e/recruteur_ppdc.php';
            }

            if (isset($_SESSION['statut']) and $_SESSION['statut'] == 'Recruteur' || $_SESSION['statut'] == 'recruteur') { // recruteur
              include 'i-e/recruteur_ppdc.php';
            }

            if (isset($_SESSION['statut']) and $_SESSION['statut'] == 'Admin' || $_SESSION['statut'] == 'admin') { // admin
                include 'i-e/admin_ppdc.php';
            } ?>

          <!--************* TOP SCREEN *************-->
          <?php
          include 'i-e/top_screen_ppdc.php'; ?>

          <!--************* MAIN CONTENT *************-->

          <div id="main">
              <?php include_once 'main-pages/onglet-profil.php'; ?>
          </div>

          <!--************* FOOTER *************-->
          <?php
            include 'i-e/footer_ppdc.php'; ?>
  </html>


<?php

      } //fermeture du if !isset
  else {
      header('Location: index.php');
    //s'il n'y a pas de variable de session, redirige vers index.php
  }
 ?>
