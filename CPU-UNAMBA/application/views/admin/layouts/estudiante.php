<br>
<br>
<br>
    <div>
        <h1 class="font-weight-bold text-center text-info">FICHA DE INSCRIPCION DEL POSTULANTE</h1>           
    </div>
    <hr class="featurette-divider bg-info">


<div class="container marketing">
    <label>I. DATOS PERSONALES</label>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script type="text/javascript">
                    var base_url="<?php echo base_url()?>";
                    $(function(){
                        $('#departamentos').change(function(){
                            var id_departamento = $('#departamentos').val();

                            $.post(base_url+'index.php/ajax/provincias/getProvincia',{
                                id_departamento:id_departamento
                            },function(data){
                                $('#provincias').html(data);
                                $('#provincias').removeAttr('disabled');
                            });
                        });
                    });
                </script>


                <script type="text/javascript">
                        var base_url="<?php echo base_url()?>";

                        $(function(){
                            $('#provincias').change(function(){
                                var id_provincia = $('#provincias').val();
                                alert (id_provincia);
                                $.post(base_url+'index.php/ajax/distritos/getDistrito',{
                                    id_provincia:id_provincia
                                },function(data){
                                    $('#distritos').html(data);
                                    $('#distritos').removeAttr('disabled');
                                });
                            });
                        });
                </script>

      <!--FORMULARIO -->
    <form action="<?php echo base_url();?>registrarDatos" method="POST">
        
        <fieldset>
            <div class="alert alert-dark" role="alert">
                    <div class="form-group">
                        <label>Apellido Paterno</label>
                        <input type="text" id="apellidoPaterno" name="apellidoPaterno" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Apellido Materno</label>
                        <input type="text" id="apellidoMaterno" name="apellidoMaterno" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control">
                    </div>
            <div class="alert alert-dark" role="alert"> 

           <!--CASO DATOS PERSONALES-->
            <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3 col-sm-3">
                            <label>Sexo</label>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="masculino" name="masculino">Masculino</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" id="femenino" name="femenino">Femenino</label>
                                </div>
                        </div>
                        <div class="col-xs-3 col-sm-3">
                            <label>Documento de identidad</label>
                            <div class="checkbox">
                                <label><input type="checkbox" id="dni" name="dni">DNI</label>
                                <label><input type="checkbox" id="le" name="le">L.E</label>
                                <label><input type="checkbox" id="lm" name="lm">L.M</label>
                                <label><input type="checkbox" id="bol" name="bol" >Bol</label>
                                <label><input type="checkbox" id="part" name="part">Part</label>
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
                                        <input type="text" id="domicilio" name="domicilio"  class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label">Correo Eletronico</label>
                                        <input type="text" id="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Telefono</label>
                                        <input type="text" id="telefono"name="telefono"  class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
           </div>

        <!--<!--CASO PROCEDENCIA-->
        <div class="alert alert-dark" role="alert">
            <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3 col-sm-3">
                            <div class="form-group">
                                <label>Edad</label>
                                <input type="text" id="edad" name="edad" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3">
                             <div class="form-group">
                                <label>Fecha de Nacimiento</label>
                                <input type="date" id="fechaNac" name="fechaNac" class="form-control">
                            </div>
                        </div>
                        
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-xs-4 col-sm-5">
                            <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="disabledSelect">Departamento</label>
                                <select name="departamentos" id="departamentos" class="form-control">
                                    <?php
                                    echo $options_departamentos;
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="disabledSelect">Provincia</label>
                                <select name="provincias" id="provincias" class="form-control" disabled="">
                                    <option>Selccione.</option>
                                    <?php
                                    echo $options_provincias;
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="disabledSelect">Distrito</label>
                                <select name="distritos" id="distritos" class="form-control" disabled="">
                                    <option>Selccione.</option>
                                </select>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
            </div>
        </div>
            <hr class="featurette-divider">
           
            <label for="disabledTextInput">II. ESTUDIOS SECUNDARIOS</label>
            <!--caso datos de estudio-->
            <div class="alert alert-dark" role="alert"> 
            <div class="form-group">
                <label for="disabledTextImput"></label>
                <nav class="navbar navbar-default">
                    <div class="row">
                        <div class="col-xs-5 col-sm-4">
                            <label for="disabledTextImput">Colegio de Procedencia</label>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">Nacinal
                                </label>
                                <label>
                                    <input type="checkbox">Privado
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="disabledTextInput">Nombre de la Institucin</label>
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-5">
                            <label for="disabledTextInput">Lugar de Nacimiento</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="disabledSelect">Departamento</label>
                                        <select id="disabledSelect" class="form-control">
                                            <option>Disabled select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label for="disabledSelect">Provincia</label>
                                        <select id="disabledSelect" class="form-control">
                                            <option>Disabled select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="disabledSelect">Distrito</label>
                                        <select id="disabledSelect" class="form-control">
                                            <option>Disabled select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-xs-2 col-sm-2">
                            <div class="form-group">
                                <label for="disabledSelect">año de Egreso </label>
                                <input type="year" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                            </div>
                        </div>
                    </div>

                </nav>
            </div>
            </div>
            <hr class="featurette-divider">
            
            <label for="disabledTextInput">III. Carrera a la que postula</label>
            <!--caso carrea-->
            <div class="alert alert-dark" role="alert"> 
            <div class="form-group">
                <label for="disabledTextImput"></label>
                <nav class="navbar navbar-default">
                    <div class="row">
                        <div class="col-xs-4 col-sm-12">
                            <label for="disabledTextInput">Seleccione la Carrera a Postular</label>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="disabledSelect">Facultad</label>
                                        <select id="disabledSelect" class="form-control">
                                            <option>Disabled select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">

                                    <div class="form-group">
                                        <label for="disabledSelect">Carrere</label>
                                        <select id="disabledSelect" class="form-control">
                                            <option>Disabled select</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>

                </nav>
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
        
    </form>
    
</div>
<hr class="featurette-divider">
<br>