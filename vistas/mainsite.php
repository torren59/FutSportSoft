<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../root/mainsite.css">
    <title>Main Side</title>
</head>

<body>

    <p hidden id="elpos">
        <?php
        if (isset($_POST["sended"])) {
            echo ($_POST["sended"]);
        } else {
            echo (2);
        }
        ?>
    </p>
    <p hidden id="eluser"><?php echo $_SESSION['user_type'] ?></p>

    <script>
        let sidebar_default = ['seg_configuracion', 'seg_usuario', 'seg_compras', 'seg_compras_prov', 'seg_existencia', 'seg_servdep',
            'seg_servdep_sedes', 'seg_servdep_deportes', 'seg_servdep_categorias', 'seg_venta'
        ];

        let DTsidebar_default = ['seg_dashboard', 'seg_configuracion', 'seg_compras_prov'];

        let ENsidebar_default = ['seg_dashboard','seg_configuracion','seg_compras','seg_existencia', 'seg_servdep_sedes','seg_servdep_categorias',
        'seg_servdep_deportes','seg_venta'];

        let DTcompra5 = ['seg_dashboard', 'seg_configuracion', 'seg_compras_prov','seg_compras_deletebtn', 'seg_compras_deletebtn2',
         'seg_compras_deletebtn3', 'seg_compras_newbtn'];

        let existencia6 = ['seg_dashboard', 'seg_configuracion', 'seg_compras_prov','seg_existencias_statechk', 'seg_existencias_statechk2',
         'seg_existencias_statechk3','seg_existencias_newbtn'];

        let serv_dep10 = ['seg_servdep_editbtn', 'seg_servdep_editbtn2', 'seg_servdep_editbtn3', 'seg_servdep_editbtn4',
            'seg_servdep_statechk', 'seg_servdep_statechk2', 'seg_servdep_statechk3', 'seg_servdep_statechk4',
            'seg_servdep_newbtn'
        ];

        let ENserv_dep10 = ['seg_dashboard','seg_configuracion','seg_compras','seg_existencia', 'seg_servdep_sedes','seg_servdep_categorias',
        'seg_servdep_deportes','seg_venta','seg_servdep_editbtn', 'seg_servdep_editbtn2', 'seg_servdep_editbtn3', 'seg_servdep_editbtn4',
            'seg_servdep_statechk', 'seg_servdep_statechk2', 'seg_servdep_statechk3', 'seg_servdep_statechk4',
            'seg_servdep_newbtn'];

        let deportista11 = ['seg_deportistas_editbtn', 'seg_deportistas_editbtn2', 'seg_deportistas_editbtn3',
            'seg_deportistas_statechk', 'seg_deportistas_statechk2', 'seg_deportistas_statechk3', 'seg_deportistas_newbtn'
        ];

        let ENdeportista11 = ['seg_dashboard','seg_configuracion','seg_compras','seg_existencia', 'seg_servdep_sedes','seg_servdep_categorias',
        'seg_servdep_deportes','seg_venta','seg_deportistas_editbtn', 'seg_deportistas_editbtn2', 'seg_deportistas_editbtn3',
            'seg_deportistas_statechk', 'seg_deportistas_statechk2', 'seg_deportistas_statechk3', 'seg_deportistas_newbtn'];

        let venta12 = ['seg_ventas_detailbtn', 'seg_ventas_detailbtn2', 'seg_ventas_detailbtn3', 'seg_ventas_deletebtn',
            'seg_ventas_deletebtn2', 'seg_ventas_deletebtn3', 'seg_ventas_newbtn'
        ];

        let DTventa12 = ['seg_dashboard', 'seg_configuracion', 'seg_compras_prov',
        'seg_ventas_deletebtn','seg_ventas_deletebtn2', 'seg_ventas_deletebtn3', 'seg_ventas_newbtn']

        function restablecimiento(some_array) {
            for (var id of some_array) {
                let elemento = document.getElementById(id);
                let estado = elemento.classList.contains("dash_hide");
                if (estado == true) {
                    elemento.classList.remove("dash_hide");
                }
            }
        }

        function censura(some_array) {
            for (var id of some_array) {
                let elemento = document.getElementById(id);
                let estado = elemento.classList.contains("dash_hide");
                if (estado == false) {
                    elemento.classList.add("dash_hide");
                }
            }
        }

        function switches() {
            let pos = document.getElementById("elpos").textContent;
            let user = document.getElementById("eluser").textContent;

            if (user == 0) {

            } else if (user == 1) {
                //restablecimiento(sidebar_default);

                if(pos == 5){
                    censura(DTcompra5);
                }
                else if(pos == 6){
                    censura(existencia6);
                }
                else if(pos == 12){
                    censura(DTventa12);
                }
                else{
                    censura(DTsidebar_default);
                }

            } else if (user == 2) {
                if (pos == 10){
                    censura(ENserv_dep10);
                }
                else if (pos == 11){
                    censura(ENdeportista11);
                }
                else{
                    censura(ENsidebar_default);
                }
            }
        }

        window.onload = switches;
    </script>

    <div id="background-container-mainsite">
        <div id="megacontainer">
            <div id="sidevar" class="sidevaron">
                <form action="./mainsite.php" method="post">
                    <div class="grid-sidevar">
                        <div class="main-sidevar-title">
                            <h3><img src="../IMG/logo.png" alt="Logo academia de fútbol"></h3>
                        </div>
                        <div class="main-sidevar-area">

                            <div class="main-sidevar-item" id="seg_configuracion">
                                <button type="button" class="btn primary-btn col-12 sidevar-btn-title" onclick="items('configuracion')">
                                    CONFIGURACION
                                </button>
                                <div class="main-sidevar-item-links-off" id="configuracion">
                                    <button type="submit" class="btn col-12" name="sended" value="1">Gestion de roles</button>
                                </div>
                            </div>

                            <div class="main-sidevar-item" id="seg_usuario">
                                <button type="button" class="btn primary-btn col-12 sidevar-btn-title" onclick="items('usuario')">
                                    USUARIOS
                                </button>
                                <div class="main-sidevar-item-links-off" id="usuario">
                                    <button type="submit" class="btn col-12" name="sended" value="2">Gestion de usuario</button>
                                    <button type="submit" class="btn col-12" name="sended" value="3">Gestion de acceso</button>
                                </div>
                            </div>

                            <div class="main-sidevar-item" id="seg_compras">
                                <button type="button" class="btn primary-btn col-12 sidevar-btn-title" onclick="items('compras')">
                                    COMPRAS
                                </button>
                                <div class="main-sidevar-item-links-off" id="compras">
                                    <button type="submit" class="btn col-12" id="seg_compras_prov" name="sended" value="4">Proveedores</button>
                                    <button type="submit" class="btn col-12" name="sended" value="5">Gestion de compras</button>
                                </div>
                            </div>

                            <div class="main-sidevar-item" id="seg_existencia">
                                <button type="button" class="btn primary-btn col-12 sidevar-btn-title" onclick="items('existencia')">
                                    EXISTENCIAS
                                </button>
                                <div class="main-sidevar-item-links-off" id="existencia">
                                    <button type="submit" class="btn col-12" name="sended" value="6">Gestion de existencias</button>
                                </div>
                            </div>

                            <div class="main-sidevar-item" id="seg_servdep">
                                <button type="button" class="btn primary-btn col-12 sidevar-btn-title" onclick="items('servdeportivos')">
                                    SERV. DEPORTIVOS
                                </button>
                                <div class="main-sidevar-item-links-off" id="servdeportivos">
                                    <button type="submit" class="btn col-12" id="seg_servdep_sedes" name="sended" value="7">Sedes</button>
                                    <button type="submit" class="btn col-12" id="seg_servdep_deportes" name="sended" value="8">Gestion de deportes</button>
                                    <button type="submit" class="btn col-12" id="seg_servdep_categorias" name="sended" value="9">Gestion de categorías</button>
                                    <button type="submit" class="btn col-12" name="sended" value="10">Gestion de servicio deportivo</button>
                                    <button type="submit" class="btn col-12" name="sended" value="11">Gestion de deporitstas</button>
                                </div>
                            </div>

                            <div class="main-sidevar-item" id="seg_venta">
                                <button type="button" class="btn primary-btn col-12 sidevar-btn-title" onclick="items('ventas')">
                                    VENTAS
                                </button>
                                <div class="main-sidevar-item-links-off" id="ventas">
                                    <button type="submit" class="btn col-12" name="sended" value="12">Gestion de ventas</button>
                                </div>
                            </div>

                        </div>
                        <div class="main-sidevar-area" id="logout">
                            <a href="./login.php"><button type="button" class="btn btn-warning">Cerrar sesión</button></a>
                        </div>
                    </div>

            </div>
            <!--Fin SideVar-->
            <!--Inicio zona de contenido-->
            <div id="content-site-block" class="contentsiteblockon">

                <div class="zonaalta">
                    <div class="superiorboton">
                        <button type="button" class="btn btn-warning" onclick="sidevar()"><i class="fa-solid fa-grip-lines"></i></button>
                        <button type="submit" class="btn btn-warning" id="seg_dashboard" name="sended" value="13">Dashboard</i></button>
                        <button type="submit" class="btn btn-warning" name="sended" value="14">Ayuda</button>
                    </div>

                </div>
                </form>
                <div class="contenido">
                    <?php
                    if (isset($_POST["sended"])) {
                        $valor = $_POST["sended"];

                        switch ($valor) {
                            case 1:
                                include("./servicios/roles.php");
                                break;

                            case 2:
                                include("./servicios/usuario.php");
                                break;

                            case 3:
                                include("./servicios/acceso.php");
                                break;

                            case 4:
                                include("./compras/proveedores.php");
                                break;

                            case 5:
                                include("./compras/gestiondecompras.php");
                                break;

                            case 6:
                                include("./existencias/existencias.php");
                                break;

                            case 7:
                                include("./servicios/sedes.php");
                                break;

                            case 8:
                                include("./servicios/deportes.php");
                                break;

                            case 9:
                                include("./servicios/categorias.php");
                                break;

                            case 10:
                                include("./servicios/serviciosdeportivos.php");
                                break;

                            case 11:
                                include("./servicios/deportistas.php");
                                break;

                            case 12:
                                include("./ventas/gestiondeventas.php");
                                break;

                            case 13:
                                include("./servicios/dashboard.php");
                                break;

                            case 14:
                                include("./servicios/ayudas.php");
                                break;

                            default:
                                break;
                        }
                    } else {
                        if (isset($_SESSION["user_type"])) {
                            $usuario = $_SESSION["user_type"];
                            switch ($usuario) {
                                case '0':
                                    include("./servicios/dashboard.php");
                                    break;
                                case 1:
                                    include("./servicios/usuario.php");
                                    break;
                                case 2:
                                    include("./servicios/usuario.php");
                                    break;
                            }
                        }
                    }


                    ?>
                    <script src="../root/mainsite.js"></script>
                    <script src="../root/servicios/service.js"></script>
                    <script src="https://kit.fontawesome.com/bd2541fe3a.js" crossorigin="anonymous"></script>
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script src="../root/segregacion/segregacion.js"></script>

</body>

</html>