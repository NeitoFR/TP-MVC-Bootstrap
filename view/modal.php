<div class="modal fade" id="modal_ajout"tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ajout d'un article</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="./model/valider_sql.php" method="POST">
          <input type="text" name="designation" placeholder="Nom de l'article.." class="form-control">
          <span class="label label-default">Description de l'article : </span>
          <textarea class="form-control" rows="5" name="texte"></textarea>
          <input type="number"  class="form-control"name="prix" placeholder="Prix..." min="0" max="10000">
          <span class="label label-default" for="enseigneid">Enseigne : </span>
          <select class="custom-select" name="enseigneid">
            <?php
              try{$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=UTF8', 'root', '');}
              catch(Exception $e){die('Erreur : '.$e->getMessage());}
              $query = $bdd->query('SELECT EnseigneId, nom FROM enseigne');
              $res = $query->fetchAll();
              $query->closeCursor();

              foreach ($res as $enseigne) {
                echo '<option value="'.$enseigne['EnseigneId'].'">'.$enseigne['nom'].'</option>';
            }
            ?>
            </select>
            <button type="submit" class="btn btn-primary form-control" name="ajoutarticle">Valider</button>
          </form>
        </div>
    </div>
  </div>
</div>
