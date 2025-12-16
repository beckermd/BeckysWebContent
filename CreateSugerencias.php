<?php
include 'connection.php';
include "Encabezado.html";

$_Sugerencias=$_POST['comments'];
$_NameS=$_POST['NameSugerencia'];

$queryResult = mysqli_query($con,
    "INSERT INTO beckys.sugerencias (NameSugerente, Sugerencias)
  VALUES('$_NameS', '$_Sugerencias')");
if (!$queryResult) {
    print($queryResult);
    die('Invalid query: ' . mysqli_error($con));
}

echo "Gracias ".$_NameS." por sus comentarios!";

include "PiedePagina.html";
?>
