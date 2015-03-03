<!DOCTYPE html>
<?php
$pageName = 'indexVs2.php';
include "connection.php";
?>
<html>

<head lang="en">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<script>

    var counter = 0;

    function insertarElementoPedido() {
        counter++;

        var elementoAgregado = "<label id='elementoId" + counter + "'>" + $('#Variedades>option:selected').text() + "</label>" +
            "<label id='elementoKg" + counter + "'>&nbsp;" + $('#Cantidades>option:selected').text() + "</label></br>";
        $('#elementosPedido').append(elementoAgregado);
//        var select=   document.getElementById("elementosPedido");
//        document.write(select.selectedIndex.text());
        //        do {

        //       }
//       while (elementoAgregado != ){
//              alert("Esa variedad ya fue agregada");
//          }

    }
</script>

<div class="col-lg-4">

    <select id="Variedades">
        <option>Elija la variedad</option>
        <option value="CyQ" id="CebollayQueso">Cebolla y Queso</option>
        <option value="JyQ" id="JamonyQueso">Jamon y Queso</option>
        <option value="CyP" id="CalabazayParmesano">Calabaza y Parmesano</option>
    </select>

    <select id="Cantidades">
        <option value="1">1 Kg</option>
        <option value="2">2 Kg</option>
        <option value="3">3 Kg</option>
        <option value="4">4 Kg</option>
        <option value="5">5 Kg</option>
        <option value="6">6 Kg</option>
        <option value="7">7 Kg</option>
    </select>
    <input type="button" value="Agregar" onclick="insertarElementoPedido()">

    <p>Usted ordeno:</p>

    <div id="elementosPedido">
    </div>


    <button id="createPedido" type="submit">Encargar</button>
</body>

</html>
