<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./main.css">
  <title>Przykładowy formularz</title>
</head>
<body>
  <?php
    $a = $_POST['imie'];
    $b = $_POST['nazwisko'];
    
    echo ('Twoje imie to '.$a.'<br>');
    echo ('Twoje nazwisko to '.$b.'<br>');
    echo ('Jesteś geniuszem! ');
    echo ('Czy rozmawialiśmy o zasadzie pareto? ');
    echo ('Wygooglujcie ile zarabia programista php');
  ?>
</body>
</html>
