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