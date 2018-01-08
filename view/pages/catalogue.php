<?php include './model/sql_query.php'; ?>
<div class="container">
  <div class="row">
    <table class="table table table-bordered table-hover">
      <thead class="thead-inverse">
        <tr>
          <th scope="col">Designation</th>
          <th scope="col">Texte</th>
          <th scope="col">Prix</th>
          <th scope="col">Nom</th>
          <th scope="col">Adresse</th>
          <th scope="col">Horaires</th>
        </tr>
      </thead>
      <tbody>
        <?php
            sql_query::displayCatalogue();
         ?>
      </tbody>
    </table>
  </div>
</div>
