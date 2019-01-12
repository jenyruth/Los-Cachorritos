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
      <canvas id="myChart" width="100" height="40"></canvas>

      <script>
      var carreras = ["Ing. Minas", "Ing. Civil", "Ing. Agroindustrias", "Ing. Sistemas", "Medicina Veterinaria", "Administracion", "Ciencias Políticas", "Educación Inicial"];
      var postulantes = [12, 19, 3, 5, 2, 3, 4, 12]; 


/*        $(function(){

            $('#carrera').change(function(){
                var id_departamento = $('#carrera').val();

                $.post("<?php echo base_url()?>",{
                    id_departamento:id_departamento
                },function(data){
                    $('#provincias').html(data);
                    $('#provincias').removeAttr('disabled');



                });

            });

        });*/        
      

      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: carreras,
              datasets: [{
                  label: 'Número de postulantes',
                  data: postulantes,
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                      'rgba(153, 102, 255, 0.2)',
                      'rgba(255, 159, 64, 0.2)',
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                  ],
                  borderColor: [
                      'rgba(255,99,132,1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)',
                      'rgba(255,99,132,1)',
                      'rgba(54, 162, 235, 1)'
                  ],
                  borderWidth: 1
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
      </script>
      }
    </section>
    <!-- /.content -->
  </div>