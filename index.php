<!-- HEAD DEL SITIO -->
<?php include('elementos/head.php');?>

<body>

    <!--Header-->
    <?php include ('elementos/header.php'); ?>

    <!-- Contenido del sitio -->
    <div class="container bg-light">
        <h1 class="text-center">CRUD con PHP, PDO, Ajax y Datatables.js</h1>
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <button type="button"
                        class="rounded-pill btn btn-primary w-100 py-1"
                        data-bs-toggle="modal"
                        data-bs-target="#modalUsuario">
                        <i class="bi bi-plus-circle-fill mr-5"></i> Crear
                    </button>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="datos_usuario" class="table table-border table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Telefonos</th>
                        <th>Email</th>
                        <th>Imagen</th>
                        <th>Fecha Creacion</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
            </table>
        </div>
        <!-- Modal -->
        <div id="modalUsuario"
            class="modal fade"
            tabindex="-1"
            aria-labelledby="modalUsuarioLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded">
                    <div class="modal-header">
                        <div class="modal-title">Crear usuario</div>
                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" id="formulario" enctype="mutipart/form-data">
                            <div class="col-auto">
                                <label for="inputNombre">Nombre</label>
                                <input type="text" class="form-control" id="inputNombre">
                            </div>
                            <div class="col-auto">
                                <label for="inputApellido">Apellido</label>
                                <input type="text" class="form-control" id="inputApellido">
                            </div>
                            <div class="col-auto">
                                <label for="inputTelefono">Telefono</label>
                                <input type="text" class="form-control" id="inputTelefono">
                            </div>
                            <div class="col-auto">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail">
                            </div>
                            <div class="col-auto">
                                <label for="inputImagen">Imagen</label>
                                <input type="file" id="inputImagen" name="inputImagen" class="form-control">
                                <span id="imagen-subida"></span>
                            </div>
                            <div class="modal-footer mt-2">
                                <input type="hidden" name="id_usuario" id="id_usuario">
                                <input type="hidden" name="operacion" id="operacion">
                                <input type="submit"
                                    value="Crear"
                                    name="action"
                                    id="action"
                                    class="btn btn-success rounded-pill py-1">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--Footer-->
    <?php include ('elementos/footer.php'); ?>

</body>

</html>