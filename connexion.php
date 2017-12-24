<!DOCTYPE html>
<html lang="en">
<?php
  include('layout/header.php');
?>
<body>
  <?php
    include('layout/navbar.php');
    include('layout/PDO.php');
  ?>
  <!-- Form login -->
  <div style="height: 50vh">
    <div class="flex-center flex-column">
      <form method="POST" action="index.php">
          <p class="h5 text-center mb-4">Se connecter</p>

          <div class="md-form">
              <i class="fa fa-envelope prefix grey-text"></i>
              <input type="text" name="username" class="form-control">
              <label for="defaultForm-email">Nom d'utilisateur</label>
          </div>

          <div class="md-form">
              <i class="fa fa-lock prefix grey-text"></i>
              <input type="password" name="password" class="form-control">
              <label for="defaultForm-pass">Mot de passe</label>
          </div>

          <div class="text-center">
              <button class="btn btn-default">Login</button>
          </div>
      </form>
    </div>
  </div>
  <?php
    include('layout/scripts.php');
  ?>
</body>

</html>
