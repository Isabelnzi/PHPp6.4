<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //on test si une variable existe
    if(isset($_GET['language']) && isset($_GET['server'])){ // On a le nom et le prénom
        echo $_GET['language'] . ' ' . $_GET['server'];
    }     
    ?>
  </body>
  </body>
</html>
