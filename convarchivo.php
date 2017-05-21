<?php
if ($_FILES["archivo"]["error"] > 0)
  {
  echo "Error: " . $_FILES["archivo"]["error"] . "<br />";
  }
else
  {
	$arch = $_POST['arch'];
	echo "Arhivo: " . $arch . ".";
  }
?>