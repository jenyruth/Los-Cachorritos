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
            <table class="table table-bordered btn-hover">
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
                <?php foreach ($entradas as $entradas) { ?>
                <tr>

                  <td><?php echo $entradas['idpostulante']; ?></td>
                  <td><?php echo $entradas['dni']; ?></td>
                  <td><?php echo $entradas['nomPost']; ?></td>
                  <td><?php echo $entradas['apePaterno']; ?></td>
                  <td><?php echo $entradas['apeMaterno']; ?></td>
                  <td><?php echo $entradas['telf']; ?></td>
                  <td><?php echo $entradas['correo']; ?></td>

                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-info"><span class="fa fa-eye"></span></a>
                      <a href="#" class="btn btn-warning"><span class="fa fa-edit"></span></a>
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
    </section>
  </div>