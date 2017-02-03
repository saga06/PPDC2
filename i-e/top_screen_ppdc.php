<div id="top">
    <div class="users">
        <p class="centrer">
            <span class="bold"><?php echo $_SESSION['statut'] . "<span class=\"uppercase\"> " . $_SESSION['nom'] . "</span> " . $_SESSION['prenom']; ?></span>
        </p>
      </div>
  <div class="tools">
      <p class="">Edit profil :
          <a href="#">
              <span class="glyphicon glyphicon-edit"></span>
          </a>
      </p>
      <p class="">Log-out :
          <a href="deconnexion.php">
              <span class="glyphicon glyphicon-log-out"></span>
          </a>
      </p>
  </div>
</div>
