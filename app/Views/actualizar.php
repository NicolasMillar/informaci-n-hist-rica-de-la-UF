<?php
  
  $id = $datos[0]['id'];
  $nombreIndicador = $datos[0]['nombreIndicador'];
  $codigoIndicador = $datos[0]['codigoIndicador'];
  $unidadMedidaIndicador = $datos[0]['unidadMedidaIndicador'];
  $valorIndicador = $datos[0]['valorIndicador'];
  $fechaIndicador = $datos[0]['fechaIndicador'];
  $tiempoIndicador = $datos[0]['tiempoIndicador'];
  $origenIndicador  = $datos[0]['origenIndicador'];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Editar datos</title>
  </head>
  <body>
    
    <div class="container">
        <h1>Editar Datos</h1>
        <div class="row">
            <div class="col-sm-12">
                <form action="<?php echo base_url().'/actualizar' ?>" method="post">
                    <input type="text" name="id" id="id" hidden="" value="<?php echo $id ?>">
                    <label for="nombreIndicador">Nombre Indicador</label>
                    <input type="text" name="nombreIndicador" id="nombreIndicador" class="form-control" value="<?php echo $nombreIndicador ?>">
                    <label for="codigoIndicador">Codigo Indicador</label>
                    <input type="text" name="codigoIndicador" id="codigoIndicador" class="form-control" value="<?php echo $codigoIndicador ?>">
                    <label for="unidadMedidaIndicador">Unidad de Medida Indicador</label>
                    <input type="text" name="unidadMedidaIndicador" id="unidadMedidaIndicador" class="form-control" value="<?php echo $unidadMedidaIndicador ?>">
                    <label for="valorIndicador">Valor Indicador</label>
                    <input type="text" name="valorIndicador" id="valorIndicador" class="form-control" value="<?php echo $valorIndicador ?>">
                    <label for="fechaIndicador">Fecha Indicador</label>
                    <input type="date" name="fechaIndicador" id="fechaIndicador" class="form-control" value="<?php echo $fechaIndicador ?>">
                    <label for="tiempoIndicador">Tiempo Indicador</label>
                    <input type="date" name="tiempoIndicador" id="tiempoIndicador" class="form-control" value="<?php echo $tiempoIndicador ?>">
                    <label for="origenIndicador">Origen Indicador</label>
                    <input type="text" name="origenIndicador" id="origenIndicador" class="form-control" value="<?php echo $origenIndicador ?>"> 
                    <br>
                    <button class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>