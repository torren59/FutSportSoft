

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../root/login.css">

    <title>Login</title>
</head>

<body>
    <div id="background-container-login">
        <div class="main-container">
            <div class="text-in-container">
                <!--Este es el login-->
                <div class="login-form-block login-form-block-on" id="login">
                    <div>
                        <h1>Ingreso</h1>
                    </div>
                    <form action="./login.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo Elentrónico</label>
                        <input type="email" class="form-control" aria-describedby="emailHelp" name="mail">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" aria-describedby="emailHelp" name="clave">
                    </div>
                    <button type="submit" class="btn btn-primary" name="ingresosub">Ingresar</button>
                    </form>
                    <div>
                        <sub><a id="btnchange" class="col-1" onclick="logintosave()">Recuperar contraseña</a></sub>
                    </div>
                </div>

                <!--Este es el recuperar contraseña-->
                <div class="login-form-block" style="text-align: center;" id="save">
                    <div>
                        <h1>Recuperación de contraseña</h1>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo Elentrónico</label>
                        <input type="email" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <button type="button" class="btn btn-primary" onclick="swal_rescue()" >Enviar código a correo</button>
                    <div>
                        <sub><a id="btnchange" class="col-1" onclick="logintosave()">Volver a login</a></sub>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../root/login.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>

<?php
session_start();
if(isset($_POST["ingresosub"])){
    $_SESSION["user_type"]=$_POST["clave"];
    /*
    0==ADMIN
    1==DT
    2==ADMIN
     */
    header('Location:http://localhost/FutSportSoft/vistas/mainsite.php');
}
?>