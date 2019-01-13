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
              <table id="lista" class="table table-bordered btn-hover">
                <thead>
                  <th>Nro</th>
                  <th>DNI</th>
                  <th>Nombres</th>
                  <th>Apellido Paterno</th>
                  <th>Apellido Materno</th>
                  <th>Telf.</th>
                  <th>Correo</th>
                  <th>Opciones</th>
                </thead>
                <tbody>
                  <?php 
                  $i=0;
                  foreach ($entradas as $entradas) { 
                  $i++;
                  ?>
                  <tr>

                    <td><?php echo $i; ?></td>
                    <td><?php echo $entradas->dni; ?></td>
                    <td><?php echo $entradas->nomPost; ?></td>
                    <td><?php echo $entradas->apePaterno; ?></td>
                    <td><?php echo $entradas->apeMaterno; ?></td>
                    <td><?php echo $entradas->telf; ?></td>
                    <td><?php echo $entradas->correo; ?></td>
                    <?php $dataPostulante = $entradas->dni."*".$entradas->nomPost."*".$entradas->apePaterno."*".$entradas->apeMaterno."*".$entradas->sexo."*".$entradas->domicilio."*".$entradas->telf."*".$entradas->correo."*".$entradas->fechaNac."*".$entradas->nomCarrera."*".$entradas->Distrito."*".$entradas->nomColegio;?>

                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-info btn-Postulante" data-toggle="modal" data-target="#modal-default" value="<?php echo $dataPostulante?>"><span class="fa fa-eye"></span></a></button>
                        <a href="<?php echo base_url();?>Estadistica/editarPostulante/<?php echo $entradas->idpostulante?>" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                        <a href="#" class="btn btn-danger"><span class="fa fa-remove"></span></a>
                      </div>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
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