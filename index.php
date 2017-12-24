<!DOCTYPE html>
<html lang="en">
<?php
  include('layout/header.php');
?>
<body>
  <?php
    include('layout/navbar.php');
    include('layout/PDO.php');
  

    echo "salut";
    if(isset($_POST['username']) && isset($_POST['password']))
    {
      $requete = $db->prepare(''
      . 'SELECT * '
      . 'FROM utilisateurs '
      . 'WHERE pseudo = \''.$_POST['username'].'\''
      . '');
      // LANCEMENT REQUÊTE //
      $requete->execute();
      // STOCKAGE DU RESULTAT DE LA REQUÊTE //
      $utilisateurs = $requete->fetchAll();
      foreach ($utilisateurs as $user) {
        echo $user['mdp'];
      }

    }
  ?>

  <?php // On sélectionne les restos dans la base //
    $requete = $db->prepare(''
    . 'SELECT * '
    . 'FROM restaurant '
    . '');
    // LANCEMENT REQUÊTE //
    $requete->execute();
    // STOCKAGE DU RESULTAT DE LA REQUÊTE //
    $Restaurants = $requete->fetchAll();
  ?>
  <div style="height: 80vh">
    <div class="flex-center flex-column">
        <h1>Choisis ton restaurant</h1>
        <div class="row">
          <?php // On affiche la liste des restos issus de la base //
            foreach ($Restaurants as $restaurant) {
                echo '<button type="button" class="btn btn-outline-primary waves-effect">'.$restaurant['nom'].'</button>';
            }
          ?>
      </div>
    </div>
    <?php
      include('layout/scripts.php');
    ?>
</body>

</html>
