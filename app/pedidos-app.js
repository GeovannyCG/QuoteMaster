let listaAcceso = document.getElementById("estadoAlmacen");
let divFormmulario = document.getElementById("formulario-reporte");

let contenido1 = `
<h3 style="color: grey; font-size: 20px;">Generar Reporte</h3><div class="mb-3">
<p style="color: grey;"><i class='bx bxs-message-square-error' style: color: grey;></i> Llena la informacion para generar un reporte</p>
                                                                            <label for="motivo" class="form-label">Motivo:</label>
                                                                            <input type="text" name="motivo" class="form-control" id="motivo" aria-describedby="Help">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="cantidad_p_r" class="form-label">Cantidad_p_r:</label>
                                                                            <input type="number" name="cantidad_p" class="form-control" id="cantidad_p_r" aria-describedby="Help">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="cantidad_r_r" class="form-label">Cantidad_r_r:</label>
                                                                            <input type="number" name="cantidad_r" class="form-control" id="cantidad_r_r" aria-describedby="Help">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="devueltos_r" class="form-label">Devueltos_r:</label>
                                                                            <input type="number" name="devueltos_r" class="form-control" id="devueltos_r" aria-describedby="Help">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <div class="form-floating">
                                                                                <textarea class="form-control" placeholder="Tus observaciones" name="comentarios_reportes_almacen" id="floatingTextarea"></textarea>
                                                                                <label for="floatingTextarea">Agrega una descripcion del problema:</label>
                                                                            </div>
                                                                        </div>
`;
let contenido2 = ``;

listaAcceso.addEventListener("change", () => {
    if (listaAcceso.value == "retenido") {
        divFormmulario.innerHTML = contenido1;
    } else {
        divFormmulario.innerHTML = contenido2;
    }
});
