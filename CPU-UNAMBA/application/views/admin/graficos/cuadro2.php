<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Postulantes
        <small>Cuadro estadistico</small>
      </h1>
    </section>
    <section class="content-header">
      <div class="box box-solid">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <!--a href="#" id="btnActualizar">Actualizar</a-->
              <input type="button" id="btnActualizar" class="btn btn-info" value="Actualizar">
            </div>
          </div>
        </div>
      </div>

      <div id="contenedor_grafico">
        <canvas id="myChart" width="100" height="40"></canvas>
      </div>
      

      <script>

      var carreras = [];
      var postulantes = [];
      var color = [];
      var borde = [];

      $('#btnActualizar').click(function(){
        $.post("<?php echo base_url();?>Estadistica/numeroPostulante",
          function(data){
            var obj = JSON.parse(data);

            carreras = [];
            postulantes = [];
            color = [];
            borde = [];

            $.each(obj, function(i,item){
              var a = Math.random() * 255;
              a = Math.round(a);
              var b = Math.random() * 255;
              b = Math.round(b);
              var c = Math.random() * 255;
              c = Math.round(c);

              carreras.push(item.nomCarrera);
              postulantes.push(item.Numero);
              color.push('rgba('+a+','+b+','+c+',0.5)');
              borde.push('rgba('+a+','+b+','+c+',2)');
            });


              $("#myChart").remove();
              $("#contenedor_grafico").append('<canvas id="myChart" width="100" height="40"></canvas>');


              var ctx = $("#myChart");
              var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                      labels: carreras,
                      datasets: [{
                          label: 'Número de postulantes',
                          data: postulantes,
                          backgroundColor: color,
                          borderColor: borde,
                          borderWidth: 2
                      }]
                  },
                  options: {
                      scales: {
                          yAxes: [{
                              ticks: {
                                  beginAtZero:true
                              }
                          }]
                      }
                  }
              });
          });
      });

      </script>
    </section>
    <!-- /.content -->
  </div>