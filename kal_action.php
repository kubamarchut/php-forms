<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./main.css">
  <title>Przykładowy formularz</title>
</head>
<body>
  <?php
    $a = $_POST['liczba1'];
    $b = $_POST['liczba2'];

    echo ('Wynik dodawania a+b to '. ($a + $b) .'<br>');
    echo ('Wynik dodawania a-b to '. ($a - $b) .'<br>');
    echo ('Wynik dodawania a*b to '.$a * $b.'<br>');
    //if($b != 0){
      echo ('Wynik dodawania a/b to '.$a / $b.'<br>');
    /*} else {
      echo ('Nie można dzielić przez zero <br>');
    }*/
    echo ('Jesteś geniuszem! ');
  ?>
</body>
</html>
