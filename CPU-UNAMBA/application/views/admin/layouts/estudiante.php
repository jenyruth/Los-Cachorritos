<br>
<br>
<br>
    <div>
        <h1 class="font-weight-bold text-center text-info">FICHA DE INSCRIPCION DEL POSTULANTE</h1>           
    </div>
    <hr class="featurette-divider bg-info">


<div class="container marketing">
    <label class="font-weight-bold text-center text-info">I. DATOS PERSONALES</label>
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
                                <label>Departamento</label>
                                <select id="departamentos" name="departamentos" class="form-control">
                                    <?php
                                    echo $options_departamentos;
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="form-group">
                                <label>Provincia</label>
                                <select  id="provincias" name="provincias" class="form-control" disabled="">
                                    <option>Seleccione</option>
                                    <?php
                                    echo $options_provincias;
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Distrito</label>
                                <select id="distritos" name="distritos" class="form-control" disabled="">
                                    <option>Seleccione</option>
                                </select>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
            </div>
        </div>


            <hr class="featurette-divider bg-primary">
           
           <!--CASO DATOS DE ESTUDIO-->
            <label class="font-weight-bold text-center text-info">II. ESTUDIOS SECUNDARIOS</label>
            
            <div class="alert alert-dark" role="alert"> 
            <div class="form-group">
                    <div class="row">
                        <div class="col-xs-5 col-sm-4">
                            <label class="font-weight-bold text-center text-black" >COLEGIO DE PROCEDENCIA</label>
                            <div class="checkbox">
                                <label><input type="checkbox" id="estatal" name="estatal">Estatal</label>
                                <label><input type="checkbox" id="privado" name="privado">Privado</label>
                            </div>
                            <div class="form-group">
                                <label>Nombre del colegio</label>
                                <input type="text" id="nombrecolegio" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-5">
                            <label class="font-weight-bold text-center text-black">LUGAR DE NACIMIENTO</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Departamento</label>
                                        <select id="departamento" name="departamento" class="form-control">
                                        <option>Apurimac</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label>Provincia</label>
                                        <select id="provincia" name="provincia" class="form-control">
                                        <option>Abancay</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Distrito</label>
                                        <select id="distrito" name="distrito" class="form-control">
                                            <option>Abancay</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-xs-2 col-sm-2">
                            <div class="form-group">
                                <label>Año de Egreso </label>
                                <input type="year" id="anioEgreso" name="anioEgreso" class="form-control">
                            </div>
                        </div>
                    </div>
            </div>
            </div>

            <hr class="featurette-divider bg-danger">
            

            <!--CASO CARRERA PROFESIONAL-->
            <label class="font-weight-bold text-center text-info">III. CARRERA A LA QUE POSTULA</label>
            <div class="alert alert-dark" role="alert"> 
            <div class="form-group">
                    <div class="row">
                        <div class="col-xs-4 col-sm-12">
                            <label>Seleccione la Carrera a Postular</label>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Facultad</label>
                                        <select id="facultad" name="facultad" class="form-control">
                                            <option>Ingenieria</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">

                                    <div class="form-group">
                                        <label>Carrera Profesional</label>
                                        <select id="carreaProfesional" name="carreaProfesional" class="form-control">
                                            <option>Ingenieria Civil</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </fieldset>
    </form>
</div>
