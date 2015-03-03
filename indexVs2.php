<!DOCTYPE html>
<?php
$pageName = 'indexVs2.php';
include "connection.php";
include "Encabezado.html";

?>

<div class="panel-body">
    <!-- Para cambiar la posicion del cuadro utilice el archivo bootstrp-theme.css en el "panel-body" container:after{clear:both}.row{margin-right:-15px;margin-left:15px}.-->
    <div class="central-margin2">
        <h1><span class="font"> Recetas</span></h1>
    </div>
    <div class="central-margin3">

        <div class="row">
            <div class="col-md-3 col-lg-3">
                <ul>
                    <li class="list-group-item"><span class="badge">12</span>

                        <h3>
                            <a href="Ensaladas.html">
                                <span class="font">Ensaladas </a></h3></li>
                    </span>
                    <li class="list-group-item"><span class="badge">5</span>

                        <h3 class="font">
                            <a href="PlatosCalientes.html"> <span class="font">Platos Calientes</span></a>
                        </h3></li>
                    <li class="list-group-item"><span class="badge">12</span>

                        <h3 class="font">
                            <a href="apettizer.html"> <span class="font">Apettizerr</span></a>
                        </h3>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-lg-4">
                <img  id="image1"src="img/milanesas.jpg" width=360
                     height=340 class="img-thumbnail"/>
            </div>
            <div class="col-md-3 col-lg-4">
                <img  id="image2" src="img/milanesas.jpg" width=360
                     height=340 class="img-thumbnail"/>
            </div>
        </div>
    </div>
</div>
</div>
<hr/>
<div class="central-margin">
    <form id="pedidos" action='createPedido.php' method="post">
        <div class="row">
            <div class="col-6 col-sm-6 col-lg-4">
                <div class="panel panel-primary">
                    <div class="panel-margin">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <h1 class="font">Pedidos</h1>
                                </div>
                                <div class="col-md-4 col-md-offset-4">
                                    <img src="img/pedidos.jpg" alt="220X90"
                                         class="img-thumbnail">
                                </div>
                            </div>
                            <div class="input-group">
                                <br/>

                                <div class="input-group">
                                    <span class="input-group-addon">Simples</span><label>
                                        <input
                                            type="number" class="form-control" name="Simple"
                                            placeholder="1Kg">
                                    </label>
                                </div>
                                <br/>

                                <div class="input-group">
                                    <span class="input-group-addon">Cebolla y Queso</span><label>
                                        <input
                                            type="number" class="form-control" name="CQ" placeholder="1Kg">
                                    </label>
                                </div>
                                <br/>

                                <div class="input-group">
                                    <span class="input-group-addon">Jam&oacuten y Queso</span><label>
                                        <input
                                            type="number" class="form-control" name="JyQ"
                                            placeholder="1Kg">
                                    </label>
                                </div>
                                <br/>

                                <div class="input-group">
									<span class="input-group-addon">Tomate, Aceiutunas y
										Queso</span><label>
                                        <input type="number" class="form-control" name="TAyQ"
                                               placeholder="1Kg">
                                    </label>
                                </div>
                                <br/>

                                <div class="input-group">
                                    <span class="input-group-addon">Calabaza y Parmesano</span><label>
                                        <input
                                            type="number" class="form-control" name="CyP"
                                            placeholder="1Kg">
                                    </label>
                                </div>
                                <br/>

                                <div class="input-group">
									<span class="input-group-addon">Jam&oacuten, Queso y
										Roquefort</span><label>
                                        <input type="number" class="form-control" name="JQyR"
                                               placeholder="1Kg">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-6 col-sm-6 col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <h1 class="font">Envio</h1>
                        </div>
                        <br/>
                         <div class ="set-margin">
                             <div class="input-group-addon">
                                 <b>Nombre y Apellido</b>
                             </div>

                             <input type="text" name="Name"
                                    placeholder="NombreyApellido" class="form-control">
                             <br/>

                        <div class="input-group-addon">
                            <b>Direcci&oacuten</b>
                        </div>

                        <input type="text" name="Adress"
                               placeholder="Calle/Num.Barrio/Ciudad" class="form-control">

                        <br/>

                        <div class="input-group-addon">
                            <b>Direcci&oacuten2</b>
                        </div>

                        <input type="text" name="Adress2" class="form-control">
                        <br/>

                        <div class="input-group-addon">
                            <b>Tel&eacutefono/e-mail</b>
                        </div>

                        <input type="tel" name="Phone" placeholder="22115-XXX-XXXX"
                               class="form-control">
                        <br/>
                             <br/>
                             <br/>

                         </div>
                    </div>

                </div>

                <div class="col-6 col-sm-6 col-lg-2">
                    <div class="panel panel-primary">
                        <div class="set-margin">
                            <h3 class="font">Horario de Entrega</h3>

                            <div>
                                <img src="img/clock.gif" width=50 height=50
                                     class="img-thumbnail"> <br/>
                            </div>
                            <h4>Maniana(10am-1pm)</h4>
                            <label>
                                <input type=checkbox name="Entrega_Maniana" value="10am-1pm">
                            </label>
                            <br/>
                            <h4>Tarde (1pm-6pm)</h4>
                            <label>
                                <input type=checkbox name="Entrega_Tarde" value="1pm-6pm">
                            </label>
                            <br/>
                            <h4>Noche (6pm-9pm)</h4>
                            <label>
                                <input type=checkbox name="Entrega_Noche" value="6pm-9pm">
                            </label>
                            <br/>
                        </div>
                    </div>
                </div>

        </div>
</div>
<div>

    <button id="createPedido" type="submit" class="btn btn-primary"
            style="position: absolute; TOP: 950px; LEFT: 1010px; HEIGHT: 80px"><h4>Encargar</h4></button>
</div>
</div>
</div>
</form>
<br/>

<form id="Sugerencias" class="col-lg-12"
      action='CreateSugerencias.php' method="post">
    <div class="pie-margin">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h2 class="font">Sugerencias/Comentarios</h2>
                        <input type="text" name="comments" class="form-control input-lg">

                        <h3 class="font">Nombre</h3>
                        <!--Comentario de prueba-->
                        <input type="text" name="NameSugerencia" class="form-control"></br>
                        <br/>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
</form>
</div>
</div>

</body>
<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
</html>
<?php

include "PiedePagina.html";
?>