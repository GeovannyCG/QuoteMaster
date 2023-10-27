<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro - QuoteMaster</title>
    <!--Link de CSS "Login-style.css"-->
    <link rel="stylesheet" href="./assets/css/register-style.css" />
    <!--Link de CSS "Boostrap"-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!--link de CSS "boxicons"-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <!-- As a heading -->
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="./">
                <img src="./assets/img/quitarfondobro-removebg-preview.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                <span style="color: white;">QuoteMaster</span>
            </a>

            <button id="button-help" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                    <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm1 16h-2v-2h2v2zm.976-4.885c-.196.158-.385.309-.535.459-.408.407-.44.777-.441.793v.133h-2v-.167c0-.118.029-1.177 1.026-2.174.195-.195.437-.393.691-.599.734-.595 1.216-1.029 1.216-1.627a1.934 1.934 0 0 0-3.867.001h-2C8.066 7.765 9.831 6 12 6s3.934 1.765 3.934 3.934c0 1.597-1.179 2.55-1.958 3.181z"></path>
                </svg>
            </button>
        </div>
    </nav>

    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>

    <div style="padding: 20px 20px; background-color: rgba(219, 219, 219, 0.274);">
        <div class="alert alert-primary d-flex align-items-center" role="alert" style="width: 700px;">
            <svg class="bi flex-shrink-0 me-2" width="20px" height="20px" role="img" aria-label="Info:">
                <use xlink:href="#info-fill" />
            </svg>
            <div>
                Llena toda la informacion que se te solicita a continuacion por favor.
            </div>
        </div>

    </div>
    <!--Wrapper principal-->
    <div id="main-wrapper-register">
        <!-- Contenedor principal para elementos del login -->
        <div id="container-register">
            <h1>Realiza tu registro</h1>
            <p style="margin-top: 20px;">
                <span style="color: red;">* Campos obligatorios.</span>
            </p>
            <form id="register-forme" action="./SendInformation" method="post" enctype="multipart/form-data">
                <div id="register-first-part">
                    <label for="tipo" style="margin-top: 10px;"><span style="color: red;">*</span> Tipo: </label>
                    <select class="form-select" aria-label="Default select example" id="tipoop" name="tipousuario">
                        <option value="" disabled selected>Elige una opcion</option>
                        <option value="Fisica">Fisica</option>
                        <option value="Moral">Moral</option>
                    </select>
                </div>

                <div id="register-second-part">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="rfc" class="form-label" style="margin-top: 10px;">
                                    <span style="color: red;">*</span> RFC:
                                </label>
                                <input type="text" class="form-control" name="rfc" id="rfc" aria-describedby="emailHelp" placeholder="Ingresa el RFC">
                            </div>
                            <div class="message-error-sat">
                                <span id="rfc-message" class="message-error-satt"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="curp" class="form-label" style="margin-top: 10px;"><span style="color: red;">*</span> CURP: </label>
                                <input type="text" class="form-control" name="curp" id="curp" aria-describedby="emailHelp" placeholder="Ingresa el CURP">
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
                            <input type="text" class="form-control" name="reasonsocial" id="razon-social" aria-describedby="emailHelp" placeholder="Ingresa la razon social">
                        </div>
                    </div>
                </div>

                <div id="register-four-part">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label"><span style="color: red;">*</span> T. de Proveedor:</label>
                        </div>
                        <div class="col-md-4" style="width: 400px;">
                            <select class="form-select" aria-label="Default select example" name="option1" id="tipo1">
                                <option value="" disabled selected>Elige una opcion</option>
                                <option value="Bienes">Bienes</option>
                                <option value="Servicios">Servicios</option>
                            </select>
                        </div>
                        <div class="col-md-4" style="width: 400px;">
                            <select class="form-select" aria-label="Default select example" name="option2" id="tipo2">

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
                            <input type="text" class="form-control" name="direction" id="direccion" aria-describedby="emailHelp" placeholder="Direccion Fiscal">
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
                                <input type="text" class="form-control vtas" id="nombre-vtas" aria-describedby="emailHelp" name="namevtas" placeholder="Nombre(s)">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <input type="email" class="form-control vtas" id="correo-vtas" aria-describedby="emailHelp" name="emailvtas" placeholder="Correo">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <input type="text" class="form-control vtas" id="telefono-vtas" aria-describedby="emailHelp" name="phonevtas" placeholder="Telefono">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <input type="text" class="form-control vtas" id="celular-vtas" aria-describedby="emailHelp" name="mobilevtas" placeholder="Celular">
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
                                <input type="text" class="form-control conta" id="nombre-conta" aria-describedby="emailHelp" name="nameconta" placeholder="Nombre(s)">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <input type="email" class="form-control conta" id="correo-conta" aria-describedby="emailHelp" name="emailconta" placeholder="Correo">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <input type="text" class="form-control conta" id="telefono-conta" aria-describedby="emailHelp" name="phoneconta" placeholder="Telefono">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <input type="text" class="form-control conta" id="celular-conta" aria-describedby="emailHelp" name="mobileconta" placeholder="Celular">
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
                                <input type="text" class="form-control cyc" id="nombre-cyc" aria-describedby="emailHelp" name="namecyc" placeholder="Nombre(s)">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <input type="email" class="form-control cyc" id="correo-cyc" aria-describedby="emailHelp" name="emailcyc" placeholder="Correo">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <input type="text" class="form-control cyc" id="telefono-cyc" aria-describedby="emailHelp" name="phonecyc" placeholder="Telefono">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <input type="text" class="form-control cyc" id="celular-cyc" aria-describedby="emailHelp" name="mobilecyc" placeholder="Celular">
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
                                <input type="radio" name="opcion" value="Contado">
                                Contado
                            </label>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>
                                <input type="radio" name="opcion" value="8 Dias">
                                8 Dias
                            </label>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>
                                <input type="radio" name="opcion" value="15 Dias">
                                15 Dias
                            </label>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>
                                <input type="radio" name="opcion" value="30 Dias">
                                30 Dias
                            </label>
                        </div>
                    </div>
                </div>

                <div id="register-eight-part">
                    <div>
                        <div class="mb-3">
                            <label class="form-label"><span style="color: red;">*</span> Contraseña: </label>
                            <input type="text" class="form-control passwords" id="password" oncopy="return false;" name="passsword" aria-describedby="emailHelp" placeholder="Ingresa cual sera tu contraseña">
                        </div>
                    </div>

                    <div>
                        <div class="mb-3">
                            <label class="form-label"><span style="color: red;">*</span> Confirmar contraseña: </label>
                            <input type="text" class="form-control passwords" id="passwordconfirm" oncopy="return false;" name="passswordconfirm" aria-describedby="emailHelp" placeholder="Ingresa nuevamente tu contraseña">
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="register">Registrar</button>
                </div>

            </form>

            <div id="contenedorEtiquetas">
                <ul id="contenedorLista" style="color: red;">

                </ul>
            </div>
        </div>

        <div class="container">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3"></ul>
                <p class="text-center text-body-secondary">&copy; 2023 InnoSoftCG, Inc</p>
            </footer>
        </div>
    </div>



    <!-- Modal to help information about form -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ayuda - Formulario de Registro</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        El presete formulario esta diseñado para que proveedores de <b>bienes o servicios</b> puedan hacer la creacion
                        de cotizaciones que vayan dirigidas a nuestra empresa para la venta de los mismos.
                    </p>

                    <h6>Preguntas:</h6> <br>

                    <p>
                        <b>¿Como funciona?</b><br>
                        Debes de ingresar la informacion que se te solicita en el formulario para que posteriormente la envies y nuestro departamento
                        de contaduria pueda analizarla, Si es de nuestro interes nos pondremos en contacto contigo.
                    </p>
                    <p>
                        <b>¿Cuanto tiempo tarda la respuesta?</b><br>
                        Siempre tratamos de responder lo mas pronto posible pero tenemos una politica de 3 dias habiles para que recibas una respuesta de nuestra parte.
                    </p>
                    <p>
                        <b>¿Quien vera mi informacion?</b><br>
                        La informacion que envies esta respaldada y asegurada con los mas altos estandares de seguridad como lo menciona nuestras politicas de <a href="">terminos y condiciones</a>.
                        nuestro departamento de contaduria y directivos seran las unicas personas que podran ver la informacion que enviaste.
                    </p>
                    <p>
                        <b>¿Cual es el proceso de seleccion?</b><br>
                        El personal de nuestro departamento de contaduria recibira tu informacion de primera mano por medio de nuestra plataforma podra visualizar toda la informacion que enviaste
                        y podran realizar la aceptacion o declinacion de la peticion segun cual sea el criterio de los mismos. si es que ya enviaste tu cotizacion solo es cuestion de esperar nosotros haremos el resto.
                    </p>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: #3498db; color: white;">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <!--Links de Scripts "Boostrap"-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="./app/register-app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>