<?php
include('db.php');

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="../js/jquery-3.6.3.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"
        integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- alertify -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
    <!-- hasta aca termina alertify-->

    <script src="../js/funciones.js"></script>


    <title>Catalogo de productos</title>
</head>

<body>

    <!-- M E N U  -->
    <br>
    <div class="container">
        <ul class="nav nav-pills justify-content-center">
            <!-- le metemos datos a la lista -->
            <li class="nav-item"><a href="index.php" class="nav-link" aria-current="page">Homepage</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Mision Vision y Valores</a></li>
            <li class="nav-item"><a href="CRUD.php" class="nav-link">Crud de datos</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contacto</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Acerca de</a></li>
        </ul>
    </div>
    <!-- aqui termina -->

    <!-- aca empieza la tabla -->
    <div id="recarga">
        <div class="container">
            <div class="row">
                <div class="col">
                    <br><br><br>
                    <button type="button" class="btn btn-primary float-end" id="nuevo">
                        agregar
                    </button>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-hover" id="resultado">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Descripcion</th>
                                        <th>Existencia</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                    $peticion = "SELECT * FROM producto ORDER BY Id";
                    $validacion = mysqli_query($conexion, $peticion);
                    while ($muestra = mysqli_fetch_array($validacion)) {
                                    ?>
                                    <tr>
                                        <td><span id="val1"><?php echo $muestra['Id']; ?></span></td>
                                        <td><span id="val2"><?php echo $muestra['nombre']; ?></span></td>
                                        <td><span id="val3"><?php echo $muestra['precio']; ?></span></td>
                                        <td><span id="val4"><?php echo $muestra['descripcion']; ?></span></td>
                                        <td><span id="val5"><?php echo $muestra['disponible']; ?></span></td>

                                        <td>
                                            <button type="button" class="btn btn-warning" id="cambiar"> Cambiar
                                            </button>
                                        </td>

                                        <td>
                                            <button type="button" class="btn btn-danger" id="btn_eliminar" onclick="">
                                                Eliminar
                                            </button>
                                        </td>

                                        <?php
                          }
                        ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- aca termina -->

            <!-- Modal de nuevo registro -->
            <form action="altas.php" method="post">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo elemento</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    id="cerrar" onclick="cancelar()"></button>
                            </div>

                            <div class="modal-body">
                                <label for="">id</label><br>
                                <input type="number" name="id" id="" class="form-control"><br>
                                <label for="">Nombre</label><br>
                                <input type="text" name="Nombre" id="" class="form-control"><br>
                                <label for="">Precio</label> <br>
                                <input type="number" name="Precio" id="" class="form-control"><br>
                                <label for="">descripcion</label><br>
                                <input type="text" name="Cantidad" id="" class="form-control"><br>
                                <label for="">existencia</label><br>
                                <input type="number" name="Ex" id="" class="form-control">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="cerrar2"
                                    onclick="cancelar()">Close</button>
                                <input type="submit" name="salvar" class="btn btn-primary" value="Enviar Formulario"
                                    onclick="adelante()">
                                <!--<button type="button" class="btn btn-primary" name="salvar"  >guardar los cambios</button> -->
                            </div>

                        </div>
                    </div>
                </div>
            </form>
            <!-- aca termina el modal de nuevo -->

            <!-- modal de eliminar -->
            <form action="bajas.php" method="post">
                <div class="modal fade" id="exampleModalE" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar el elemento actual</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    onclick="cancelar()" id="quita"></button>
                            </div>

                            <div class="modal-body">
                                <label for="">id</label><br>
                                <input type="number" name="id2" id="id2" class="form-control"><br>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                    onclick="cancelar()" id="quitar">Cancelar</button>
                                <button type="submit" class="btn btn-primary" name="eliminar"
                                    onclick="adelante()">eliminar datos</button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
            <!-- aca termina el modal de eliminar -->

            <!-- modal para editar -->
            <form action="cambios.php" method="POST">
                <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">cambiar elemento</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    id="ce" onclick="cancelar()"></button>
                            </div>

                            <div class="modal-body">
                                <label for="">id</label><br>
                                <input type="number" name="valor1" id="valor1" class="form-control"><br>
                                <label for="">Nombre</label><br>
                                <input type="text" name="valor2" id="valor2" class="form-control"><br>
                                <label for="">Precio</label> <br>
                                <input type="number" name="valor3" id="valor3" class="form-control"><br>
                                <label for="">descripcion</label><br>
                                <input type="text" name="valor4" id="valor4" class="form-control"><br>
                                <label for="">existencia</label><br>
                                <input type="number" name="valor5" id="valor5" class="form-control">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="ce2"
                                    onclick="cancelar()">Close</button>
                                <button type="submit" class="btn btn-primary" name="guardar los cambios"
                                    onclick="adelante()">guardar los cambios</button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
</body>

</html>