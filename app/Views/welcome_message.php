<?php 
    $json = json_encode($datos);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Crud Historial uf</title>
  </head>
  <body>
    
    <div class="container">
        <!--Grafico de Uf -->
        <button class="btn btn-info"  id="miBoton">Ver/Ocultar Grafico</button>
        <div id="miDiv" style="display: none;">
            <label for="start_date">Fecha de inicio:</label>
            <input type="date" id="start_date">
            <label for="end_date">Fecha de término:</label>
            <input type="date" id="end_date">
            <canvas id="myChart"></canvas>
        </div>
        <hr>
        
        <!--Agregado nuevos datos -->
        <h1>Crud Historial Uf</h1>
        <div class="row">
            <div class="col-sm-12">
                <form action="<?php echo base_url().'/crear' ?>" method="post">
                    <label for="nombreIndicador">Nombre Indicador</label>
                    <input type="text" name="nombreIndicador" id="nombreIndicador" class="form-control">
                    <label for="codigoIndicador">Codigo Indicador</label>
                    <input type="text" name="codigoIndicador" id="codigoIndicador" class="form-control">
                    <label for="unidadMedidaIndicador">Unidad de Medida Indicador</label>
                    <input type="text" name="unidadMedidaIndicador" id="unidadMedidaIndicador" class="form-control">
                    <label for="valorIndicador">Valor Indicador</label>
                    <input type="text" name="valorIndicador" id="valorIndicador" class="form-control">
                    <label for="fechaIndicador">Fecha Indicador</label>
                    <input type="date" name="fechaIndicador" id="fechaIndicador" class="form-control">
                    <label for="tiempoIndicador">Tiempo Indicador</label>
                    <input type="date" name="tiempoIndicador" id="tiempoIndicador" class="form-control">
                    <label for="origenIndicador">Origen Indicador</label>
                    <input type="text" name="origenIndicador" id="origenIndicador" class="form-control">
                    <br>
                    <button class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
        <hr>
        <!--Listado historio del Uf -->
        <h2>Listado Historico del Uf</h2>
        <div class="row">
            <div class="col-sm-12">
                <div class="table table-responsive">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>Nombre Indicador</th>
                            <th>Codigo Indicador</th>
                            <th>Unidad de Medida Indicado</th>
                            <th>Valor Indicador</th>
                            <th>Fecha Indicador</th>
                            <th>Tiempo Indicador</th>
                            <th>Origen Indicador</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    <?php foreach($datos as $key): ?>
                        <tr>
                            <td><?php echo $key->nombreIndicador ?></td>
                            <td><?php echo $key->codigoIndicador ?></td>
                            <td><?php echo $key->unidadMedidaIndicador ?></td>
                            <td><?php echo $key->valorIndicador ?></td>
                            <td><?php echo $key->fechaIndicador ?></td>
                            <td><?php echo $key->tiempoIndicador ?></td>
                            <td><?php echo $key->origenIndicador ?></td>
                            <td><a href="<?php echo base_url().'/obtenerid/'.$key->id ?>" class="btn btn-warning btn-sm">Editar</a></td>
                            <td><a href="<?php echo base_url().'/eliminar/'.$key->id ?>" class="btn btn-danger btn-sm">Eliminar</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">

        //mensajes de respuesta al crud
        let mensaje = '<?php echo $mensaje ?>';
        if(mensaje == '1'){
            swal(':D','Agregado con exito','success'); 
        }else if(mensaje == '0'){
            swal(':C','Fallo al agregar','error'); 
        }else if(mensaje == '2'){
            swal(':D','Se actualizo de forma correcta','succes'); 
        }else if(mensaje == '3'){
            swal(':C','Fallo al actualizar','error'); 
        }else if(mensaje == '4'){
            swal(':D','Eliminado con exito','success'); 
        }else if(mensaje == '5'){
            swal(':C','Fallo al eliminar','error'); 
        }

        //permite ocultar y mostrar el grafico
        document.getElementById('miBoton').addEventListener('click', function() {
            var miDiv = document.getElementById('miDiv');
            if (miDiv.style.display === 'none') {
                miDiv.style.display = 'block';
            } else {
                miDiv.style.display = 'none';
            }
        }); 

        //datos iniciales para el grafico
        var array_js = <?php echo $json; ?>;
        const fechas = array_js.map(d => d.fechaIndicador);
        const valores = array_js.map(d => d.valorIndicador);

        //renderiza el gradico
        const ctx = document.getElementById('myChart');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
            labels: fechas,
            datasets: [{
                label: 'Valor del Indicador',
                data: valores,
                borderColor: 'rgba(255, 99, 132, 1)',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderWidth: 1
            }]
            },
            options: {
            scales: {
                yAxes: [{
                    ticks: {
                    beginAtZero: true
                    }
                }]
            }
            }
        });

        //para filtrar por fecha
        var start_date = document.getElementById('start_date');
        var end_date = document.getElementById('end_date');
        start_date.addEventListener('change', filterData);
        end_date.addEventListener('change', filterData);
        
        function filterData(){
            var startDate = start_date.value;
            var endDate = end_date.value;
            var filteredData = [];
            var filteredLabels = [];
            for(var i=0; i<fechas.length;i++){
                if(fechas[i] >= startDate && fechas[i] <= endDate){
                    filteredData.push(valores[i]);
                    filteredLabels.push(fechas[i]);
                }
            }
            if(filteredData != undefined){
                chart.data.datasets[0].data = filteredData;
                chart.data.labels = filteredLabels;
                chart.update();
            }
        }
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>