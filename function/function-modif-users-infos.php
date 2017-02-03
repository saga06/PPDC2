<?php
include_once '../connection.php';
include_once 'function-date-us.php';


if (isset($_POST['nom']) && !empty($_POST['nom']) &&
    isset($_POST['prenom']) && !empty($_POST['prenom']) &&
    isset($_POST['sexe']) && !empty($_POST['sexe']) &&
    isset($_POST['d_naissance']) && !empty($_POST['d_naissance']) &&
    isset($_POST['d_inscription']) && !empty($_POST['d_inscription']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['tel']) && !empty($_POST['tel']) &&
    isset($_POST['rue']) && !empty($_POST['rue']) &&
    isset($_POST['postal']) && !empty($_POST['postal']) &&
    isset($_POST['ville']) && !empty($_POST['ville']) &&
    isset($_POST['entreprise']) && !empty($_POST['entreprise']) &&
    isset($_POST['recruteur']) && !empty($_POST['recruteur']) &&
    isset($_POST['statut']) && !empty($_POST['statut'])
   )
      {
        $db = Connection::dbconnect();
        $st = $db->prepare( "UPDATE `users_infos`
        SET nom = :nom,
            prenom = :prenom,
            sexe = :sexe,
            d_naissance = :d_naissance,
            d_inscription = :d_inscription,
            email = :email,
            tel = :tel,
            rue = :rue,
            postal = :postal,
            ville = :ville,
            entreprise = :entreprise,
            recruteur = :recruteur,
            statut = :statut
        WHERE ID = :ID ");

        $st->bindValue(":nom", $_POST['nom']);
        $st->bindValue(":prenom", $_POST['prenom']);
        $st->bindValue(":sexe", $_POST['sexe']);
        $st->bindValue(":d_naissance", date("Y-m-d", strtotime($_POST['d_naissance'])));
        $st->bindValue(":d_inscription", date("Y-m-d", strtotime($_POST['d_inscription'])));
        $st->bindValue(":email", $_POST['email']);
        $st->bindValue(":tel", $_POST['tel']);
        $st->bindValue(":rue", $_POST['rue']);
        $st->bindValue(":postal", $_POST['postal']);
        $st->bindValue(":ville", $_POST['ville']);
        $st->bindValue(":entreprise", $_POST['entreprise']);
        $st->bindValue(":recruteur", $_POST['recruteur']);
        $st->bindValue(":statut", $_POST['statut']);
        $st->bindValue(":ID", $_POST['ID']);
        $st->execute();
        header("Location: ../interface-onglet-profil.php?ID=".$_POST['ID']);
      }
      else {
        echo "<script>alert('Veuillez ne pas laisser de champs vides')</script>";
        echo "<script>document.location.href = '../interface-onglet-profil.php?ID=".$_POST['ID']."'</script>";
      }
?>
