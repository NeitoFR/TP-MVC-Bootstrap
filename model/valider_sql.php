<?php
  include_once 'connect_db.php';

  if(isset($_POST['ajoutarticle']))
  {
    $query = Connection::get_bdd()->prepare("INSERT INTO article(ArticleID, Designation, Texte, Enseigne_EnseigneId, Prix)
                        VALUES (NULL, '".$_POST['designation']."', '".$_POST['texte']."', '".$_POST['enseigneid']."', '".$_POST['prix']."')");
    $query->execute();
    header('Location: ../index.php?page=admin');
  }
