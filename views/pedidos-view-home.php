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
                            <?php if (empty($solicitudPedidos)) { ?>
                                <th colspan="8">
                                    <center>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" style="fill: rgba(218, 216, 216, 1);">
                                            <path d="M22 8a.76.76 0 0 0 0-.21v-.08a.77.77 0 0 0-.07-.16.35.35 0 0 0-.05-.08l-.1-.13-.08-.06-.12-.09-9-5a1 1 0 0 0-1 0l-9 5-.09.07-.11.08a.41.41 0 0 0-.07.11.39.39 0 0 0-.08.1.59.59 0 0 0-.06.14.3.3 0 0 0 0 .1A.76.76 0 0 0 2 8v8a1 1 0 0 0 .52.87l9 5a.75.75 0 0 0 .13.06h.1a1.06 1.06 0 0 0 .5 0h.1l.14-.06 9-5A1 1 0 0 0 22 16V8zm-10 3.87L5.06 8l2.76-1.52 6.83 3.9zm0-7.72L18.94 8 16.7 9.25 9.87 5.34zM4 9.7l7 3.92v5.68l-7-3.89zm9 9.6v-5.68l3-1.68V15l2-1v-3.18l2-1.11v5.7z"></path>
                                        </svg>
                                        <h4 style="color: grey;">No hay solicitudes de pedidos</h4>
                                    </center>
                                </th>
                            <?php } else { ?>
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
                            <?php }
                            } ?>
                        </tbody>
                    </table>

                    <!-- Aqui esta para cuando no hay registros que mostrar -->
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
                            <?php if (empty($pedidosCamino)) { ?>
                                <th colspan="7">
                                    <center>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" style="fill: rgba(218, 216, 216, 1);">
                                            <path d="m20.145 8.27 1.563-1.563-1.414-1.414L18.586 7c-1.05-.63-2.274-1-3.586-1-3.859 0-7 3.14-7 7s3.141 7 7 7 7-3.14 7-7a6.966 6.966 0 0 0-1.855-4.73zM15 18c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z"></path>
                                            <path d="M14 10h2v4h-2zm-1-7h4v2h-4zM3 8h4v2H3zm0 8h4v2H3zm-1-4h3.99v2H2z"></path>
                                        </svg>
                                        <h4 style="color: grey;">No hay pedidos en curso de entrega</h4>
                                    </center>
                                </th>
                            <?php } else { ?>
                                <?php foreach ($pedidosCamino as $pc) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $pc['id_p']; ?></th>
                                        <td><?php echo $pc['nombre_proyecto_p']; ?></td>
                                        <td><?php if ($pc['fecha_entrega_p'] == null) {
                                                echo "---";
                                            } else if ($pc['fecha_entrega_p'] == '0000-00-00') {
                                                echo "---";
                                            } else {
                                                echo $pc['fecha_entrega_p'];
                                            } ?></td>
                                        <td>
                                            <a href="./assets/archives/dir_facturas/<?php echo $pc['factura_p']; ?>" class="btn btn-primary">Ver</a>
                                        </td>
                                        <td><a class="btn btn-primary" href="./assets/archives/dir_xml/<?php echo $pc['xml_p']; ?>" target="_blank">Ver</a></td>
                                        <td><?php echo $pc['estado_entrega_p']; ?></td>
                                        <td><?php echo $pc['observaciones_entrega_p']; ?></td>
                                    </tr>
                            <?php }
                            } ?>
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
                            <?php if (empty($accesoAlmacen)) { ?>
                                <th colspan="8">
                                    <center>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" style="fill: rgba(218, 216, 216, 1);">
                                            <path d="M20.345 18.931A.993.993 0 0 0 21 18v-1a.996.996 0 0 0-.293-.707L19 14.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258c-1.323.364-2.463 1.128-3.346 2.127L3.707 2.293 2.293 3.707l18 18 1.414-1.414-1.362-1.362zM12 22a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22zM5 10v4.586l-1.707 1.707A.996.996 0 0 0 3 17v1a1 1 0 0 0 1 1h10.879L5.068 9.189C5.037 9.457 5 9.724 5 10z"></path>
                                        </svg>
                                        <h4 style="color: grey;">No hay solicitudes de acceso a bodega</h4>
                                    </center>
                                </th>
                            <?php } else { ?>
                                <?php foreach ($accesoAlmacen as $acceso) : ?>
                                    <tr>
                                        <th scope="row"><?php echo $acceso['id_p']; ?></th>
                                        <td><?php if ($acceso['fecha_entrada_alamcen_p'] != null) {
                                                echo $acceso['fecha_entrada_alamcen_p'];
                                            } else {
                                                echo "<center>-----</center>";
                                            } ?></td>
                                        <td><?php echo $acceso['nombre_proyecto_p']; ?></td>
                                        <td><a href="./assets/archives/dir_facturas/<?php echo $acceso['factura_p']; ?>" target="_blank" class="btn btn-success">Ver</a></td>
                                        <td><a href="./assets/archives/dir_xml/<?php echo $acceso['xml_p']; ?>" target="_blank" class="btn btn-success">Ver</a></td>
                                        <td><?php echo $acceso['estado_almacen_p']; ?></td>
                                        <td><?php if ($acceso['observaciones_almacen_p'] != null) {
                                                echo $acceso['observaciones_almacen_p'];
                                            } else {
                                                echo "<center>-----</center>";
                                            } ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#actionsAlmacen<?php echo $acceso['id_p']; ?>"><i class='bx bxs-megaphone' style='color:#ffffff'></i></button>
                                            <!-- <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#viewAlmacen"><i class='bx bx-show-alt' style='color:#ffffff'></i></button> -->
                                            <a href="./ActionPedidosAC?accion=eliminarpedido&xml=<?php echo $acceso['xml_p'] ?>&numero_pedido=<?php echo $acceso['id_p'] ?>" class="btn btn-danger"><i class='bx bx-x' style='color:#ffffff'></i></a>

                                            <!-- Modal para cambiar el estado del acceso a almacen y observaciones-->
                                            <div>
                                                <div class="modal fade" id="actionsAlmacen<?php echo $acceso['id_p']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <form action="./ActionPedidosAC?accion=accesoalmacen&numero_pedido=<?php echo $acceso['id_p']; ?>&numero_proveedor=<?php echo $acceso['id_proveedor']; ?>" method="post">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Acciones para pedidos: </h1>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <label for="estadoEnterga" class="form-label">Selecciona que estado reportar:</label>
                                                                        <select name="estado_almacen" id="estadoAlmacen" class="form-select">
                                                                            <option value="enrevision" <?php if ($acceso['estado_almacen_p'] == 'enrevision') {
                                                                                                            echo "selected";
                                                                                                        } ?>>En revision</option>
                                                                            <option value="aceptado" <?php if ($acceso['estado_almacen_p'] == 'aceptado') {
                                                                                                            echo "selected";
                                                                                                        } ?>>Aceptado</option>
                                                                            <option value="ingresado" <?php if ($acceso['estado_almacen_p'] == 'ingresado') {
                                                                                                            echo "selected";
                                                                                                        } ?>>Ingresado</option>
                                                                            <option value="retenido" <?php if ($acceso['estado_almacen_p'] == 'retenido') {
                                                                                                            echo "selected disabled";
                                                                                                        } ?>>Retenido</option>
                                                                            <option value="declinado" <?php if ($acceso['estado_almacen_p'] == 'declinado') {
                                                                                                            echo "selected";
                                                                                                        } ?>>Declinado</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <div class="form-floating">
                                                                            <textarea class="form-control" placeholder="Tus observaciones" name="comentarios_acceso_almacen" id="floatingTextarea"><?php echo $acceso['observaciones_almacen_p']; ?></textarea>
                                                                            <label for="floatingTextarea">Agregar observaciones de acceso a almacen</label>
                                                                        </div>
                                                                    </div>

                                                                    <div id="formulario-reporte">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                                    <button type="submit" class="btn btn-primary">Realizar actualizacion</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                            <?php endforeach;
                            } ?>
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
                            <?php if (empty($showReporters)) { ?>
                                <th colspan="8">
                                    <center>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" style="fill: rgba(218, 216, 216, 1);">
                                            <path d="M2.165 19.551c.186.28.499.449.835.449h15c.4 0 .762-.238.919-.606l3-7A.998.998 0 0 0 21 11h-1V8c0-1.103-.897-2-2-2h-6.655L8.789 4H4c-1.103 0-2 .897-2 2v13h.007a1 1 0 0 0 .158.551zM18 8v3H6c-.4 0-.762.238-.919.606L4 14.129V8h14z"></path>
                                        </svg>
                                        <h4 style="color: grey;">No hay reportes de pedidos</h4>
                                    </center>
                                </th>
                            <?php } else { ?>
                                <?php foreach ($showReporters as $sr) : ?>
                                    <tr>
                                        <th scope="row"><?php echo $sr['id_r'] ?></th>
                                        <td><?php echo $sr['id_p'] ?></td>
                                        <td><?php echo $sr['motivo_r'] ?></td>
                                        <td><?php echo $sr['fecha_recepcion_r'] ?></td>
                                        <td><?php echo $sr['cantidad_p_r'] ?></td>
                                        <td><?php echo $sr['cantidad_r_r'] ?></td>
                                        <td><?php echo $sr['devueltos_r'] ?></td>
                                        <td><?php echo $sr['observaciones_r'] ?></td>
                                    </tr>
                            <?php endforeach;
                            } ?>
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
                            <?php ?>

                            <?php if (empty($showPedidosEnd)) { ?>
                                <th colspan="7">
                                    <center>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" style="fill: rgba(218, 216, 216, 1);">
                                            <path d="m21.706 5.291-2.999-2.998A.996.996 0 0 0 18 2H6a.996.996 0 0 0-.707.293L2.294 5.291A.994.994 0 0 0 2 5.999V19c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5.999a.994.994 0 0 0-.294-.708zM6.414 4h11.172l.999.999H5.415L6.414 4zM4 19V6.999h16L20.002 19H4z"></path>
                                            <path d="M15 12H9v-2H7v4h10v-4h-2z"></path>
                                        </svg>
                                        <h4 style="color: grey;">Aun no hay historial de pedidos recibidos</h4>
                                    </center>
                                </th>
                            <?php } else { ?>
                                <?php foreach ($showPedidosEnd as $spe) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $spe['id_p']; ?></th>
                                        <td><?php echo $spe['nombre_proyecto_p']; ?></td>
                                        <td><?php echo $spe['fecha_entrega_p']; ?></td>
                                        <td><?php echo $spe['factura_p']; ?></td>
                                        <td><?php echo $spe['xml_p']; ?></td>
                                        <td>Recibida</td>
                                        <td>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#viewPedidoFinished<?php echo $spe['id_p']; ?>"><i class='bx bx-show-alt' style='color:#ffffff'></i></button>

                                            <!-- Modal para mirar el historial de pedidos-->
                                            <div>
                                                <div class="modal fade" id="viewPedidoFinished<?php echo $spe['id_p']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-fullscreen">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Resumen del pedido: PEDIDO<?php echo $spe['id_p']; ?>/<?php echo $spe['nombre_proyecto_p']; ?>/<?php echo $spe['id_proveedor']; ?></h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <legend>Datos del pedido</legend>
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <div class="mb-3">
                                                                            <label for="disabledTextInput" class="form-label">Nombre del proyecto</label>
                                                                            <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $spe['nombre_proyecto_p']; ?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="mb-3">
                                                                            <label for="disabledTextInput" class="form-label">Dias de credito</label>
                                                                            <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $spe['dias_credito_p']; ?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <div class="mb-3">
                                                                            <label for="disabledTextInput" class="form-label">Fecha de emision</label>
                                                                            <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $spe['fecha_entrega_p']; ?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="mb-3">
                                                                            <label for="disabledTextInput" class="form-label">Fecha de pago</label>
                                                                            <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $spe['fecha_pago_p']; ?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <div class="mb-3">
                                                                            <label for="disabledTextInput" class="form-label">Fecha de acceso al almacen</label>
                                                                            <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $spe['fecha_pago_p']; ?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="mb-3">
                                                                            <label for="disabledTextInput" class="form-label">Estado de la solicitud</label>
                                                                            <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $spe['estado_solicitud_p']; ?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <div class="mb-3">
                                                                            <label for="disabledTextInput" class="form-label">Estado de la entrega</label>
                                                                            <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $spe['estado_entrega_p']; ?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="mb-3">
                                                                            <label for="disabledTextInput" class="form-label">Estado en el almacen</label>
                                                                            <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $spe['estado_almacen_p']; ?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <div class="mb-3">
                                                                            <label for="disabledTextInput" class="form-label">Observaciones durante la solicitud</label>
                                                                            <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $spe['observaciones_solicitud_p']; ?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="mb-3">
                                                                            <label for="disabledTextInput" class="form-label">Observaciones durente la entrega</label>
                                                                            <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $spe['observaciones_almacen_p']; ?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <div class="mb-3">
                                                                            <label for="disabledTextInput" class="form-label">Observaciones durante el acceso al almacen</label>
                                                                            <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $spe['observaciones_almacen_p']; ?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="mb-3">
                                                                            <label for="disabledTextInput" class="form-label">Factura del pedido</label><br>
                                                                            <a href="./assets/archives/dir_facturas/<?php echo $spe['factura_p']; ?>" target="_blank" class="btn btn-primary" style="width: 100%;">Ver</a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <div class="mb-3">
                                                                            <label for="disabledTextInput" class="form-label">XML del pedido</label><br>
                                                                            <a href="./assets/archives/dir_xml/<?php echo $spe['xml_p']; ?>" target="_blank" class="btn btn-primary" style="width: 100%;" target="_blank">Ver</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="mb-3">
                                                                            <label for="disabledTextInput" class="form-label">ID del proveedor</label>
                                                                            <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $spe['id_proveedor']; ?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>
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
    <script src="./app/pedidos-app.js"></script>
</body>

</html>