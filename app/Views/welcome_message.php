<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud Historial uf</title>
  </head>
  <body>
    
    <div class="container">
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
                            <th><?php echo $key->nombreIndicador ?></th>
                            <th><?php echo $key->codigoIndicador ?></th>
                            <th><?php echo $key->unidadMedidaIndicador ?></th>
                            <th><?php echo $key->valorIndicador ?></th>
                            <th><?php echo $key->fechaIndicador ?></th>
                            <th><?php echo $key->tiempoIndicador ?></th>
                            <th><?php echo $key->origenIndicador ?></th>
                            <th><a href="" class="btn btn-warning btn-sm">Editar</a></th>
                            <th><a href="" class="btn btn-danger btn-sm">Eliminar</a></th>
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
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>