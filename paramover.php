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
                            <h1 class="modal-title fs-5" id="staticBackdropLabel"><span style="color: black;">Contizacion</span> folio: <?php echo $Prices2['rfc_u'] ?>/<?php echo $Prices2['id_u'] ?></h1>
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