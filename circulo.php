<?php
  $radio = $_POST['radio'];
  define('PI', 3.14159);

  $area = PI * $radio * $radio;
  echo "El area del circulo es $area";
?>
