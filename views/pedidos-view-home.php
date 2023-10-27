<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de pedidos - QuoteMaster</title>
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
        <!-- Barra lateral (menu principal) -->
        <div class="d-flex flex-column flex-shrink-0 p-3 " style="width: 280px; height: 100vh; position: fixed; background-color: #3498db;">
            <a href="./Home" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="./assets/img/quitarfondobro-removebg-preview.png" width="40" height="32" alt="logotipo">
                <span class="fs-4" style="color: white;"> QuoteMaster</span>
            </a>
            <hr>
            <button id="btnCrearCotizacion" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#NewPedido">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(52, 152, 219, 1);">
                    <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm5 11h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"></path>
                </svg>
                Nuevo pedido
            </button>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="./Home" class="nav-link" aria-current="page">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white; margin-top: -5px;">
                            <path d="m21.743 12.331-9-10c-.379-.422-1.107-.422-1.486 0l-9 10a.998.998 0 0 0-.17 1.076c.16.361.518.593.913.593h2v7a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-4h4v4a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-7h2a.998.998 0 0 0 .743-1.669z"></path>
                        </svg>
                        Inicio
                    </a>
                </li>

                <li class="nav-item" style="margin-top: 20px;">
                    <a href="#" class="nav-link custom-active" aria-current="page">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #3498db; margin-top: -5px;">
                            <path d="M21.993 7.95a.96.96 0 0 0-.029-.214c-.007-.025-.021-.049-.03-.074-.021-.057-.04-.113-.07-.165-.016-.027-.038-.049-.057-.075-.032-.045-.063-.091-.102-.13-.023-.022-.053-.04-.078-.061-.039-.032-.075-.067-.12-.094-.004-.003-.009-.003-.014-.006l-.008-.006-8.979-4.99a1.002 1.002 0 0 0-.97-.001l-9.021 4.99c-.003.003-.006.007-.011.01l-.01.004c-.035.02-.061.049-.094.073-.036.027-.074.051-.106.082-.03.031-.053.067-.079.102-.027.035-.057.066-.079.104-.026.043-.04.092-.059.139-.014.033-.032.064-.041.1a.975.975 0 0 0-.029.21c-.001.017-.007.032-.007.05V16c0 .363.197.698.515.874l8.978 4.987.001.001.002.001.02.011c.043.024.09.037.135.054.032.013.063.03.097.039a1.013 1.013 0 0 0 .506 0c.033-.009.064-.026.097-.039.045-.017.092-.029.135-.054l.02-.011.002-.001.001-.001 8.978-4.987c.316-.176.513-.511.513-.874V7.998c0-.017-.006-.031-.007-.048zm-10.021 3.922L5.058 8.005 7.82 6.477l6.834 3.905-2.682 1.49zm.048-7.719L18.941 8l-2.244 1.247-6.83-3.903 2.153-1.191zM13 19.301l.002-5.679L16 11.944V15l2-1v-3.175l2-1.119v5.705l-7 3.89z"></path>
                        </svg>
                        Pedidos
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
                    <!-- <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li> -->
                    <?php
                    if ($verificar == true) {
                        echo "<li><a class='dropdown-item' href='./checkPrices'><i class='bx bxs-user-rectangle' style='color:#3498db'></i> Gestor de prooveedores</a></li>";
                    }
                    ?>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="./Logout" style="color: red;"><i class='bx bx-power-off' style='color:#ff0303'></i> Cerrar Sesion</a></li>
                </ul>
            </div>
        </div>

        <!-- Wrapper principal para contenido del apartado -->
        <div class="main-wrapper">
            <!-- Div para colocar el contenido -->
            <div id="content-cont">
                <h1>Gestor de pedidos</h1>
                <div class="card-content"> <!-- Tarjeta -->
                    <h4 style="margin-bottom: 20px;">Resumen de pedidos</h4>

                    <h5>Pedidos solicitados</h5>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#Pedido</th>
                                <th scope="col">Proyecto</th>
                                <th scope="col">Fecha Entrega</th>
                                <th scope="col">Factura</th>
                                <th scope="col">XML</th>
                                <th scope="col">Status</th>
                                <th scope="col">Observaciones</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($solicitudPedidos as $sp) { ?>
                                <tr>
                                    <th scope="row"><?php echo $sp['id_p']; ?></th>
                                    <td><?php echo $sp['nombre_proyecto_p']; ?></td>
                                    <td><?php if ($sp['fecha_entrega_p'] == null) {
                                            echo "---";
                                        } else if ($sp['fecha_entrega_p'] == '0000-00-00') {
                                            echo "---";
                                        } else {
                                            echo $sp['fecha_entrega_p'];
                                        } ?></td>
                                    <td><?php if ($sp['factura_p'] != null) {
                                            echo $sp['factura_p'];
                                        } else {
                                            echo "---";
                                        } ?></td>
                                    <td><a class="btn btn-primary" href="./assets/archives/dir_xml/<?php echo $sp['xml_p']; ?>" target="_blank">Ver</a></td>
                                    <td><?php echo $sp['estado_solicitud_p']; ?></td>
                                    <td><?php echo $sp['observaciones_solicitud_p']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editPedidoFirst<?php echo $sp['id_p'] ?>"><i class='bx bx-edit' style='color:#ffffff'></i></button>
                                        <!-- <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#viewPedidoFirst"><i class='bx bx-show-alt' style='color:#ffffff'></i></button> -->
                                        <a href="./ActionPedidosAC?accion=eliminarpedido&xml=<?php echo $sp['xml_p'] ?>&numero_pedido=<?php echo $sp['id_p'] ?>" class="btn btn-danger"><i class='bx bx-x' style='color:#ffffff'></i></a>

                                        <!-- Modal para ver los detalles del pedido -->
                                        <!-- <div>
                                            <div class="modal fade" id="viewPedidoFirst" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-fullscreen">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Detalles el pedido:</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="disabledTextInput" class="form-label">Nombrel del proyecto:</label>
                                                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" disabled>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="disabledTextInput" class="form-label">Fecha de emision:</label>
                                                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="disabledTextInput" class="form-label">Estado del pedido:</label>
                                                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" disabled>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="disabledTextInput" class="form-label">XML:</label><br>
                                                                        <a href="./assets/archives/dir_xml/<?php echo $sp['xml_p']; ?>" class="btn btn-primary" style="width: 200px;">Ver</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->


                                        <!-- Modal para la edicion -->
                                        <div class="modal fade" id="editPedidoFirst<?php echo $sp['id_p'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-fullscreen">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edicion del pedido: </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="./ActionPedidosAC?accion=actualizarpedido&xml=<?php echo $sp['xml_p'] ?>&numero_pedido=<?php echo $sp['id_p'] ?>" method="post" enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1" class="form-label"><span style="color: red;">*</span> Selecciona un proveedor</label>
                                                                        <select class="form-select" name="proveedorAc" aria-label="Default select example" required>
                                                                            <option selected disabled>Elegir...</option>
                                                                            <?php foreach ($proveedores as $prove) : ?>
                                                                                <option <?php if ($sp['id_proveedor'] == $prove['id_u']) {
                                                                                            echo "selected";
                                                                                        } ?> value="<?php echo $prove['id_u'] ?>"><?php echo $prove['rfc_u'] ?> / <?php echo $prove['type_proveedor_1_u'] ?> / <?php echo $prove['type_proveedor_2_u'] ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1" class="form-label"><span style="color: red;">*</span> Nombre del proyecto</label>
                                                                        <input type="text" class="form-control" name="proyectoAc" value="<?php echo $sp['nombre_proyecto_p']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="formFile" class="form-label"><span style="color: red;">*</span> Agregar XML</label>
                                                                        <input class="form-control" type="file" name="xmlAc" id="formFile" pattern="^<\?xml[\s\S]*>$">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="exampleFormControlTextarea1" class="form-label"><span style="color: red;">*</span>Redacta tus especificaciones</label>
                                                                <textarea class="form-control" name="observaciones_s_pAc" id="exampleFormControlTextarea1" rows="3" required><?php echo $sp['observaciones_solicitud_p']; ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                            <button type="submit" class="btn btn-primary">Actualizar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            <?php } ?>

                            <!-- Modal para atender los pedidos-->
                            <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </tbody>
                    </table>


                    <h5>Pedidos en curso de entrega</h5>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#Pedido</th>
                                <th scope="col">Proyecto</th>
                                <th scope="col">Fecha Entrega</th>
                                <th scope="col">Factura</th>
                                <th scope="col">XML</th>
                                <th scope="col">Status</th>
                                <th scope="col">Observaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="card-content"> <!-- Tarjeta -->
                    <h4 style="margin-bottom: 20px;">Acceso a almacen</h4>

                    <h5>Pedidos solicitando acceso</h5>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#Pedido</th>
                                <th scope="col">Entrada Almacen</th>
                                <th scope="col">Proyecto</th>
                                <th scope="col">Factura</th>
                                <th scope="col">XML</th>
                                <th scope="col">Status</th>
                                <th scope="col">Observaciones</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#actionsAlmacen"><i class='bx bxs-megaphone' style='color:#ffffff'></i></button>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#viewAlmacen"><i class='bx bx-show-alt' style='color:#ffffff'></i></button>
                                    <a href="#" class="btn btn-danger"><i class='bx bxs-time' style='color:#ffffff'></i></a>

                                    <!-- Modal para cambiar el estado del acceso a almacen y observaciones-->
                                    <div>
                                        <div class="modal fade" id="actionsAlmacen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Acciones para pedidos: </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal para cambiar el estado del acceso a almacen y observaciones-->
                                    <div>
                                        <div class="modal fade" id="viewAlmacen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-fullscreen">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Visualizacion del pedido: </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <h5>Reportes acerca de entregas</h5>
                    <table class="table table-hover table-warning">
                        <thead>
                            <tr>
                                <th scope="col">#Reporte</th>
                                <th scope="col">#Pedido</th>
                                <th scope="col">Motivo</th>
                                <th scope="col">Fecha de recepcion</th>
                                <th scope="col">Cantidad_P</th>
                                <th scope="col">Cantidad_R</th>
                                <th scope="col">Devueltos</th>
                                <th scope="col">Obervaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Mark</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

                <div class="card-content"> <!-- Tarjeta -->
                    <h4 style="margin-bottom: 20px;">Detalles pedidos recibidos</h4>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#Pedido</th>
                                <th scope="col">Proyecto</th>
                                <th scope="col">Fecha Entrega</th>
                                <th scope="col">Factura</th>
                                <th scope="col">XML</th>
                                <th scope="col">Status</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#viewPedidoFinished"><i class='bx bx-show-alt' style='color:#ffffff'></i></button>

                                    <!-- Modal para mirar el historial de pedidos-->
                                    <div>
                                        <div class="modal fade" id="viewPedidoFinished" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-fullscreen">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Resumen del pedido: </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal para la creacion de un nuevo pedido -->
        <div class="modal fade" id="NewPedido" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Nuevo pedido</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="./ActionPedidosAC?accion=crearpedido" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div style="padding: 30px 30px;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label"><span style="color: red;">*</span> Selecciona un proveedor</label>
                                            <select class="form-select" name="proveedor" aria-label="Default select example" required>
                                                <option selected disabled>Elegir...</option>
                                                <?php foreach ($proveedores as $prove) : ?>
                                                    <option value="<?php echo $prove['id_u'] ?>"><?php echo $prove['rfc_u'] ?> / <?php echo $prove['type_proveedor_1_u'] ?> / <?php echo $prove['type_proveedor_2_u'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label"><span style="color: red;">*</span> Nombre del proyecto</label>
                                            <input type="text" class="form-control" name="proyecto" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label"><span style="color: red;">*</span> Agregar XML</label>
                                            <input class="form-control" type="file" name="xml" id="formFile" pattern="^<\?xml[\s\S]*>$" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label"><span style="color: red;">*</span> Redacta tus especificaciones</label>
                                    <textarea class="form-control" name="observaciones_s_p" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Solicitar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


    <!-- Link de scripts  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>