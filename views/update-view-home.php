<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar proveedor - QuoteMaster</title>
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
            <a href="./Home" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="./assets/img/quitarfondobro-removebg-preview.png" width="40" height="32" alt="logotipo">
                <span class="fs-4" style="color: white;"> QuoteMaster</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="./Home" class="nav-link" aria-current="page">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white; margin-top: -5px;">
                            <path d="m21.743 12.331-9-10c-.379-.422-1.107-.422-1.486 0l-9 10a.998.998 0 0 0-.17 1.076c.16.361.518.593.913.593h2v7a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-4h4v4a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-7h2a.998.998 0 0 0 .743-1.669z">
                            </path>
                        </svg>
                        Inicio
                    </a>
                </li>

                <li class="nav-item" style="margin-top: 20px;">
                    <a href="./OrderManager" class="nav-link" aria-current="page">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white; margin-top: -5px;">
                            <path d="M21.993 7.95a.96.96 0 0 0-.029-.214c-.007-.025-.021-.049-.03-.074-.021-.057-.04-.113-.07-.165-.016-.027-.038-.049-.057-.075-.032-.045-.063-.091-.102-.13-.023-.022-.053-.04-.078-.061-.039-.032-.075-.067-.12-.094-.004-.003-.009-.003-.014-.006l-.008-.006-8.979-4.99a1.002 1.002 0 0 0-.97-.001l-9.021 4.99c-.003.003-.006.007-.011.01l-.01.004c-.035.02-.061.049-.094.073-.036.027-.074.051-.106.082-.03.031-.053.067-.079.102-.027.035-.057.066-.079.104-.026.043-.04.092-.059.139-.014.033-.032.064-.041.1a.975.975 0 0 0-.029.21c-.001.017-.007.032-.007.05V16c0 .363.197.698.515.874l8.978 4.987.001.001.002.001.02.011c.043.024.09.037.135.054.032.013.063.03.097.039a1.013 1.013 0 0 0 .506 0c.033-.009.064-.026.097-.039.045-.017.092-.029.135-.054l.02-.011.002-.001.001-.001 8.978-4.987c.316-.176.513-.511.513-.874V7.998c0-.017-.006-.031-.007-.048zm-10.021 3.922L5.058 8.005 7.82 6.477l6.834 3.905-2.682 1.49zm.048-7.719L18.941 8l-2.244 1.247-6.83-3.903 2.153-1.191zM13 19.301l.002-5.679L16 11.944V15l2-1v-3.175l2-1.119v5.705l-7 3.89z">
                            </path>
                        </svg>
                        Pedidos
                    </a>
                </li>

                <!-- <li class="nav-item">
                    <a href="#" class="nav-link" aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#home" />
                        </svg>
                        test
                    </a>
                </li> -->

            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong style="color: white;">
                        <?php echo $_SESSION['rfc'] ?>
                    </strong>
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <!-- <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li> -->
                    <?php
                    // if ($executeVerifyModel == true) {
                    //     echo "<li><a class='dropdown-item' href='../checkPrices'><i class='bx bxs-edit-alt' style='color:#3498db;'></i> Edit. Cotizaciones</a></li>";
                    // }
                    ?>
                    <!-- <li>
                        <hr class="dropdown-divider">
                    </li> -->
                    <li><a class="dropdown-item" href="../Logout" style="color: red;"><i class='bx bx-power-off' style='color:#ff0303'></i> Cerrar Sesion</a></li>
                </ul>
            </div>
        </div>

        <div class="main-wrapper">

            <div id="content-cont">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./checkPrices">Gestor de proveedores</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edicion</li>
                    </ol>
                </nav>
                <h1>Edicion de proveedor</h1>
                <div class="card-content">

                    <?php foreach ($updatePrice as $upp) { ?>
                        <h4 style="margin-bottom: 20px;">Proveedor: <?php echo $upp['rfc_u'] ?>/<?php echo $upp['id_u'] ?></h4>

                        <form id="register-forme" action="./UpdatePrices?id=<?php echo $upp['id_u'] ?>&file1=<?php echo $upp['const_fiscal_u'] ?>&file2=<?php echo $upp['const_o_cump_u'] ?>&file3=<?php echo $upp['const_cta_banc_u'] ?>" method="post" enctype="multipart/form-data">
                            <div id="register-first-part">
                                <label for="tipo" style="margin-top: 10px;"><span style="color: red;">*</span> Tipo:
                                </label>
                                <select class="form-select" aria-label="Default select example" id="tipoop" name="tipousuario">
                                    <option value="" disabled selected>Elige una opcion</option>
                                    <option value="Fisica" <?php if ($upp['type_rfc_u'] == 'Fisica') echo 'selected'; ?>>Fisica</option>
                                    <option value="Moral" <?php if ($upp['type_rfc_u'] == 'Moral') echo 'selected'; ?>>Moral</option>
                                </select>
                            </div>

                            <div id="register-second-part">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="rfc" class="form-label" style="margin-top: 10px;">
                                                <span style="color: red;">*</span> RFC:
                                            </label>
                                            <input type="text" class="form-control" value="<?php echo $upp['rfc_u'] ?>" name="rfc" id="rfc" aria-describedby="emailHelp" placeholder="Ingresa el RFC">
                                        </div>
                                        <div class="message-error-sat">
                                            <span id="rfc-message" class="message-error-satt"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="curp" class="form-label" style="margin-top: 10px;"><span style="color: red;">*</span> CURP: </label>
                                            <input type="text" class="form-control" value="<?php echo $upp['curp_u'] ?>" name="curp" id="curp" aria-describedby="emailHelp" placeholder="Ingresa el CURP">
                                        </div>
                                        <div class="message-error-sat">
                                            <span id="curp-message" class="message-error-satt"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="register-thirt-part">
                                <div>
                                    <div class="mb-3">
                                        <label class="form-label"><span style="color: red;">*</span> Razon social:</label>
                                        <input type="text" class="form-control" value="<?php echo $upp['reason_u'] ?>" name="reasonsocial" id="razon-social" aria-describedby="emailHelp" placeholder="Ingresa la razon social">
                                    </div>
                                </div>
                            </div>

                            <div id="register-four-part">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="form-label"><span style="color: red;">*</span> T. de
                                            Proveedor:</label>
                                    </div>
                                    <div class="col-md-4" style="width: 400px;">
                                        <select class="form-select" aria-label="Default select example" name="option1" id="tipo1">
                                            <option value="" disabled selected>Elige una opcion</option>
                                            <option value="Bienes" <?php if ($upp['type_proveedor_1_u'] == 'Bienes') echo 'selected'; ?>>Bienes</option>
                                            <option value="Servicios" <?php if ($upp['type_proveedor_1_u'] == 'Servicios') echo 'selected'; ?>>Moral</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4" style="width: 400px;">
                                        <select class="form-select" aria-label="Default select example" name="option2" id="tipo2">
                                            <?php if ($upp['type_proveedor_1_u'] == 'Bienes') { ?>
                                                <option value="Aceros" <?php if ($upp['type_proveedor_2_u'] == 'Aceros') echo 'selected'; ?>>Aceros</option>
                                                <option value="Aditivos" <?php if ($upp['type_proveedor_2_u'] == 'Aditivos') echo 'selected'; ?>>Aditivos</option>
                                                <option value="Agregados" <?php if ($upp['type_proveedor_2_u'] == 'Agregados') echo 'selected'; ?>>Agregados</option>
                                                <option value="Cancelería" <?php if ($upp['type_proveedor_2_u'] == 'Cancelería') echo 'selected'; ?>>Cancelería</option>
                                                <option value="Carpintería" <?php if ($upp['type_proveedor_2_u'] == 'Carpintería') echo 'selected'; ?>>Carpintería</option>
                                                <option value="Cimbras" <?php if ($upp['type_proveedor_2_u'] == 'Cimbras') echo 'selected'; ?>>Cimbras</option>
                                                <option value="Combustible" <?php if ($upp['type_proveedor_2_u'] == 'Combustible') echo 'selected'; ?>>Combustible</option>
                                                <option value="Electrico" <?php if ($upp['type_proveedor_2_u'] == 'Electrico') echo 'selected'; ?>>Electrico</option>
                                                <option value="Ferretería" <?php if ($upp['type_proveedor_2_u'] == 'Ferretería') echo 'selected'; ?>>Ferretería</option>
                                                <option value="Herrería" <?php if ($upp['type_proveedor_2_u'] == 'Herrería') echo 'selected'; ?>>Herrería</option>
                                                <option value="Jardinería" <?php if ($upp['type_proveedor_2_u'] == 'Jardinería') echo 'selected'; ?>>Jardinería</option>
                                                <option value="Muebles" <?php if ($upp['type_proveedor_2_u'] == 'Muebles') echo 'selected'; ?>>Muebles</option>
                                                <option value="Piedras" <?php if ($upp['type_proveedor_2_u'] == 'Piedras') echo 'selected'; ?>>Piedras</option>
                                                <option value="Pinturas" <?php if ($upp['type_proveedor_2_u'] == 'Pinturas') echo 'selected'; ?>>Pinturas</option>
                                                <option value="Pisos y azulejos" <?php if ($upp['type_proveedor_2_u'] == 'Pisos y azulejos') echo 'selected'; ?>>Pisos y azulejos</option>
                                                <option value="Plásticos" <?php if ($upp['type_proveedor_2_u'] == 'Plásticos') echo 'selected'; ?>>Plásticos</option>
                                                <option value="Plomería" <?php if ($upp['type_proveedor_2_u'] == 'Plomería') echo 'selected'; ?>>Plomería</option>
                                                <option value="Polvos" <?php if ($upp['type_proveedor_2_u'] == 'Polvos') echo 'selected'; ?>>Polvos</option>
                                                <option value="Prefabricados" <?php if ($upp['type_proveedor_2_u'] == 'Prefabricados') echo 'selected'; ?>>Prefabricados</option>
                                                <option value="Premezclados" <?php if ($upp['type_proveedor_2_u'] == 'Premezclados') echo 'selected'; ?>>Premezclados</option>
                                            <?php } else if ($upp['type_proveedor_1_u'] == 'Servicios') { ?>
                                                <option value="Agua potable" <?php if ($upp['type_proveedor_2_u'] == 'Agua potable') echo 'selected'; ?>>Agua potable</option>
                                                <option value="Capacitación al personal" <?php if ($upp['type_proveedor_2_u'] == 'Capacitación al personal') echo 'selected'; ?>>Capacitación al personal</option>
                                                <option value="Energía eléctrica" <?php if ($upp['type_proveedor_2_u'] == 'Energía eléctrica') echo 'selected'; ?>>Energía eléctrica</option>
                                                <option value="Fianzas" <?php if ($upp['type_proveedor_2_u'] == 'Fianzas') echo 'selected'; ?>>Fianzas</option>
                                                <option value="Fletes y acarreos" <?php if ($upp['type_proveedor_2_u'] == 'Fletes y acarreos') echo 'selected'; ?>>Fletes y acarreos</option>
                                                <option value="Herramienta" <?php if ($upp['type_proveedor_2_u'] == 'Herramienta') echo 'selected'; ?>>Herramienta</option>
                                                <option value="Internet" <?php if ($upp['type_proveedor_2_u'] == 'Internet') echo 'selected'; ?>>Internet</option>
                                                <option value="Instalaciones provisionales" <?php if ($upp['type_proveedor_2_u'] == 'Instalaciones provisionales') echo 'selected'; ?>>Instalaciones provisionales</option>
                                                <option value="Maquinaria y equipo" <?php if ($upp['type_proveedor_2_u'] == 'Maquinaria y equipo') echo 'selected'; ?>>Maquinaria y equipo</option>
                                                <option value="Papelería" <?php if ($upp['type_proveedor_2_u'] == 'Papelería') echo 'selected'; ?>>Papelería</option>
                                                <option value="Protección y seguridad" <?php if ($upp['type_proveedor_2_u'] == 'Protección y seguridad') echo 'selected'; ?>>Protección y seguridad</option>
                                                <option value="Recolección de basura" <?php if ($upp['type_proveedor_2_u'] == 'Recolección de basura') echo 'selected'; ?>>Recolección de basura</option>
                                                <option value="Reparación y mantenimiento" <?php if ($upp['type_proveedor_2_u'] == 'Reparación y mantenimiento') echo 'selected'; ?>>Reparación y mantenimiento</option>
                                                <option value="Seguridad, salud e higiene" <?php if ($upp['type_proveedor_2_u'] == 'Seguridad, salud e higiene') echo 'selected'; ?>>Seguridad, salud e higiene</option>
                                                <option value="Telefonía móvil" <?php if ($upp['type_proveedor_2_u'] == 'Telefonía móvil') echo 'selected'; ?>>Telefonía móvil</option>
                                                <option value="Subcontratos" <?php if ($upp['type_proveedor_2_u'] == 'Subcontratos') echo 'selected'; ?>>Subcontratos</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div id="register-five-part">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="form-label" style="margin-top: 10px;"><span style="color: red;">*</span> Constancia
                                            Fiscal: </label>
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control files-inputss" name="nose1" type="file" id="formFile1">
                                    </div>
                                </div>
                            </div>

                            <div id="register-six-part">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="form-label" style="margin-top: 10px;"><span style="color: red;">*</span> Constancia
                                            O. Cumplimiento: </label>
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control files-inputss" type="file" name="nose2" id="formFile2">
                                    </div>
                                </div>
                            </div>

                            <div id="register-seven-part">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="form-label" style="margin-top: 10px;"><span style="color: red;">*</span> Constancia
                                            Cta. Bancaria: </label>
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control files-inputss" type="file" name="nose3" id="formFile3">
                                    </div>
                                </div>
                            </div>


                            <div id="register-eight-part">
                                <div>
                                    <div class="mb-3">
                                        <label class="form-label"><span style="color: red;">*</span> Direccion:</label>
                                        <input type="text" class="form-control" value="<?php echo $upp['direction_u'] ?>" name="direction" id="direccion" aria-describedby="emailHelp" placeholder="Direccion Fiscal">
                                    </div>
                                </div>
                            </div>

                            <div id="register-nine-part">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="form-label" style="margin-top: 10px;"><span style="color: red;">*</span> Contacto
                                            Vtas:</label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control vtas" value="<?php echo $upp['name_vtas_u'] ?>" id="nombre-vtas" aria-describedby="emailHelp" name="namevtas" placeholder="Nombre(s)">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <input type="email" class="form-control vtas" value="<?php echo $upp['email_vtas_u'] ?>" id="correo-vtas" aria-describedby="emailHelp" name="emailvtas" placeholder="Correo">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control vtas" value="<?php echo $upp['phone_vtas_u'] ?>" id="telefono-vtas" aria-describedby="emailHelp" name="phonevtas" placeholder="Telefono">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control vtas" value="<?php echo $upp['mobile_vtas_u'] ?>" id="celular-vtas" aria-describedby="emailHelp" name="mobilevtas" placeholder="Celular">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="register-nine-part">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="form-label" style="margin-top: 10px;"><span style="color: red;">*</span> Contacto
                                            Conta:</label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control conta" value="<?php echo $upp['name_conta_u'] ?>" id="nombre-conta" aria-describedby="emailHelp" name="nameconta" placeholder="Nombre(s)">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <input type="email" class="form-control conta" value="<?php echo $upp['email_conta_u'] ?>" id="correo-conta" aria-describedby="emailHelp" name="emailconta" placeholder="Correo">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control conta" value="<?php echo $upp['phone_conta_u'] ?>" id="telefono-conta" aria-describedby="emailHelp" name="phoneconta" placeholder="Telefono">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control conta" value="<?php echo $upp['mobile_conta_u'] ?>" id="celular-conta" aria-describedby="emailHelp" name="mobileconta" placeholder="Celular">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="register-nine-part">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="form-label" style="margin-top: 10px;"><span style="color: red;">*</span> Contacto C y
                                            C:</label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control cyc" value="<?php echo $upp['name_cc_u'] ?>" id="nombre-cyc" aria-describedby="emailHelp" name="namecyc" placeholder="Nombre(s)">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <input type="email" class="form-control cyc" value="<?php echo $upp['email_cc_u'] ?>" id="correo-cyc" aria-describedby="emailHelp" name="emailcyc" placeholder="Correo">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control cyc" value="<?php echo $upp['phone_cc_u'] ?>" id="telefono-cyc" aria-describedby="emailHelp" name="phonecyc" placeholder="Telefono">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control cyc" value="<?php echo $upp['mobile_cc_u'] ?>" id="celular-cyc" aria-describedby="emailHelp" name="mobilecyc" placeholder="Celular">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="register-eight-part">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="form-label" style="margin-top: 10px;"><span style="color: red;">*</span> Dias de credito: </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>
                                            <input type="radio" name="opcion" value="Contado" <?php if ($upp['days_credit_u'] == 'Contado') echo 'checked'; ?>>
                                            Contado
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>
                                            <input type="radio" name="opcion" value="8 Dias" <?php if ($upp['days_credit_u'] == '8 Dias') echo 'checked'; ?>>
                                            8 Dias
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>
                                            <input type="radio" name="opcion" value="15 Dias" <?php if ($upp['days_credit_u'] == '15 Dias') echo 'checked'; ?>>
                                            15 Dias
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>
                                            <input type="radio" name="opcion" value="30 Dias" <?php if ($upp['days_credit_u'] == '30 Dias') echo 'checked'; ?>>
                                            30 Dias
                                        </label>
                                    </div>
                                </div>

                                <div id="register-eight-part">
                                    <div>
                                        <div class="mb-3">
                                            <label class="form-label"><span style="color: red;">*</span> Contraseña: </label>
                                            <input type="text" class="form-control passwords" value="<?php echo $upp['pass_u']; ?>" id="password" oncopy="return false;" name="passsword" aria-describedby="emailHelp" placeholder="Ingresa cual sera tu contraseña">
                                        </div>
                                    </div>

                                    <div>
                                        <div class="mb-3">
                                            <label class="form-label"><span style="color: red;">*</span> Confirmar contraseña:
                                            </label>
                                            <input type="text" class="form-control passwords" value="<?php echo $upp['pass_u']; ?>" id="passwordconfirm" oncopy="return false;" name="passswordconfirm" aria-describedby="emailHelp" placeholder="Ingresa nuevamente tu contraseña">
                                        </div>
                                    </div>
                                </div>

                                <div id="register-eight-part">
                                    <div>
                                        <div class="mb-3">
                                            <label class="form-label"><span style="color: red;">*</span> Estado: </label>
                                            <select class="form-select" aria-label="Default select example" name="option3">
                                                <option value="" disabled selected>Elige una opcion</option>
                                                <option value="cheking" <?php if ($upp['state_u'] == 'cheking') echo 'selected'; ?>>Volver a revisar</option>
                                                <option value="acepted" <?php if ($upp['state_u'] == 'acepted') echo 'selected'; ?>>Revisado</option>
                                                <option value="decline" <?php if ($upp['state_u'] == 'decline') echo 'selected'; ?>>Declinado</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary" name="register">Actualizar</button>
                                </div>

                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Link de scripts  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <!-- Script para validar formulario -->
    <script src="./app/apdate-app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>