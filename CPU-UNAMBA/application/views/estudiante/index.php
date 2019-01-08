<br>
<br>
<!--CUERPO-->
<div class="container p-3">
        <div>
            <h1 class="font-weight-bold text-center text-info">FICHA DE INSCRIPCION DEL POSTULANTE</h1>           
        </div>
       <hr class="featurette-divider bg-info">


<div class="container">
    <form action="<?php echo base_url();?>mantenimiento/categorias/store" method="POST">
       <!--caso datos personales-->
       <fieldset>
               <legend>I. Datos Personales</legend>
                        <div class="form-group">
                                <label>Apellido Paterno</label>
                                <input type="text" id="apellidoPaterno" name="apellidoPaterno" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Apellido Materno</label>
                            <input type="text" id="apellidoMaterno" name="apellidoMaterno" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Nombres</label>
                            <input type="text" id="nombre" name="nombre" class="form-control">
                        </div>
                    
                        <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-3 col-sm-3">
                                        <label for="sexo">Sexo:</label>
                                            <label><input type="checkbox" id="masculino" name="masculino">Masculino</label>
                                            <label><input type="checkbox" id="femenino" name="femenino">Femenino</label>
                                    </div>

                                    <div class="col-xs-3 col-sm-3">
                                        <label>Documento de identidad</label>
                                        <div class="checkbox">
                                            <label><input type="checkbox" id="dni" name="dni" >DNI</label>
                                            <label><input type="checkbox" id="le" name="le">L.E</label>
                                            <label><input type="checkbox" id="lm" name="lm">L.M</label>
                                            <label><input type="checkbox" id="lm" name="lm">Bol.</label>
                                            <label><input type="checkbox" id="lm" name="lm">Part.</label>
                                        </div>

                                        <div class="form-group">
                                            <label>N° del documento</label>
                                            <input type="text" id="numeroDocumento" name="numeroDocumento" class="form-control">
                                        </div>
                                    </div>

                                    <div class="clearfix visible-xs-block"></div>
                                    <div class="col-xs-4 col-sm-5">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Domicilio</label>
                                                    <input type="text" id="domicilio" name="domicilio" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label>Correo Eletronico</label>
                                                    <input type="text" id="email" name="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Telefono</label>
                                                    <input type="text" id="telefono"name="telefono" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>