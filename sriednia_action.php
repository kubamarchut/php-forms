<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Śriednia</title>
</head>
<body>
  <?php
    $a1= $_POST['a1'];
    $a2= $_POST['a2'];
    $a3= $_POST['a3'];
    $a4= $_POST['a4'];
    $a5= $_POST['a5'];
      $sriednia=(5/((1/$a1)+(1/$a2)+(1/$a3)+(1/$a4)+(1/$a5)));
    echo ($sriednia);
  ?>

</body>
</html>
