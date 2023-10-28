//DOM'S declaration of elements in formula
let inputType = document.getElementById("tipoop"),
    inputRrfc = document.getElementById("rfc");
let inputRcurp = document.getElementById("curp");
let inputreason = document.getElementById("razon-social");
let inputsFile = document.querySelectorAll(".files-inputss");
let listMain = document.getElementById("tipo1"),
    listSecound = document.getElementById("tipo2");
let inputDirec = document.getElementById("direccion");
let inputsInfoVtas = document.querySelectorAll(".vtas");
let inputsInfoConta = document.querySelectorAll(".conta");
let inputsInfoCyc = document.querySelectorAll(".cyc");
const inputDaysCredit = document.getElementsByName("opcion");

let inputPasswords = document.querySelectorAll(".passwords");

let messageErrorCurp = document.getElementById("curp-message");
let messageErrorRfc = document.getElementById("rfc-message");
let formRegister = document.getElementById("register-forme");
const contenedor = document.getElementById("contenedorLista");

/**
 * Here be are the methods verify the formula information
 */

//Create fields of errors in form
function crearEtiqueta(message) {
    const errorItem = document.createElement("li");
    errorItem.textContent = message;
    contenedor.appendChild(errorItem);
}

//Function to verify format RFC
function VerifyRFC(rfc) {
    let moral = "";
    let physical = "";

    if (inputType.value == "Moral") {
        const rfcRegex1 = /^[A-ZÑ&]{4}\d{6}[A-Z1-9]{3}$/;
        moral = rfcRegex1.test(rfc);

        if (moral == true) {
            inputRrfc.setAttribute("style", "border-color: green;");
            messageErrorRfc.setAttribute("style", "color: green;");
            messageErrorRfc.textContent = "RFC moral valido";
            return true;
        } else {
            inputRrfc.setAttribute("style", "border-color: red;");
            messageErrorRfc.setAttribute("style", "color: red;");
            messageErrorRfc.textContent = "RFC no valido o no es moral";
            return false;
        }
    } else if (inputType.value == "Fisica") {
        const rfcRegex = /^[A-ZÑ&]{3}\d{6}[A-Z0-9]{3}$/;
        physical = rfcRegex.test(rfc);

        if (physical == true) {
            inputRrfc.setAttribute("style", "border-color: green;");
            messageErrorRfc.setAttribute("style", "color: green;");
            messageErrorRfc.textContent = "RFC Fisico valido";
            return true;
        } else {
            inputRrfc.setAttribute("style", "border-color: red;");
            messageErrorRfc.setAttribute("style", "color: red;");
            messageErrorRfc.textContent = "RFC no valido o no es fisico";
            return false;
        }
    }
}

//Function to verify format CURP
function verifyCURP(curp) {
    const curpRegex = /^[A-Z]{4}\d{6}[HM][A-Z]{5}[A-Z\d]\d$/;
    let curptest = curpRegex.test(curp);

    if (curptest == true) {
        inputRcurp.setAttribute("style", "border-color: green;");
        messageErrorCurp.setAttribute("style", "color: green;");
        messageErrorCurp.textContent = "CURP valido";
        return true;
    } else {
        inputRcurp.setAttribute("style", "border-color: red;");
        messageErrorCurp.setAttribute("style", "color: red;");
        messageErrorCurp.textContent = "CURP no valido";
        return false;
    }
}

//Funtion to verify Contacs dates
function verifyDatesContac(
    nameValue,
    emailValue,
    phoneValue,
    mobileValue,
    name,
    email,
    phone,
    mobile,
    nameinput
) {
    let vname = false;
    let vemail = false;
    let vphone = false;
    let vmobile = false;

    if (nameValue == "") {
        name.setAttribute("style", "border-color: red;");
        crearEtiqueta(`El nombre en el contacto ${nameinput} no es valido`);
    } else {
        const regex = /^[a-zA-Z\s]+$/;
        if (regex.test(nameValue)) {
            vname = true;
            name.removeAttribute("style", "border-color: red;");
        } else {
            crearEtiqueta(`El nombre en el contacto ${nameinput} no es valido`);
            vname = false;
            name.setAttribute("style", "border-color: red;");
        }
    }

    if (emailValue == "") {
        email.setAttribute("style", "border-color: red;");
        crearEtiqueta(`El correo en el contacto ${nameinput} no es valido`);
    } else {
        const regex1 = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (regex1.test(emailValue)) {
            vemail = true;
            email.removeAttribute("style", "border-color: red;");
        } else {
            crearEtiqueta(`El correo en el contacto ${nameinput} no es valido`);
            vemail = false;
            email.setAttribute("style", "border-color: red;");
        }
    }

    if (phoneValue == "") {
        phone.setAttribute("style", "border-color: red;");
        crearEtiqueta(`El telefono en el contacto ${nameinput} no es valido`);
    } else {
        const regex2 = /^\d{10}$/;
        if (regex2.test(phoneValue)) {
            vphone = true;
            phone.removeAttribute("style", "border-color: red;");
        } else {
            crearEtiqueta(`El telefono en el contacto ${nameinput} no es valido`);
            vphone = false;
            phone.setAttribute("style", "border-color: red;");
        }
    }

    if (mobileValue == "") {
        mobile.setAttribute("style", "border-color: red;");
        crearEtiqueta(`El celular en el contacto ${nameinput} no es valido`);
    } else {
        const regex3 = /^\d{10}$/;
        if (regex3.test(mobileValue)) {
            vmobile = true;
            mobile.removeAttribute("style", "border-color: red;");
        } else {
            crearEtiqueta(`El celular en el contacto ${nameinput} no es valido`);
            vmobile = false;
            mobile.setAttribute("style", "border-color: red;");
        }
    }

    if (
        vname == false ||
        vemail == false ||
        vphone == false ||
        vmobile == false
    ) {
        return false;
    } else {
        return true;
    }
}

//Funtion to verify that inputs password are fine
function verifyPasswords() {
    if (inputPasswords[0].value == "") {
        //Return negative answer
        inputPasswords[0].setAttribute("style", "border-color: red;");
        inputPasswords[1].setAttribute("style", "border-color: red;");
        crearEtiqueta("Ingresa una contraseña");
        return false;
    } else if (inputPasswords[0].value != inputPasswords[1].value) {
        //Passwords are not equals
        inputPasswords[0].setAttribute("style", "border-color: red;");
        inputPasswords[1].setAttribute("style", "border-color: red;");
        crearEtiqueta("Las contraseñas no coinsiden");
        return false;
    } else {
        //Return positive answer
        inputPasswords[0].removeAttribute("style", "border-color: red;");
        inputPasswords[1].removeAttribute("style", "border-color: red;");
        return true;
    }
}

//Function to validation that one selection on credit days is select
function verifyDaysCredit() {
    for (let i = 0; i < inputDaysCredit.length; i++) {
        if (inputDaysCredit[i].checked) {
            return true;
        }
    }
    return false;
}

//Function to verify information of form (first section).

// rfc, curp, razon, proveedor, constaFiscal, constaCumplimiento, constaBancaria, direccion, days, password
function verifyCotizacion(reason) {
    //Variables to save the information of verification each input
    let verifyState1 = false,
        verifyState2 = false,
        verifyState3 = false,
        verifyState4 = false,
        verifyState5 = false,
        verifyState6 = false,
        verifyState7 = false,
        verifyState8 = false,
        verifyState9 = false,
        verifyState10 = false,
        verifyState11 = false,
        verifyState12 = false;

    //Clean element where show the error in the form
    contenedor.innerHTML = "";

    //Verify Input Type
    if (inputType.value == "") {
        crearEtiqueta("Elige un tipo de RFC.");
        inputType.setAttribute("style", "border-color: red;");
        verifyState1 = false;
    } else {
        verifyState1 = true;
        inputType.removeAttribute("style", "border-color: red;");
    }

    //Verify input RFC
    if (inputRrfc.value == "") {
        crearEtiqueta("Ingresa el RFC");
        verifyState2 = false;
        inputRrfc.setAttribute("style", "border-color: red;");
    } else {
        if (VerifyRFC(inputRrfc.value) == true) {
            inputRrfc.removeAttribute("style", "border-color: red;");
            verifyState2 = true;
        } else {
            crearEtiqueta("El RFC ingresado no es valido");
            inputRrfc.setAttribute("style", "border-color: red;");
            verifyState2 = false;
        }
    }

    //Verify input CURP
    if (inputRcurp.value == "") {
        crearEtiqueta("Ingresa el CURP");
        inputRcurp.setAttribute("style", "border-color: red;");
    } else {
        if (verifyCURP(inputRcurp.value) == true) {
            inputRcurp.removeAttribute("style", "border-color: red;");
            verifyState3 = true;
        } else {
            crearEtiqueta("El CURP ingresado no es valido");
            inputRcurp.setAttribute("style", "border-color: red;");
            verifyState3 = false;
        }
    }

    //Verify input reason
    if (inputreason.value == "") {
        crearEtiqueta("Ingresa la razon social");
        inputreason.setAttribute("style", "border-color: red;");
        verifyState4 = false;
    } else {
        inputreason.removeAttribute("style", "border-color: red;");
        verifyState4 = true;
    }

    //Verify input T.proveedor
    if (listMain.value == "" && listSecound.value == "") {
        crearEtiqueta("Elige un tipo de proveedor");
        listMain.setAttribute("style", "border-color: red;");
        listSecound.setAttribute("style", "border-color: red;");
        verifyState5 = false;
    } else {
        listMain.removeAttribute("style", "border-color: red;");
        listSecound.removeAttribute("style", "border-color: red;");
        verifyState5 = true;
    }

    //Verify input files
    if (inputsFile[0].value == "") {
        inputsFile[0].setAttribute("style", "border-color: red;");
        crearEtiqueta("Sube el archivo 'Constancia Fiscal'.");
        verifyState6 = false;
    } else {
        inputsFile[0].removeAttribute("style", "border-color: red;");
        verifyState6 = true;
    }

    if (inputsFile[1].value == "") {
        inputsFile[1].setAttribute("style", "border-color: red;");
        crearEtiqueta("Sube el archivo 'Constancia O. Cumplimiento'.");
        verifyState6 = false;
    } else {
        inputsFile[1].removeAttribute("style", "border-color: red;");
        verifyState6 = true;
    }

    if (inputsFile[2].value == "") {
        inputsFile[2].setAttribute("style", "border-color: red;");
        crearEtiqueta("Sube el archivo 'Constancia Cta. Bancaria'.");
        verifyState6 = false;
    } else {
        inputsFile[2].removeAttribute("style", "border-color: red;");
        verifyState6 = true;
    }

    //Verify input Direction is fill or not
    if (inputDirec.value == "") {
        crearEtiqueta("Ingresa la direcccion");
        inputDirec.setAttribute("style", "border-color: red;");
        verifyState7 = false;
    } else {
        inputDirec.removeAttribute("style", "border-color: red;");
        verifyState7 = true;
    }

    //Verification inputs dates are fill.
    if (
        verifyDatesContac(
            inputsInfoVtas[0].value,
            inputsInfoVtas[1].value,
            inputsInfoVtas[2].value,
            inputsInfoVtas[3].value,
            inputsInfoVtas[0],
            inputsInfoVtas[1],
            inputsInfoVtas[2],
            inputsInfoVtas[3],
            "Vtas"
        ) == true
    ) {
        verifyState8 = true;
    } else {
        verifyState8 = false;
    }

    if (
        verifyDatesContac(
            inputsInfoConta[0].value,
            inputsInfoConta[1].value,
            inputsInfoConta[2].value,
            inputsInfoConta[3].value,
            inputsInfoConta[0],
            inputsInfoConta[1],
            inputsInfoConta[2],
            inputsInfoConta[3],
            "Conta"
        ) == true
    ) {
        verifyState9 = true;
    } else {
        verifyState9 = false;
    }

    if (
        verifyDatesContac(
            inputsInfoCyc[0].value,
            inputsInfoCyc[1].value,
            inputsInfoCyc[2].value,
            inputsInfoCyc[3].value,
            inputsInfoCyc[0],
            inputsInfoCyc[1],
            inputsInfoCyc[2],
            inputsInfoCyc[3],
            "C Y C"
        ) == true
    ) {
        verifyState10 = true;
    } else {
        verifyState10 = false;
    }

    //Verification to know if input credits are checked
    if (verifyDaysCredit() == true) {
        verifyState11 = true;
    } else {
        crearEtiqueta("Selecciona un plazo de credito");
        verifyState11 = false;
    }

    //Verification to know if passwords inputs are fill and correct
    if (verifyPasswords() == true) {
        verifyState12 = true;
    } else {
        verifyState12 = false;
    }

    //Results of verify final
    if (
        verifyState1 == true &&
        verifyState2 == true &&
        verifyState3 == true &&
        verifyState4 == true &&
        verifyState5 == true &&
        verifyState6 == true &&
        verifyState7 == true &&
        verifyState8 == true &&
        verifyState9 == true &&
        verifyState10 == true &&
        verifyState11 == true &&
        verifyState12
    ) {
        return true;
    } else {
        return false;
    }
}

/**
 * Here be are the events to interaction for user with form
 */

//Event to change options of list
listMain.addEventListener("change", () => {
    if (listMain.value == "Bienes") {
        listSecound.innerHTML = `
        <option value="Aceros">Aceros</option>
        <option value="Aditivos">Aditivos</option>
        <option value="Agregados">Agregados</option>
        <option value="Cancelería">Cancelería</option>
        <option value="Carpintería">Carpintería</option>
        <option value="Cimbras">Cimbras</option>
        <option value="Combustible">Combustible</option>
        <option value="Electrico">Electrico</option>
        <option value="Ferretería">Ferretería</option>
        <option value="Herrería">Herrería</option>
        <option value="Jardinería">Jardinería</option>
        <option value="Muebles">Muebles</option>
        <option value="Piedras">Piedras</option>
        <option value="Pinturas">Pinturas</option>
        <option value="Pisos y azulejos">Pisos y azulejos</option>
        <option value="Plásticos">Plásticos</option>
        <option value="Plomería">Plomería</option>
        <option value="Polvos">Polvos</option>
        <option value="Prefabricados">Prefabricados</option>
        <option value="Premezclados">Premezclados</option>
        `;
    } else if (listMain.value == "Servicios") {
        listSecound.innerHTML = `
        <option value="Agua potable">Agua potable</option>
        <option value="Capacitación al personal">Capacitación al personal</option>
        <option value="Energía eléctrica">Energía eléctrica</option>
        <option value="Fianzas">Fianzas</option>
        <option value="Fletes y acarreos">Fletes y acarreos</option>
        <option value="Herramienta">Herramienta</option>
        <option value="Internet">Internet</option>
        <option value="Instalaciones provicionales">Instalaciones provisionales</option>
        <option value="Maquinaría y equipo">Maquinaria y equipo</option>
        <option value="Papelería">Papelería</option>
        <option value="Protección y seguridad">Protección y seguridad</option>
        <option value="Recolección de basura">Recolección de basura</option>
        <option value="Reparación y mantenimiento">Reparación y mantenimiento</option>
        <option value="Seguridad, salud e higiene">Seguridad, salud e higiene</option>
        <option value="Telefonía móvil">Telefonía móvil</option>
        <option value="Subcontratos">Subcontratos</option>
        `;
    }
});

//Event to listen the typing in input RFC...
inputRrfc.addEventListener("keyup", function () {
    VerifyRFC(inputRrfc.value);
});

//Event to listen the Changue in type RFC...
inputType.addEventListener("change", function () {
    VerifyRFC(inputRrfc.value);
    inputType.removeAttribute("style", "border-color: red;");
});

//Event to listen the typing in input CURP...
inputRcurp.addEventListener("keyup", function () {
    verifyCURP(inputRcurp.value);
});

//Event to listen the change in input Proveedor
listMain.addEventListener("change", () => {
    listMain.removeAttribute("style", "border-color: red;");
    listSecound.removeAttribute("style", "border-color: red;");
});

//Event to listen the change inputs Files
inputsFile.forEach((file) => {
    file.addEventListener("click", (event) => {
        file.removeAttribute("style", "border-color: red;");
    });
});

//Event to listen the keyup in Information contact vtas
inputsInfoVtas.forEach((inputs1) => {
    inputs1.addEventListener("keyup", (event) => {
        inputs1.removeAttribute("style", "border-color: red;");
    });
});

//Event to listen the keyup in Information contact conta
inputsInfoConta.forEach((inputs2) => {
    inputs2.addEventListener("keyup", (event) => {
        inputs2.removeAttribute("style", "border-color: red;");
    });
});

//Event to listen the keyup in Information contact cyc
inputsInfoCyc.forEach((inputs3) => {
    inputs3.addEventListener("keyup", (event) => {
        inputs3.removeAttribute("style", "border-color: red;");
    });
});

//Event to listen when user typing information in Reason input
inputreason.addEventListener("keyup", function () {
    inputreason.removeAttribute("style", "border-color: red;");
});

//Event to listen when user typing information in Direction input
inputDirec.addEventListener("keyup", function () {
    inputDirec.removeAttribute("style", "border-color: red;");
});

//Event to listen when user typing information in Passwords input
inputPasswords.forEach((pass) => {
    pass.addEventListener("keyup", (event) => {
        inputPasswords[0].removeAttribute("style", "border-color: red;");
        inputPasswords[1].removeAttribute("style", "border-color: red;");
    });
});

/**
 * Here are the main function before send the informatio at server.
 */

formRegister.addEventListener("submit", function (event) {
    event.preventDefault();

    if (verifyCotizacion(inputreason.value) === true) {
        Swal.fire({
            title: "¿La informacion es correcta?",
            text: "Si durante el proceso de revision se encuentra una irregularidad con tu informacion sera descartada.",
            icon: "info",
            showCancelButton: true,
            confirmButtonColor: "#3498db",
            cancelButtonColor: "#d33",
            confirmButtonText: "¡Si, es correcta!",
            cancelButtonText: "Revisare",
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            }
        });
    }
});