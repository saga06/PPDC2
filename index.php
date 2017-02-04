<?php

session_start();
include_once('user.php'); // inclure la classe user
if(isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $object = new User();
    $object-> Login($username, $password);
    $_SESSION['userAutorise']['email']=$object->_email;
    $_SESSION['userAutorise']['password']=$object->_password;
}
// va chercher les infos user et password pour créer un nouvel objet user
 ?>

<!DOCTYPE html>
  <html>
    <head>

    <title>Page d'identification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta charset="utf-8">
      <!--********************* ICONS ************************-->
      <link rel="icon" type="image/icon" href="css/img/index.ico" />

      <!--********************* BOOTSTRAP ************************-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <!--********************* FEUILLE DE STYLE ************************-->
      <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>


    <body>
      <div class="form-login">
        <img src="css/img/logo.png" alt=""> <!-- logo de l'entreprise -->
      </div>


  <form class="maincontenair" action="index.php" method="POST">
      <div class="container">
          <div class="row">
              <div class="col-md-offset-0">
                  <div class="form-login">
                  <h4>Se connecter</h4>
                  <div id="echo">

                  </div>

                    <input type="email" id="userName" name="user" class="form-control input-sm chat-input" placeholder="identifiant" value="" />
                    <!-- input pour l'email -->
                  </br>
                    <input type="password" id="userPassword" name="pass" class="form-control input-sm chat-input" placeholder="mot de passe" value="" />
                    <!-- input pour password -->
                  </br>
                  </br>
                  <div class="wrapper">
                      <?php if (isset($object->error))
                      {
                          echo $object->error; //affiche le message d'erreur
                      }  ?>
                    </br>
                  </br>
                        <input type="submit" class="btn btn-primary btn-md" name="submit" value="S'identifier"/>
                        <!-- bouton pour lancer la function login, dans user.php -->
                  </div>
                  </div>
              </div>
            </div>
         </div>
      </form>
   </body>
</html>
