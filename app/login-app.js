//DOM'S declaration of elements in formula
let inputRfc = document.getElementById("rfcInput");
let inputPassw = document.getElementById("passwordInput");
let refreshButton = document.getElementById("refresh-button");
let captchaScreen = document.getElementById("catpcha-screen");
let inputCaptcha = document.getElementById("input-catpcha");
let messageCapt = document.getElementById("message-captcha");
let btnSubmit = document.getElementById("btn-submit");
let messageRfc = document.getElementById("rfc-message");
let messagePassword = document.getElementById("password-message");
let form = document.getElementById("form-login");

/**
 * Here will are the methods that verify the formula information
 */

// Method to generate the captcha text
function generateTextCaptcha(longitud) {
    let characters =
        "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    let text = "";

    for (var i = 0; i < longitud; i++) {
        var indice = Math.floor(Math.random() * characters.length);
        text += characters.charAt(indice);
    }

    captchaScreen.value = text;
}

//Function to validation RFC Format
function VerifyRFC(rfc) {
    const rfcRegex = /^[A-ZÑ&]{3}\d{6}[A-Z0-9]{3}$/;
    let physical = rfcRegex.test(rfc);

    const rfcRegex1 = /^[A-ZÑ&]{4}\d{6}[A-Z1-9]{3}$/;
    let moral = rfcRegex1.test(rfc);

    if (physical == true || moral == true) {
        return true;
    } else {
        return false;
    }
}

//Function to validation inputs form login
function validationForm(rfc, password, captcha) {
    let verifycation1 = true;
    let verifycation2 = true;
    let verifycation3 = true;

    //Verify RFC
    if (rfc == "") {
        messageRfc.textContent = "*Ingresa tu RFC";
        inputRfc.setAttribute("style", "border-color: red;");
        verifycation1 = false;
    } else if (rfc.includes(' ')) {
        messageRfc.textContent = "*Hay espacios";
        inputRfc.setAttribute("style", "border-color: red;");
        verifycation1 = false;
    } else if (VerifyRFC(rfc) == false) {
        messageRfc.textContent = "*Formato de RFC no valido";
        inputRfc.setAttribute("style", "border-color: red;");
        verifycation1 = false;
    } else {
        messageRfc.textContent = "";
        inputRfc.removeAttribute("style", "border-color: red;");
        verifycation1 = true;
    }

    //Verify Pass
    if (password == "") {
        messagePassword.textContent = "*Ingresa tu Contraseña";
        inputPassw.setAttribute("style", "border-color: red;");
        verifycation2 = false;
    } else {
        messagePassword.textContent = "";
        inputPassw.removeAttribute("style", "border-color: red;");
        verifycation2 = true;
    }

    //Verify Captcha
    if(captcha == "") {
        messageCapt.textContent = "*Resuelve el captcha";
        inputCaptcha.setAttribute("style", "border-color: orange;");
        verifycation3 = false;
    } else if (captcha != captchaScreen.value) {
        messageCapt.textContent = "*Captcha incorrecto";
        inputCaptcha.setAttribute("style", "border-color: orange;");
        verifycation3 = false;
    } else {
        messageCapt.textContent = "";
        inputCaptcha.removeAttribute("style", "border-color: orange;");
        verifycation3 = true;
    }

    //Validation if some input fails
    if (verifycation1 != true || verifycation2 != true || verifycation3 != true)
        return false;
    else
        return true;
}

/**
 * Here will are the events that interactive with the form
 */

//Here is being controlled when user clics on button Submit
form.addEventListener("submit", function (event) {
    event.preventDefault();

    if (validationForm(inputRfc.value, inputPassw.value, inputCaptcha.value) == true) {
        this.submit();
    } 
    
});

/**
 *  Here will be function for when the HTML is load and others.
 */

//Event for when the user clicks Update button.
refreshButton.addEventListener("click", function() {
    generateTextCaptcha(7);
});

//Event for when the user acces at app web (Login)
document.addEventListener("DOMContentLoaded", function() {
    generateTextCaptcha(7);
});
