<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estas por terminar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/finish.css">

</head>

<body>
    <div class="main-wrapper-yes">
        <div class="container-main">
            <img src="./assets/img/newlogotype.png" style="margin-bottom: 25px;" width="300px" height="auto" alt="">
            <h3 style="margin-bottom: 20px;">Estimado proveedor <span style="color: #3498db;">"<?php echo $rfc = $_GET['user']; ?>"</span></h3>
            <p>Se genero la prealta de tu registro, el area correspondiente ya tiene la informacion necesaria para que puedas formar parte de la sinergia y de la familia...</p>
            <p>Encuanto nuestros especialistas validen tu documento, te llegara un correo electronico con las instrucciones para nuestro portal.</p>
            <div id="reloj">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <span id="time"></span>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <script src="./app/finish-app.js"></script>
</body>

</html>