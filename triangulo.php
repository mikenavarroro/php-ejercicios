<?php
  $lado_triangulo = $_POST['lado'];
  $altura = $_POST['altura'];
  $area = $lado_triangulo * $altura / 2;

  echo "El área del triángulo es $area";

?>
