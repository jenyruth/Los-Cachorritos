<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ing. Informatica y Sistemas
        <small>Postulantes</small>
      </h1>
    </section>
    <!-- /.content -->
    <section class="content">
      <div class="box box-solid">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
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
                                <select id="distrito"  name="distrito" class="form-control">
                                    <option>Abancay</option>
                                </select>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>

                
            </div>

 </fieldset>


           <hr class="featurette-divider bg-primary">

            <!--caso datos de estudio-->
        <fieldset>
         <legend>II. Estudios Secundarios </legend>
            <div class="form-group">
                    <div class="row">
                        <div class="col-xs-5 col-sm-4">
                            <label>Colegio de Procedencia</label>
                            <div class="checkbox">
                                <label><input type="checkbox" id="estatal" name="estatal">Estatal</label>
                                <label><input type="checkbox" id="privado" name="privado">Privado</label>
                            </div>
                            <div class="form-group">
                                <label>Nombre del Colegio</label>
                                <input type="text" id="nombrecolegio" name="nombrecolegio" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-5">
                            
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

    </fieldset>

      <hr class="featurette-divider bg-danger">
            
         <!--caso carrea-->
         <fieldset> 
                <legend>III. Carrera a la que postula</legend>
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
          </fieldset>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!--Ventana Modal-->
  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Información del postulante</h4>
        </div>
        <div class="modal-body">
          
        </div>
        <div class="modal-footer">
          <!--button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Salir</button-->
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->