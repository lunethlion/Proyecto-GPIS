<html>

<head>
</head>

<body>

<!--FORM IZDA -->

<form action="prueba.php" method="post">
Textarea: <textarea name="area_izda"> 
</textarea>
<input type="submit" value="Enviar"/>
</form>


<!--FORM DCHA -->

<form action="prueba.php" method="post">
<?php
 echo 'Textarea: <textarea name="area_dcha"> ';
 if (isset($_POST["area_izda"]) && !empty($_POST["area_izda"]))
  echo $_POST["area_izda"];

 echo "</textarea>";
?>
</form>

</body>
</html>