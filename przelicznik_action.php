<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Przelicznik</title>
</head>
<body>
<?php
  $mila = 0.000621371192;

  $a1= $_POST['a1'];
  echo ($a1.' metrów to '.$a1*$mila.' mil');
?>
</body>
</html>
