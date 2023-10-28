<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos por surtir - QuoteMaster</title>
    <!-- Link de CSS de Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Link de CSS de Propio -->
    <link rel="stylesheet" href="./assets/css/home-style.css">
    <!-- Link de CSS de Iconos de BoxinIcon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- link de flavicon -->
    <link rel="shortcut icon" href="./assets/img/quitarfondobro-removebg-preview.png" type="image/x-icon">
</head>

<body>

    <div class="main-content-home">
        <div class="d-flex flex-column flex-shrink-0 p-3 " style="width: 280px; height: 100vh; position: fixed; background-color: #3498db;">
            <a href="./Supplier" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="./assets/img/quitarfondobro-removebg-preview.png" width="40" height="32" alt="logotipo">
                <span class="fs-4" style="color: white;"> QuoteMaster</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="./Supplier" class="nav-link" aria-current="page">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white; margin-top: -5px;">
                            <path d="M13 3h4v2h-4zM3 8h4v2H3zm0 8h4v2H3zm-1-4h3.99v2H2zm19.707-5.293-1.414-1.414L18.586 7A6.937 6.937 0 0 0 15 6c-3.859 0-7 3.141-7 7s3.141 7 7 7 7-3.141 7-7a6.968 6.968 0 0 0-1.855-4.73l1.562-1.563zM16 14h-2V8.958h2V14z"></path>
                        </svg>
                        Pedidos en proceso
                    </a>
                </li>

                <li class="nav-item" style="margin-top: 20px;">
                    <a href="./Orders" class="nav-link custom-active" aria-current="page">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #3498db;">
                            <path d="M19.15 8a2 2 0 0 0-1.72-1H15V5a1 1 0 0 0-1-1H4a2 2 0 0 0-2 2v10a2 2 0 0 0 1 1.73 3.49 3.49 0 0 0 7 .27h3.1a3.48 3.48 0 0 0 6.9 0 2 2 0 0 0 2-2v-3a1.07 1.07 0 0 0-.14-.52zM15 9h2.43l1.8 3H15zM6.5 19A1.5 1.5 0 1 1 8 17.5 1.5 1.5 0 0 1 6.5 19zm10 0a1.5 1.5 0 1 1 1.5-1.5 1.5 1.5 0 0 1-1.5 1.5z"></path>
                        </svg>
                        Pedidos x Surtir
                    </a>
                </li>

                <li class="nav-item" style="margin-top: 20px;">
                    <a href="./Schedule" class="nav-link" aria-current="page">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white; margin-top: -5px;">
                            <path d="M19 4h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm-1 15h-6v-6h6v6zm1-10H5V7h14v2z"></path>
                        </svg>
                        Programacion
                    </a>
                </li>

            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong style="color: white;"><?php echo $_SESSION['rfc'] ?></strong>
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li><a class='dropdown-item' href='./ProfileSupplier'><i class='bx bxs-user-account' style='color:#3498db'></i> Mi cuenta</a></li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="./Logout" style="color: red;"><i class='bx bx-power-off' style='color:#ff0303'></i> Cerrar Sesion</a></li>
                </ul>
            </div>
        </div>

        <div class="main-wrapper">
            <div id="content-cont">
                <h1>Pedidos x Surtir</h1>

                <div class="card-content">
                    <h4 style="margin-bottom: 20px;">Visualizacion de pedidos por surtir</h4>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"># Pedido</th>
                                <th scope="col">Nombre proyecto</th>
                                <th scope="col">Fecha emision</th>
                                <th scope="col">XML</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($pedidosP)) { ?>
                                <th colspan="7">
                                    <center>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" style="fill: rgba(218, 216, 216, 1);">
                                            <path d="M19.937 8.68c-.011-.032-.02-.063-.033-.094a.997.997 0 0 0-.196-.293l-6-6a.997.997 0 0 0-.293-.196c-.03-.014-.062-.022-.094-.033a.991.991 0 0 0-.259-.051C13.04 2.011 13.021 2 13 2H6c-1.103 0-2 .897-2 2v16c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V9c0-.021-.011-.04-.013-.062a.99.99 0 0 0-.05-.258zM16.586 8H14V5.414L16.586 8zM6 20V4h6v5a1 1 0 0 0 1 1h5l.002 10H6z"></path>
                                        </svg>
                                        <h4 style="color: grey;">No hay pedidos x surtir</h4>
                                    </center>
                                </th>
                            <?php } else { ?>
                                <?php foreach ($pedidosP as $pp) : ?>
                                    <tr>

                                        <th scope="row"><?php echo $pp['id_p']; ?></th>
                                        <td><?php echo $pp['nombre_proyecto_p']; ?></td>
                                        <td><?php echo $pp['fecha_emision_p']; ?></td>
                                        <td><a href="./assets/archives/dir_xml/<?php echo $pp['xml_p']; ?>" class="btn btn-primary" target="_blank">Ver</a></td>
                                        <td>
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#solicitudModal<?php echo $pp['id_p']; ?>"><i class='bx bx-check' style='color:#ffffff'></i></button>
                                            <!-- <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#versolicitudModal"><i class='bx bx-show-alt' style='color:#ffffff'></i></button> -->
                                            <a href="./ActionPedidosP?accions=DeclinarPedido&pedido=<?php echo $pp['id_p']; ?>" class="btn btn-danger"><i class='bx bx-x' style='color:#ffffff'></i></a>
                                        </td>
                                        <!-- Modal para aceptar-->
                                        <div class="modal fade" id="solicitudModal<?php echo $pp['id_p']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="./ActionPedidosP?accions=AceptarPedido&pedido=<?php echo $pp['id_p']; ?>" method="post">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Programacion del pedido: <?php echo $pp['id_p']; ?>/<?php echo $pp['nombre_proyecto_p']; ?></h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label for="disabledTextInput" class="form-label">Fecha de emision</label>
                                                                <input type="text" id="disabledTextInput" value="<?php echo $pp['fecha_emision_p']; ?>" class="form-control" placeholder="Disabled input" disabled>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="fecha" class="form-label">Selecciona una fecha para la entrega</label>
                                                                <input type="date" id="fecha" class="form-control" name="fechaEntrega"> <!--Aqui va lo de la fecha de entrega-->
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Confirmar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                            <?php endforeach;
                            } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- Link de scripts  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>