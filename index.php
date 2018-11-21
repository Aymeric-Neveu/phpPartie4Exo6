<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function Identite($lastname='Neveu',$age=18,$firstName='Aymeric')
    {
      return 'Bonjour'.' '. $lastname. ' '.$firstName.' tu as '.$age.' ans ';
    }
    echo Identite();
    ?>
  </body>
</html>
