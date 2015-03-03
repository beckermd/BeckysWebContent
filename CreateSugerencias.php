<?php
include 'connection.php';
include "Encabezado.html";

$_Sugerencias=$_POST['comments'];
$_NameS=$_POST['NameSugerencia'];

$queryResult = mysql_query(
    "INSERT INTO beckys.sugerencias (NameSugerente, Sugerencias)
  VALUES('$_NameS', '$_Sugerencias')");
if (!$queryResult) {
    print($queryResult);
    die('Invalid query: ' . mysql_error());
}

echo "Gracias ".$_NameS." por sus comentarios!";

include "PiedePagina.html";