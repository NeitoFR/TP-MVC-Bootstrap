<?php
  include 'connect_db.php';
  sql_query::_init();

  class sql_query
  {
    static private $bdd;

    static function _init()
    {
      self::$bdd = Connection::get_bdd();
    }
    static function displayCatalogue()
    {

      $qString = 'SELECT * FROM enseigne INNER JOIN article ON article.Enseigne_EnseigneId = enseigne.EnseigneId';
      $query = self::$bdd->query($qString);
      $res = $query->fetchAll();
      $query->closeCursor();
      $tab = array();

      foreach($res as $row)
      {
        echo '
        <tr>
           <th scope="row">'.$row['Designation'].'</th>
           <td>'.$row['Texte'].'</td>
           <td>'.$row['Prix'].'</td>
           <td>'.$row['Nom'].'</td>
           <td>'.$row['Adresse'].'</td>
           <td>'.$row['Horaires'].'</td>
         </tr>
        ';
      }
    }

  }
?>
