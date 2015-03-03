
<?php
include 'connection.php';
include "Encabezado.html";



date_default_timezone_set ( 'UTC' );

define ( 'PRECIOR', 50 );
define ( 'PRECIOS', 40 );
$date= date('H:i, jS F');
$date2= date('l jS F', strtotime('+5 days'));
$_S = $_POST ['Simple'];
$_CyQ = $_POST ['CQ'];
$_JyQ = $_POST ['JyQ'];
$_TAyQ = $_POST ['TAyQ'];
$_CyP = $_POST ['contentCyP'];
$_JQyR = $_POST ['JQyR'];

$_Name = $_POST ['Name'];
$_Adress = $_POST ['Adress'];
$_Adress2 = $_POST ['Adress2'];
$_Phone = $_POST ['Phone'];

/*
 *   UserID INT PRIMARY KEY NOT NULL,
  Name varchar (255) NOT NULL,
  Adress varchar (255) NOT NULL,
  Adress2 varchar (255) NOT NULL,
  Phone INT NOT NULL,
  KGCYQ INT NOT NULL,
  KGJYQ INT NOT NULL,
  KGTAYQ INT NOT NULL,
  KGCYP INT NOT NULL,
  KGJQYR INT NOT NULL
 */

// VAriable de la Planilla de Horario

$_Maniana = $_POST ['Entrega_Maniana'];
$_Tarde = $_POST ['Entrega_Tarde'];
$_Noche = $_POST ['Entrega_Noche'];
$_KgTotal = $_JQyR + $_CyP + $_CyQ + $_JyQ + $_TAyQ +$_S;
$_PrecioTotal = $_KgTotal * PRECIOR;
if ($_KgTotal == 0) {
    echo "<h2>Usted no ordeno nada</h2><br/>";
} else {

    echo  "<div class='central-margin'>
     <h2  class='font' style=color:red>Su pedido es:</h2><br/>
    <h4 class='font'>$_S.  Kg de milanesas Simples </h4>";
    echo "<h4 class='font'>$_CyQ.  Kg de milanesas de Cebolla y Queso </h4>";
    echo "<h4 class='font'>$_JyQ.  Kg de milanesas de Jamon y Queso</h4>";
    echo "<h4 class='font'>$_TAyQ.  Kg de milanesas de Tomate Jamon y Queso </h4>";
    echo "<h4 class='font'>$_CyP.   Kg de milanesas de Calabaza y Parmesano </h4>";
    echo "<h4 class='font'>$_JQyR.  Kg de milanesas de Jamon, Queso y Roquefort</h4>";
    echo "<h4 class='font'> El total de su compra es: $_KgTotal Kg </h5>";
    echo "<h4 class='font'> El precio total es de: $". number_format ( $_PrecioTotal, 2 ) . "<h4 class='font'> (no incluye delivery) </h4><br/>";

}

if ($_Maniana) {
    echo "<h5>La entrega se realizara el dia $date2  en el horario:  $_Maniana</h5>";
}
if ($_Tarde) {
    echo "<h5 class='font'>La entrega se realizara el dia $date2  en el horario: $_Tarde </h5>";
}
if ($_Noche) {
    echo "<h5 class='font'>La entrega se realizara el dia $date2 en el horario:  $_Noche </h5>";
}

//Comuniacion con la base de datos.
$queryResult = mysql_query(
    "INSERT INTO beckys.pedidos (Name,Adress,Adress2,Phone,KGJYQ,KGTAYQ,KGCYP,KGJQYR,KGSimples,KGCYQ)
  VALUES('$_Name', '$_Adress','$_Adress2' ,'$_Phone','$_JyQ','$_TAyQ','$_CyP','$_JQyR', '$_S','$_CyQ')");
if (!$queryResult) {
    print($queryResult);
    die('Invalid query: ' . mysql_error());
}


include "PiedePagina.html";
