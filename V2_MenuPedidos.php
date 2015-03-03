<!DOCTYPE html>
<?php
$pageName = 'indexVs2.php';
include "connection.php";
?>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/StyleBeckys.css">

</head>
<body>


<form role="form" name="FormPedido" action='V2_EjecutarPedidoNuevo.php' method="post">
    <div class="row">
        <div class="col-lg-6">
            <div id="CyQ" class="input-group">
                <span class="input-group-btn">
                    <label><h6 class="font">Cebolla y Queso</h6></label>
                    <input type="checkbox" id="CyQ" onclick="showSelection('CebollayQueso')"/>
                    <div id="contentCyQ"></div>
                </span>
            </div>
            <div id="JyQ" class="input-group">
            <span class="input-group-btn">
                <label><h6 class="font">Jamon y Queso</h6></label>
                <input type="checkbox" id="JyQ" onclick="showSelection2('JamonyQueso')"/>
                 <div id="contentJyQ"></div>
            </div>
            <div id="CyP" class="input-group">
                </span>
            <span class="input-group-btn">
                <label><h6 class="font">Calabaza y Parmesano</h6></label>
                    <input type="checkbox" id="CyP" onclick="showSelection3('CalabazayParmesano')"/>
                    <div id="contentCyP"></div>
            </span>
            </div>
        </div>
        <!-- /.col-lg-6 -->
        <button id="createPedido" type="submit" class="btn btn-primary"
                style="position: absolute;"><h4>Encargar</h4></button>
</form>

<script type="text/javascript" language="javascript">
    vis = true;

    function showSelection(selectOp) {

        if (vis) {
            if (selectOp == 'CebollayQueso') {
                document.getElementById("contentCyQ").style.visibility = 'visible';
                document.getElementById("contentCyQ").innerHTML = "<h6><input size='2' type='text' name='KGCyQ' placeholder='kgs'/></h6>";
                vis = false;
                return;
            }
        }
        else {
            document.getElementById("contentCyQ").style.visibility = 'hidden';
            vis = true;
            return;
        }
    }
    visible1 = true;
    function showSelection2(selectOp) {
        if (visible1) {
            if (selectOp == 'JamonyQueso') {
                document.getElementById("contentJyQ").style.visibility = 'visible';
                document.getElementById("contentJyQ").innerHTML = "<h6><input size='2' type='text' name='KGJyQ' placeholder='kgs'/></h6>";
                visible1 = false;
                return;
            }
        }
        else {
            document.getElementById("contentJyQ").style.visibility = 'hidden';
            visible1 = true;
            return;
        }
    }

    visible2 = true;
    function showSelection3(selectOp) {
        if (visible2) {
            if (selectOp == 'CalabazayParmesano') {
                document.getElementById("contentCyP").style.visibility = 'visible';
                document.getElementById("contentCyP").innerHTML = "<h6><input size='2' type='text' name='KGCyP' placeholder='kgs'/></h6>";
                visible2 = false;
                return;
            }
        }
        else {
            document.getElementById("contentCyP").style.visibility = 'hidden';
            visible2 = true;
            return;
        }

    }
</script>
</body>