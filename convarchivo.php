<?php
if ($_FILES["archivo"]["error"] > 0)
  {
  echo "Error: " . $_FILES["archivo"]["error"] . "<br />";
  }
else
  {
  echo "Nombre: " . $_FILES["archivo"]["name"] . "<br />";
  echo "Tipo: " . $_FILES["archivo"]["type"] . "<br />";
  echo "Tama�o: ". $_FILES["archivo"]["size"]  . "<br />";
  echo "Ruta: " . $_FILES["archivo"]["tmp_name"];
  }
?>