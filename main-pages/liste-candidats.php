<?php include_once 'connection.php'; // inclu la base de données
      include_once 'user.php'; // inclu la classe user
?>

    <table class="table">
      <thead class="thead-inverse">
        <tr>
          <th>#</th>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Sexe</th>
          <th>Email</th>
          <th>Telephone</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      <?php
      //On affiche les lignes du tableau une à une à l'aide d'une boucle
        $utilisateur = new User;
        $result = $utilisateur->Listage();
        foreach ($result as $key => $value) {
          // ici $result est la clé qui renvoie à $value
          // il faut utiliser $value pour afficher les infos venant de users_infos
          ?>
            <tr>
              <td scope="row"><?php echo $value['ID'];?></td>
              <td><?php echo strtoupper($value['nom']);?></td>
              <td><?php echo ucfirst(strtolower($value['prenom']));?></td>
              <td><?php echo $value['sexe'];?></td>
              <td><?php echo $value['email'];?></td>
              <td><?php echo $value['tel'];?></td>
              <th><a href="interface-onglet-profil.php?ID=<?php echo $value['ID'];?>"><button type="button" class="btn btn-info glyphicon glyphicon-zoom-in">DETAILS</button></a><!-- bouton qui permet de voir le profil unique de chaque candidats -->
              <a href="javascript:if(confirm('&Ecirc;tes-vous sûr de vouloir supprimer <?php echo strtoupper($value['nom'])." ".ucfirst(strtolower($value['prenom'])); ?> ?')) document.location.href='function/function-delete-user-infos.php?ID=<?php echo $value['ID'];?>'" class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove"></span>SUPPRIMER</a></th>
            </tr>
          <?php
        } // fermeture du foreach, laisser cette fermeture '}' tranquille
        ?>
        </tbody>
    </table>
