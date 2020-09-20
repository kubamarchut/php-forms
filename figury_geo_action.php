<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/kuba/figury_css.css">
  <title>Przykładowy formularz</title>
</head>
<body>
  <?php
    //if(isset($_POST['figura'])){
      $a = $_POST['figura'];
      echo ('<div class="'.$a.'"></div>');
    /*} else {
      echo ('Nie wybrano żadnej opcji');
    }*/
  ?>
</body>
</html>
