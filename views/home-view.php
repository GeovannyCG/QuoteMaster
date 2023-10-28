<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - QuoteMaster</title>
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
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="./Home" class="nav-link custom-active" aria-current="page">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #3498db; margin-top: -5px;">
                            <path d="m21.743 12.331-9-10c-.379-.422-1.107-.422-1.486 0l-9 10a.998.998 0 0 0-.17 1.076c.16.361.518.593.913.593h2v7a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-4h4v4a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-7h2a.998.998 0 0 0 .743-1.669z"></path>
                        </svg>
                        Inicio
                    </a>
                </li>

                <li class="nav-item" style="margin-top: 20px;">
                    <a href="./OrderManager" class="nav-link" aria-current="page">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white; margin-top: -5px;">
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
                    if ($executeVerifyModel == true) {
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

        <div class="main-wrapper">
            <div id="content-cont">
                <h1>Hola, <?php echo $_SESSION['rfc'] ?></h1>

                <div class="card-content">
                    <h4 style="margin-bottom: 20px;">Solicitudes de proveedores</h4>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">RFC</th>
                                <th scope="col">Proovedor</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($showingPricescheking as $Prices1) : ?>
                                <tr>
                                    <th scope="row"><?php echo $Prices1['id_u'] ?></th>
                                    <td><?php echo $Prices1['rfc_u'] ?></td>
                                    <td><?php echo $Prices1['type_proveedor_1_u'] ?></td>
                                    <td><?php echo $Prices1['type_proveedor_2_u'] ?></td>
                                    <td>
                                        <a href="./ExecuteAction?id=<?php echo $Prices1['id_u'] ?>&process=acepted" class="btn btn-success"><i class='bx bx-check' style='color:#ffffff'></i></a>
                                        <a href="./ExecuteAction?id=<?php echo $Prices1['id_u'] ?>&process=decline" class="btn btn-danger"><i class='bx bx-x' style='color:#ffffff'></i></a>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $Prices1['id_u'] ?>"><i class='bx bxs-show' style='color:#ffffff'></i></button>
                                    </td>
                                </tr>

                                <div class="modal fade" id="staticBackdrop<?php echo $Prices1['id_u'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel"><span style="color: black;">Proveedor</span> folio: <?php echo $Prices1['rfc_u'] ?>/<?php echo $Prices1['id_u'] ?></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 style="color: #3498db; margin-bottom: 20px;">Informacion de la cotizacion</h5>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Tipo RFC:</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices1['type_rfc_u'] ?>" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">RFC:</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices1['rfc_u'] ?>" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">CURP:</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices1['curp_u'] ?>" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Razon Social:</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices1['reason_u'] ?>" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">T. de Proveedor:</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices1['type_proveedor_1_u'] ?>" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Servicio/Bienes:</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" style="margin-bottom: 10px;" value="<?php echo $Prices1['type_proveedor_2_u'] ?>" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Constancia Fiscal:</label>
                                                    <a href="./assets/archives/dir_fisical/<?php echo $Prices1['const_fiscal_u'] ?>" target="_blank"><?php echo $Prices1['const_fiscal_u'] ?></a>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Constancia O. Cumplimiento:</label>
                                                    <a href="./assets/archives/dir_cumplimiento/<?php echo $Prices1['const_o_cump_u'] ?>" target="_blank"><?php echo $Prices1['const_o_cump_u'] ?></a>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Constancia Cta. Bancaria:</label>
                                                    <a href="./assets/archives/dir_bancaria/<?php echo $Prices1['const_cta_banc_u'] ?>" target="_blank"><?php echo $Prices1['const_cta_banc_u'] ?></a>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Direccion</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices1['direction_u'] ?>" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Contacto Vtas: (nombre/correo/telefono/celular)</label>
                                                    <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices1['name_vtas_u'] ?>" disabled>
                                                    <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices1['email_vtas_u'] ?>" disabled>
                                                    <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices1['phone_vtas_u'] ?>" disabled>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices1['mobile_vtas_u'] ?>" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Contacto Conta: (nombre/correo/telefono/celular)</label>
                                                    <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices1['name_conta_u'] ?>" disabled>
                                                    <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices1['email_conta_u'] ?>" disabled>
                                                    <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices1['phone_conta_u'] ?>" disabled>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices1['mobile_conta_u'] ?>" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Contacto C y C: (nombre/correo/telefono/celular)</label>
                                                    <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices1['name_cc_u'] ?>" disabled>
                                                    <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices1['email_cc_u'] ?>" disabled>
                                                    <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices1['phone_cc_u'] ?>" disabled>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices1['mobile_cc_u'] ?>" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Dias de credito</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices1['days_credit_u'] ?>" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                                                    <input type="password" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices1['state_u'] ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: #3498db; color: white;">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>

                <div class="card-content">
                    <h4 style="margin-bottom: 20px;">Resumen</h4>
                    <h5>Proovedores Aceptados</h5>
                    <div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">RFC</th>
                                    <th scope="col">Proovedor</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($showingPricesacepted as $Prices2) : ?>
                                    <tr>
                                        <th scope="row"><?php echo $Prices2['id_u'] ?></th>
                                        <td><?php echo $Prices2['rfc_u'] ?></td>
                                        <td><?php echo $Prices2['type_proveedor_1_u'] ?></td>
                                        <td><?php echo $Prices2['type_proveedor_2_u'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $Prices2['id_u'] ?>"><i class='bx bxs-show' style='color:#ffffff'></i></button>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="staticBackdrop<?php echo $Prices2['id_u'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel"><span style="color: black;">Proveedor</span> folio: <?php echo $Prices2['rfc_u'] ?>/<?php echo $Prices2['id_u'] ?></h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5 style="color: #3498db; margin-bottom: 20px;">Informacion de la cotizacion</h5>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Tipo RFC:</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices2['type_rfc_u'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">RFC:</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices2['rfc_u'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">CURP:</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices2['curp_u'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Razon Social:</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices2['reason_u'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">T. de Proveedor:</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices2['type_proveedor_1_u'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Servicio/Bienes:</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" style="margin-bottom: 10px;" value="<?php echo $Prices2['type_proveedor_2_u'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Constancia Fiscal:</label>
                                                        <a href="./assets/archives/dir_fisical/<?php echo $Prices2['const_fiscal_u'] ?>" target="_blank"><?php echo $Prices2['const_fiscal_u'] ?></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Constancia O. Cumplimiento:</label>
                                                        <a href="./assets/archives/dir_cumplimiento/<?php echo $Prices2['const_o_cump_u'] ?>" target="_blank"><?php echo $Prices2['const_o_cump_u'] ?></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Constancia Cta. Bancaria:</label>
                                                        <a href="./assets/archives/dir_bancaria/<?php echo $Prices2['const_cta_banc_u'] ?>" target="_blank"><?php echo $Prices2['const_cta_banc_u'] ?></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Direccion</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices2['direction_u'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Contacto Vtas: (nombre/correo/telefono/celular)</label>
                                                        <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices2['name_vtas_u'] ?>" disabled>
                                                        <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices2['email_vtas_u'] ?>" disabled>
                                                        <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices2['phone_vtas_u'] ?>" disabled>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices2['mobile_vtas_u'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Contacto Conta: (nombre/correo/telefono/celular)</label>
                                                        <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices2['name_conta_u'] ?>" disabled>
                                                        <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices2['email_conta_u'] ?>" disabled>
                                                        <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices2['phone_conta_u'] ?>" disabled>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices2['mobile_conta_u'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Contacto C y C: (nombre/correo/telefono/celular)</label>
                                                        <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices2['name_cc_u'] ?>" disabled>
                                                        <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices2['email_cc_u'] ?>" disabled>
                                                        <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices2['phone_cc_u'] ?>" disabled>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices2['mobile_cc_u'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Dias de credito</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices2['days_credit_u'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                                                        <input type="password" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices2['state_u'] ?>" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>

                    <h5>Proovedores rechazados</h5>
                    <div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">RFC</th>
                                    <th scope="col">Proovedor</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($showingPricesdecline as $Prices3) : ?>
                                    <tr>
                                        <th scope="row"><?php echo $Prices3['id_u'] ?></th>
                                        <td><?php echo $Prices3['rfc_u'] ?></td>
                                        <td><?php echo $Prices3['type_proveedor_1_u'] ?></td>
                                        <td><?php echo $Prices3['type_proveedor_2_u'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $Prices3['id_u'] ?>"><i class='bx bxs-show' style='color:#ffffff'></i></button>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="staticBackdrop<?php echo $Prices3['id_u'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel"><span style="color: black;">Proveedor</span> folio: <?php echo $Prices3['rfc_u'] ?>/<?php echo $Prices3['id_u'] ?></h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5 style="color: #3498db; margin-bottom: 20px;">Informacion de la cotizacion</h5>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Tipo RFC:</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices3['type_rfc_u'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">RFC:</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices3['rfc_u'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">CURP:</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices3['curp_u'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Razon Social:</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices3['reason_u'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">T. de Proveedor:</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices3['type_proveedor_1_u'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Servicio/Bienes:</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" style="margin-bottom: 10px;" value="<?php echo $Prices3['type_proveedor_2_u'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Constancia Fiscal:</label>
                                                        <a href="./assets/archives/dir_fisical/<?php echo $Prices3['const_fiscal_u'] ?>" target="_blank"><?php echo $Prices3['const_fiscal_u'] ?></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Constancia O. Cumplimiento:</label>
                                                        <a href="./assets/archives/dir_cumplimiento/<?php echo $Prices3['const_o_cump_u'] ?>" target="_blank"><?php echo $Prices3['const_o_cump_u'] ?></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Constancia Cta. Bancaria:</label>
                                                        <a href="./assets/archives/dir_bancaria/<?php echo $Prices3['const_cta_banc_u'] ?>" target="_blank"><?php echo $Prices3['const_cta_banc_u'] ?></a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Direccion</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices3['direction_u'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Contacto Vtas: (nombre/correo/telefono/celular)</label>
                                                        <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices3['name_vtas_u'] ?>" disabled>
                                                        <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices3['email_vtas_u'] ?>" disabled>
                                                        <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices3['phone_vtas_u'] ?>" disabled>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices3['mobile_vtas_u'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Contacto Conta: (nombre/correo/telefono/celular)</label>
                                                        <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices3['name_conta_u'] ?>" disabled>
                                                        <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices3['email_conta_u'] ?>" disabled>
                                                        <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices3['phone_conta_u'] ?>" disabled>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices3['mobile_conta_u'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Contacto C y C: (nombre/correo/telefono/celular)</label>
                                                        <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices3['name_cc_u'] ?>" disabled>
                                                        <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices3['email_cc_u'] ?>" disabled>
                                                        <input style="margin-bottom: 10px;" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices3['phone_cc_u'] ?>" disabled>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices3['mobile_cc_u'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Dias de credito</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices3['days_credit_u'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                                                        <input type="password" class="form-control" id="exampleFormControlInput1" value="<?php echo $Prices3['state_u'] ?>" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
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