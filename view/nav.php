<!--Navbar-->
<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?page=catalogue">Catalogue</a>
        </li>
        <li class="nav-item">
            <a class="nav-link"  href="#">Contactez-nous</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
    <?php
        if(!(isset($_GET) && (!empty($_GET['page'])) && ($_GET['page'] =='admin')))
        {
          echo '
              <a href="./view/ajout/check_admin.php" style="color:inherit"><button class="btn btn-primary float-md-right">Espace admin</button></a>
            </ul>';
        }?>
</nav>
<!--Fin navbar-->
