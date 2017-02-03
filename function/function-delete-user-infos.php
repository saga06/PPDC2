<?php
include_once '../connection.php';

  function suppr($ID, $bdd){
    $sql = "DELETE FROM `users_infos` WHERE `ID`=:ID;";
    $req = $bdd->prepare($sql);
    $t = array(
        "ID" => $ID
      );
    $req->execute($t);
    header("Location: ../interface-liste-candidats.php");
   }

   suppr($_GET['ID'], $bdd);

?>
