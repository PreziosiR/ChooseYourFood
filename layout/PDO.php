<?php
  // CONNEXION A LA BASE DE DONNEES //
    $db = new PDO('mysql:host=localhost;dbname=chooseyourfood;charset=utf8mb4', 'root', '',array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
?>
