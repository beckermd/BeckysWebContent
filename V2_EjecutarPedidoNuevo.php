<?php
include "connection.php";

date_default_timezone_set('UTC');

define ('PRECIOR', 50);
define ('PRECIOS', 40);
$date = date('H:i, jS F');
$date2 = date('l jS F', strtotime('+5 days'));
$_CyQ = $_POST ['KGCyQ'];
$_JyQ = $_POST ['KGJyQ'];

$_CyP = $_POST ['KGCyP'];


$_KgTotal = $_CyP + $_CyQ + $_JyQ;
$_PrecioTotal = $_KgTotal * PRECIOR;
if ($_KgTotal == 0) {
    echo "<h2>Usted no ordeno nada</h2><br/>";
}

else {

    echo "<div class='central-margin'>
     <h2  class='font' style=color:red>Su pedido es:</h2><br/>";
            if ($_CyQ != 0) {

                 echo "<h4 class='font'>$_CyQ.  Kg de milanesas de Cebolla y Queso </h4>";
             }
            if($_JyQ!=0){
                echo "<h4 class='font'>$_JyQ.  Kg de milanesas de Jamon y Queso</h4>";
            }
            if($_CyP!=0) {
                echo "<h4 class='font'>$_CyP.   Kg de milanesas de Calabaza y Parmesano </h4>";
            }

    echo "<h4 class='font'> El total de su compra es: $_KgTotal Kg </h5>";
    echo "<h4 class='font'> El precio total es de: $" . number_format($_PrecioTotal, 2) . "<h4 class='font'> (no incluye delivery) </h4><br/>";

}
$queryResult = mysqli_query($con,
    "INSERT INTO beckys.PedidosNuevos(KGCyQ1,KGJyQ1,KGCyP1)
  VALUES('$_CyQ','$_JyQ','$_CyP')");
if (!$queryResult) {
    print($queryResult);
    die('Invalid query: ' . mysqli_error($con));
}
?>