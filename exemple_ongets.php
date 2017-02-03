<?php include_once 'connection.php';
      include_once 'user.php';
?>

    <div>
        <ul class="tabs">
            <li class="active">
                <a href="#profile">Profil du candidat</a>
            </li>
            <li>
                <a href="#skills">Compétences du candidat</a>
            </li>
            <li >
                <a href="#test_passed">Tests passés</a>
            </li>
        </ul>
        <div class="tabs-content">   
            <div id="profile" class="active tab-content">
                <table class="table">
                  <thead class="thead-inverse">
                    <tr>
                      <th>#</th>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Sexe</th>
                      <th>Date de naissance</th>
                      <th>Date d'inscription</th>
                      <th>Email</th>
                      <th>Telephone</th>
                      <th>Entreprise</th>
                      <th>Recruteur</th>
                      <th>Mot de passe</th> 
                      <th>Droits</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  //On affiche les lignes du tableau une à une à l'aide d'une boucle
                    $utilisateur = new User;
                    $result = $utilisateur->Listage();
                    foreach ($result as $key => $value) {
                      ?>
                        <tr>
                          <th scope="row"><?php echo $value['ID'];?></th>
                          <td><?php echo $value['nom'];?></td>
                          <td><?php echo $value['prenom'];?></td>
                          <td><?php echo $value['sexe'];?></td>
                          <td><?php echo $value['d_naissance'];?></td>
                          <td><?php echo $value['d_inscription'];?></td>
                          <td><?php echo $value['email'];?></td>
                          <td><?php echo $value['tel'];?></td>
                          <td><?php echo $value['entreprise'];?></td>
                          <td><?php echo $value['recruteur'];?></td>
                          <td><?php echo $value['password'];?></td>
                          <td><?php echo $value['statut'];?></td>
                        </tr>
                      <?php
                    }
                    ?>
                </tbody>
                </table>
            </div>
            
            <div id="skills" class="tab-content">Compétence coucou loremp ipsum salam outou pouritour dios youstifa wistitiCompétence coucou loremp ipsum salam outou pouritour dios youstifa wistitiCompétence coucou loremp ipsum salam outou pouritour dios youstifa wistitiCompétence coucou loremp ipsum salam outou pouritour dios youstifa wistitiCompétence coucou loremp ipsum salam outou pouritour dios youstifa wistitiCompétence coucou loremp ipsum salam outou pouritour dios youstifa wistitiCompétence coucou loremp ipsum salam outou pouritour dios youstifa wistiti</div>
            
            <div id="test_passed" class="tab-content">Test passé coucou loremp ipsum salam outou pouritour dios youstifa wistiti jaizjeiajziejazie iazjei jaepazoi azoeioazdn azjnd azdpjza iidjfioeejzfe ij eijj ijeiae zaueh uahueauzTest passé coucou loremp ipsum salam outou pouritour dios youstifa wistiti jaizjeiajziejazie iazjei jaepazoi azoeioazdn azjnd azdpjza iidjfioeejzfe ij eijj ijeiae zaueh uahueauzTest passé coucou loremp ipsum salam outou pouritour dios youstifa wistiti jaizjeiajziejazie iazjei jaepazoi azoeioazdn azjnd azdpjza iidjfioeejzfe ij eijj ijeiae zaueh uahueauz</div>
        </div>
      </div>
  
