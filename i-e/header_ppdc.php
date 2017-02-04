<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <?php $page = $_SERVER['PHP_SELF']; /* création d'une variable $page qui capture la dernière extension du nom de l' URL*/
    switch ($page){                     /*transformation de cette variable en un title prédéfinie plus loin ($title) */


        case '/PPDC2/interface-liste-utilisateur.php': /*si on se retrouve sur la page .../interface-liste-candidats.php, alors*/
    $title= 'Liste des utilisateurs '; /*le titre se transforme en "Liste des candidats"*/
    $css= './css/i-e.css'; /* et le CSS appliqué est le ./css/i-e.css*/
    break;

        case '/PPDC2/interface-creation-utilisateur.php':
     $title= 'Création d\'un nouvel utilisateur';
     $css='./css/i-e.css';
     $css1= './css/creationUtilisateur.css';
     $cssOnglet='./css/onglet.css';
     break;

      case '/PPDC2/interface-onglet-profil.php':
      $title= 'Détails de l\'utilisateur';
      $css='./css/i-e.css';
      $css1= './css/creationUtilisateur.css';
      $cssOnglet='./css/onglet.css';
      break;

        /*case '/PPDC2/*******.php':
            $title= '*************';
            break;

        case '/PPDC2/*******.php':
            $title= '******************';
            break;
        case '/PPDC2/********.php':
            $title= '**************';
            break;*/
    }
    ?>

    <title><?php echo $title; ?></title>


        <!-- ICON URL -->
        <link href="http://www.datacorp.fr/image/icone.ico" rel="shortcut icon">

        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="./css/bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- FONTAWESOME -->
        <link rel="stylesheet"  href="./font-awesome-4.7.0/css/font-awesome.css">

        <!-- GOOGLE FONT -->
        <link href="https://fonts.googleapis.com/css?family=Overpass" rel="stylesheet">

        <!-- MY CSS -->
        <link rel="stylesheet" href="<?php echo $css; ?>">
    	<link rel="stylesheet" href="<?php echo $css1; ?>">
	<link rel="stylesheet" href="<?php echo $cssOnglet; ?>">


        <!-- JQUERY (js en footer_ppdc) -->
        <script src="https://code.jquery.com/jquery-3.1.1.js"></script>

    </head>

    <body> <!--ouverture de la balise body (fermeture dans footer) -->
