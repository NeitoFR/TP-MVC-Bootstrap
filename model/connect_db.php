<?php
class Connection
{
  static function get_bdd()
  {
    try{$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=UTF8', 'root', '');}
    catch(Exception $e){die('Erreur : '.$e->getMessage());}

    return $bdd;
  }
}
