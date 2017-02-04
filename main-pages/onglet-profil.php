<?php
  include_once 'connection.php';
  include_once 'function/function-date-fr.php';

  $db = Connection::dbconnect();
  $st = $db->prepare( "SELECT * FROM `users_infos` WHERE ID = ".$_GET['ID']."; ");
  $st->execute();

  if ($st->rowCount() == 1) {
      $donnees = $st->fetch();
    }
    else {
      header("Location: interface-liste-candidats.php");
      exit;
    }
?>


    <div>
        <ul class="tabs">
            <li class="active">
                <a href="#profile">Profil du candidat</a> <!-- DE LIGNE 31 À 304 -->
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
              <div class="container">
                <div class="row">
                  <div class="col-md-10 ">
                    <form class="form-horizontal" method="POST" action="./function/function-modif-users-infos.php">
                      <fieldset>

              <!-- ID (hidden)-->
              <div class="form-group">
                <div class="col-md-4">
                  <div class="input-group">
                     <input id="ID" name="ID" type="hidden" placeholder="ID" class="form-control input-md" value="<?php echo $donnees['ID']; ?>">
                    </div>
                </div>
              </div>

              <!-- nom de famille-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="nom">Nom</label>
                <div class="col-md-4">
                  <div class="input-group">
                     <div class="input-group-addon">
                      <i class="fa fa-user">
                      </i>
                     </div>
                     <input id="nom" name="nom" type="text" placeholder="Nom de famille" class="form-control input-md" value="<?php echo strtoupper($donnees['nom']); ?>">
                    </div>
                </div>
              </div>


              <!-- prenom -->
              <div class="form-group">
                <label class="col-md-4 control-label" for=prenom>Prénom</label>
                <div class="col-md-4">
                  <div class="input-group">
                     <div class="input-group-addon">
                      <i class="fa fa-user">
                      </i>
                     </div>
                     <input id="prenom" name="prenom" type="text" placeholder="Prénom" class="form-control input-md" value="<?php echo  ucfirst(strtolower($donnees['prenom'])); ?>">
                    </div>
                </div>
              </div>

              <!-- choisir un file pour la photo (non démandé par M.Fraisse) -->
              <!-- <div class="form-group">
                <label class="col-md-4 control-label" for="Upload photo">Upload photo</label>
                <div class="col-md-4">
                  <input id="Upload photo" name="Upload photo" class="input-file" type="file">
                </div>
              </div> -->

              <!-- date de naissance -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="naissance">Date de naissance</label>
                <div class="col-md-4">
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-birthday-cake"></i>
                     </div>
                    <input id="naissance" name="d_naissance" type="text" placeholder="Date de naissance" class="form-control input-md" value="<?php echo dateFr($donnees['d_naissance']); ?>">
                  </div>
                </div>
              </div>

              <!-- date d'inscription  -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="inscription">Date d'inscription</label>
                <div class="col-md-4">
                <div class="input-group">
                     <div class="input-group-addon">
                   <i class="fa fa-birthday-cake"></i>
                     </div>
                     <input id="inscription" name="d_inscription" type="text" placeholder="Date d'inscription" class="form-control input-md" value="<?php echo dateFr($donnees['d_inscription']); ?>">
                </div>
                </div>
              </div>

              <!-- Sexe -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="sexe">Sexe</label>
                <div class="col-md-4">
                  <label class="radio-inline" for="Gender-0">
                    <input type="radio" name="sexe" id="sexe-1" value="M"<?php if($donnees['sexe'] == "M") {echo ' checked="checked"';} ?> >
                    Homme
                  </label>
                  <label class="radio-inline" for="Gender-1">
                    <input type="radio" name="sexe" id="sexe-2" value="F"<?php if($donnees['sexe'] == "F") {echo ' checked="checked"';} ?> >
                    Femme
                  </label>
                </div>
              </div>

              <!-- Adresse physique -->
              <div class="form-group">
                <label class="col-md-4 control-label col-xs-12" id="titre-adresse" for="adresse physique">Adresse physique</label>
                <div class="col-md-4  col-xs-4">
                <input id="rue" name="rue" type="text" placeholder="N° & Rue" class="form-control input-md " value="<?php echo $donnees['rue']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label" for="postal & ville"></label>
                <div class="col-md-2 col-xs-4">
                <input id="postal" name="postal" type="text" placeholder="Code postal" class="form-control input-md " value="<?php echo $donnees['postal']; ?>">
                </div>
                <div class="col-md-2  col-xs-4">
                <input id="ville" name="ville" type="text" placeholder="Ville " class="form-control input-md " value="<?php echo $donnees['ville']; ?>">
                </div>
              </div>


              <!-- Emploi (non demandé par M.Fraisse) -->
              <!-- <div class="form-group">
                <label class="col-md-4 control-label" for="Primary Occupation">Emploi</label>
                <div class="col-md-4">
                <div class="input-group">
                     <div class="input-group-addon">
                   <i class="fa fa-briefcase"></i>
                     </div>
                    <input id="emploi" name="emploi" type="text" placeholder="poste désiré" class="form-control input-md">
                    </div>
                </div>
              </div> -->

              <!-- Compétences (onglet-compétences)-->
              <!-- <div class="form-group">
                <label class="col-md-4 control-label" for="Skills">Skills</label>
                <div class="col-md-4">
                <div class="input-group">
                     <div class="input-group-addon">
                   <i class="fa fa-graduation-cap"></i>
                     </div>
                   <input id="Skills" name="Skills" type="text" placeholder="Skills" class="form-control input-md">
                    </div>
                </div>
              </div> -->

              <!-- Téléphone-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="tel ">Téléphone </label>
                <div class="col-md-4">
                    <div class="input-group othertop">
                     <div class="input-group-addon">
                   <i class="fa fa-mobile fa-1x" style="font-size: 20px;"></i>
                     </div>
                  <input id="tel" name="tel" type="text" placeholder=" Numéro de téléphone " class="form-control input-md" value="<?php echo $donnees['tel']; ?>">
                    </div>
                </div>
              </div>

              <!-- Email-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="email">Email</label>
                <div class="col-md-4">
                <div class="input-group">
                     <div class="input-group-addon">
                   <i class="fa fa-envelope-o"></i>
                     </div>
                  <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" value="<?php echo $donnees['email']; ?>">
                    </div>
                </div>
              </div>

              <!-- Multiple Checkboxes (onglet-compétences) -->
              <!-- <div class="form-group">
                <label class="col-md-4 control-label" for="Languages Known">Languages Known</label>
                <div class="col-md-4">
                <div class="checkbox">
                  <label for="Languages Known-0">
                    <input type="checkbox" name="Languages Known" id="Languages Known-0" value="1">
                    Nepali
                  </label>
                  </div>
                <div class="checkbox">
                  <label for="Languages Known-1">
                    <input type="checkbox" name="Languages Known" id="Languages Known-1" value="2">
                    Newari
                  </label>
                  </div>
                <div class="checkbox">
                  <label for="Languages Known-2">
                    <input type="checkbox" name="Languages Known" id="Languages Known-2" value="3">
                    English
                  </label>
                  </div>
                <div class="checkbox">
                  <label for="Languages Known-3">
                    <input type="checkbox" name="Languages Known" id="Languages Known-3" value="4">
                    Hindi
                  </label>
                  </div>
              <div class="othertop">
                  <label for="Languages Known-4">
                  </label>
                   <input type="input" name="LanguagesKnown" id="Languages Known-4"  placeholder="Other Language">
                  </div>
                </div>
              </div> -->

              <!-- Textarea -->
              <!-- <div class="form-group">
                <label class="col-md-4 control-label" for="Overview (max 200 words)">Commentaires (max 200 mots)</label>
                <div class="col-md-4">
                  <textarea class="form-control" rows="10"  id="commentaires" name="commentaires">Commentaires</textarea>
                </div>
              </div> -->

              <!-- Entreprise -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="entreprise">Entreprise</label>
                <div class="col-md-4">
                <div class="input-group">
                     <div class="input-group-addon">
                   <i class="fa fa-briefcase"></i>
                     </div>
                    <input id="entreprise" name="entreprise" type="text" placeholder="Entreprise" class="form-control input-md" value="<?php echo $donnees['entreprise']; ?>">
                    </div>
                </div>
              </div>


              <!-- Recruteur -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="recruteur"> Recruteur</label>
                <div class="col-md-4">
                <div class="input-group">
                     <div class="input-group-addon">
                   <i class="fa fa-briefcase"></i>
                     </div>
                    <input id="recruteur" name="recruteur" type="text" placeholder="Recruteur" class="form-control input-md" value="<?php echo $donnees['recruteur']; ?>">
                    </div>
                </div>
              </div>

              <!-- Bouton pour enregistrer -->
              <div class="form-group">
                <label class="col-md-4 control-label" ></label>
                <div class="col-md-4">
                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-open"></span> Sauvegarder</button>
                  <a href="javascript:if(confirm('&Ecirc;tes-vous sûr de vouloir supprimer <?php echo strtoupper($donnees['nom'])." ".ucfirst(strtolower($donnees['prenom'])); ?> ?')) document.location.href='./function/function-delete-user-infos.php?ID=<?php echo $donnees['ID'];?>'" class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove"></span> Supprimer</a>
                </div>
              </div>

              <?php if ($_SESSION['statut'] == "Admin"): ?>
                <!-- bouton pour changer de niveau de droits -->
                <div class="container">  <!-- version web -->
                  <div class="col-md-4 row text-center" id="lvl">
                        <label for="success" class="btn btn-success">Candidat <input type="radio" name="statut" value="Candidat" id="success" class="badgebox" <?php if($donnees['statut'] == "Candidat") {echo ' checked="checked" ';} ?> ><span class="badge"><?php if($donnees['statut'] == "Candidat") {echo ' &check;';} ?></span></label><br>
                        <label for="warning" class="btn btn-warning">Recruteur <input type="radio" name="statut" value="Recruteur" id="warning" class="badgebox" <?php if($donnees['statut'] == "Recruteur") {echo ' checked="checked" ';} ?> ><span class="badge"><?php if($donnees['statut'] == "Recruteur") {echo ' &check;';} ?></span></label><br>
                        <label for="danger" class="btn btn-danger">Administrateur <input type="radio" name="statut" value="Admin" id="danger" class="badgebox" <?php if($donnees['statut'] == "Admin") {echo ' checked="checked" ';} ?> ><span class="badge"><?php if($donnees['statut'] == "Admin") {echo ' &check;';} ?></span></label>
                  </div>
                </div>
                <div class="container"> <!-- version mobile & tablette -->
                  <div class="col-md-4 row text-center" id="lvlbis">
                        <label for="success" class="btn btn-success">Candidat <input type="radio" name="statut" value="Candidat" id="success" class="badgebox" <?php if($donnees['statut'] == "Candidat") {echo ' checked="checked" ';} ?> ><span class="badge"><?php if($donnees['statut'] == "Candidat") {echo ' &check;';} ?></span></label>
                        <label for="warning" class="btn btn-warning">Recruteur <input type="radio" name="statut" value="Recruteur" id="warning" class="badgebox" <?php if($donnees['statut'] == "Recruteur") {echo ' checked="checked" ';} ?> ><span class="badge"><?php if($donnees['statut'] == "Recruteur") {echo ' &check;';} ?></span></label>
                        <label for="danger" class="btn btn-danger">Administrateur <input type="radio" name="statut" value="Admin" id="danger" class="badgebox" <?php if($donnees['statut'] == "Admin") {echo ' checked="checked" ';} ?> ><span class="badge"><?php if($donnees['statut'] == "Admin") {echo ' &check;';} ?></span></label>
                  </div>
                </div>
              <?php endif; ?>


              </fieldset>
              </form>
              </div>
              <!-- <div class="col-md-2 hidden-xs">
                <img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="img-responsive img-thumbnail ">
              </div> -->
              </div>
              </div>
            </div> <!-- FIN ONGLET PROFIL -->

            <div id="skills" class="tab-content">Compétence coucou loremp ipsum salam outou pouritour dios youstifa wistitiCompétence coucou loremp ipsum salam outou pouritour dios youstifa wistitiCompétence coucou loremp ipsum salam outou pouritour dios youstifa wistitiCompétence coucou loremp ipsum salam outou pouritour dios youstifa wistitiCompétence coucou loremp ipsum salam outou pouritour dios youstifa wistitiCompétence coucou loremp ipsum salam outou pouritour dios youstifa wistitiCompétence coucou loremp ipsum salam outou pouritour dios youstifa wistiti</div>

            <div id="test_passed" class="tab-content">Test passé coucou loremp ipsum salam outou pouritour dios youstifa wistiti jaizjeiajziejazie iazjei jaepazoi azoeioazdn azjnd azdpjza iidjfioeejzfe ij eijj ijeiae zaueh uahueauzTest passé coucou loremp ipsum salam outou pouritour dios youstifa wistiti jaizjeiajziejazie iazjei jaepazoi azoeioazdn azjnd azdpjza iidjfioeejzfe ij eijj ijeiae zaueh uahueauzTest passé coucou loremp ipsum salam outou pouritour dios youstifa wistiti jaizjeiajziejazie iazjei jaepazoi azoeioazdn azjnd azdpjza iidjfioeejzfe ij eijj ijeiae zaueh uahueauz</div>
        </div>
      </div>
