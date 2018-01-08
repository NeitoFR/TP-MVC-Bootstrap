<?php
  include_once './view/header.php';
  include_once './view/nav.php';
  include_once './view/modal.php';

  if(!empty($_GET))
  {
    switch ($_GET['page'])
    {
      case 'catalogue':
          include './view/pages/catalogue.php';
        break;
      case 'admin':
          include './view/ajout/admin.php';
        break;
    }
  }
  else
  {
    include './view/pages/home.php';
  }
  include_once './view/footer.php';
 ?>
