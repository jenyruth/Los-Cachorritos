<br>
<br>
<br>
<br>

<div class="container marketing">
   
    
    <label for="disabledTextInput">I. DATOS PERSONALES</label>

    

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


    <form>
        
        <fieldset >
            <div class="alert alert-dark" role="alert">
            <div class="form-group">
                <label for="disabledTextInput">Apellido Paterno</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="ingrese apellido">
            </div>
            <div class="form-group">
                <label for="disabledTextInput">Apellido Materno</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="ingrese apellido">
            </div>
            <div class="form-group">
                <label for="disabledTextInput">Nombre</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="ingrese nombre">
            </div>
            <div class="form-group">
              <label for="disabledTextInput">Apellido Paterno</label>
              <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
            </div>
            </div>
            <div class="alert alert-dark" role="alert">    
           <!--caso datos personales-->
            <div class="form-group">
                <label for="disabledTextImput"></label>
                <nav class="navbar navbar-default">
                    <div class="row">
                        <div class="col-xs-3 col-sm-3">
                            <label for="disabledTextImput">sexo</label>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">Masculino
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">Femenino
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3">
                            <label for="disabledTextImput">Documento de identidad</label>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">DNI
                                </label>
                                <label>
                                    <input type="checkbox">L.E
                                </label>
                                <label>
                                    <input type="checkbox">L.M
                                </label>
                                <label>
                                    <input type="checkbox">Bol
                                </label>
                                <label>
                                    <input type="checkbox">Part
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="disabledTextInput">N° del documento</label>
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                            </div>
                        </div>

                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-xs-4 col-sm-5">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="disabledSelect">Domicilio</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                    </div>

                                    <div class="form-group">
                                        <label for="disabledSelect">Correo Eletronico</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="disabledSelect">Telefono</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </nav>
            </div>
            </div>
        <!--caso de procedencia-->
        <div class="alert alert-dark" role="alert">
            <div class="form-group">
                <label for="disabledTextImput"></label>
                <nav class="navbar navbar-default">
                    <div class="row">
                        <div class="col-xs-3 col-sm-3">
                            <div class="form-group">
                                <label for="disabledTextInput">Edad</label>
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3">
                             <div class="form-group">
                                <label for="disabledTextInput">Fecha de Nacimiento</label>
                                <input type="date" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                            </div>
                        </div>
                        <!-- Optional: clear the XS cols if their content doesn't match in height -->
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-xs-4 col-sm-5">
                             <label for="disabledTextInput">Lugar de Nacimiento</label>
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

                </nav>
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