<?php
session_start();
session_destroy(); //permet de vider la session
unset($_SESSION);
header('location: index.php'); //revois automatiquement vers la page de connexion
exit;
?>
