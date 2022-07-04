<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="../root/datatable.css">
<link rel="stylesheet" href="../root/servicios/service_style.css">
<div class="service_list" id="listadosede">
    <center>
        <div class="tituloTabla">
            <h1>USUARIOS</h1>
        </div>
    </center>
    <table id="tabla">
        <thead>
            <tr>
                <td>Acción</td>
                <td>Estado</td>
                <td>Nombre</td>
                <td>Rol</td>

            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_SESSION['user_type'])) {
                if ($_SESSION['user_type'] == 0) {
            ?>


                    <tr>
                        <td><button class="btn btn-primary" id="seg_usuario_editbtn" onclick="activaedicion('listadosede','edicionsede')"><i class="fa-solid fa-pen"></i></button>
                            <button class="btn btn-secondary" id="seg_usuario_detailbtn" onclick="switchadicion('detalle')"><i class="fa-solid fa-circle-info"></i></button>
                        </td>

                        <td>
                            <div class="form-check form-switch" id="seg_usuario_statechk">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                            </div>
                        </td>
                        <td>Daniel martinez</td>
                        <td>Administrador</td>

                    </tr>
                    <tr>
                        <td><button class="btn btn-primary" id="seg_usuario_editbtn2" onclick="activaedicion('listadosede','edicionsede')"><i class="fa-solid fa-pen"></i></button>
                            <button class="btn btn-secondary" id="seg_usuario_detailbtn2" onclick="switchadicion('detalle2')"><i class="fa-solid fa-circle-info"></i></button>
                        </td>
                        <td>
                            <div class="form-check form-switch" id="seg_usuario_statechk2">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                            </div>
                        </td>
                        <td>Jose montoya</td>
                        <td>Director tècnico</td>

                    </tr>
                    <tr>
                        <td><button class="btn btn-primary" id="seg_usuario_editbtn3" onclick="activaedicion('listadosede','edicionsede')"> <i class="fa-solid fa-pen"></i> </button>
                            <button class="btn btn-secondary" id="seg_usuario_detailbtn3" onclick="switchadicion('detalle3')"><i class="fa-solid fa-circle-info"></i></button>
                        </td>
                        <td>
                            <div class="form-check form-switch" id="seg_usuario_statechk3">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                            </div>
                        </td>
                        <td>Carlos Saldarriaga</td>
                        <td>Entrenador</td>

                    </tr>

                <?php
                } else if ($_SESSION['user_type'] == 1) {
                ?>
                    <tr>
                        <td><button class="btn btn-primary" id="seg_usuario_editbtn2" onclick="activaedicion('listadosede','edicionsede')"><i class="fa-solid fa-pen"></i></button>
                            <button class="btn btn-secondary" id="seg_usuario_detailbtn2" onclick="switchadicion('detalle2')"><i class="fa-solid fa-circle-info"></i></button>
                        </td>
                        <td>
                            <div class="form-check form-switch" id="seg_usuario_statechk2">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                            </div>
                        </td>
                        <td>Jose montoya</td>
                        <td>Director tècnico</td>

                    </tr>
                <?php
                } else if ($_SESSION['user_type'] == 2) {
                ?>
                    <tr>
                        <td><button class="btn btn-primary" id="seg_usuario_editbtn3" onclick="activaedicion('listadosede','edicionsede')"> <i class="fa-solid fa-pen"></i> </button>
                            <button class="btn btn-secondary" id="seg_usuario_detailbtn3" onclick="switchadicion('detalle3')"><i class="fa-solid fa-circle-info"></i></button>
                        </td>
                        <td>
                            <div class="form-check form-switch" id="seg_usuario_statechk3">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                            </div>
                        </td>
                        <td>Carlos Saldarriaga</td>
                        <td>Entrenador</td>

                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
    <?php
    if (isset($_SESSION['user_type'])) {
        if ($_SESSION['user_type'] == 0) {
    ?>
            <div class="addbtn" id="seg_usuario_newbtn">
                <button class="btn btn-success col-3" onclick="switchadicion('sedeadicion')">Nuevo Usuario <i class="fa-solid fa-circle-plus"></i></button>
            </div>
    <?php
        }
    }
    ?>
    <div class="adicion adicion_off" id="sedeadicion">
        <div class="adicion_title">
            <h1>Nuevo Usuario</h1>
        </div>
        <div class="adicion_content" id="addsed">

            <div class="mb-3  col-7">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">rol</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Documento</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Direcciòn</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Celular</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <button type="button" class="btn btn-primary btn-success" onclick="swal_savecreation(), switchadicion('sedeadicion')">Guardar</i></button>
                <button type="button" class="btn btn-primary btn-danger" onclick="switchadicion('sedeadicion')">Cancelar</i></button>
            </div>
        </div>
    </div>

</div>

<div class="service_edit" id="edicionsede">
    <br>
    <div class="btnCerrar">
        <button type="button" class="btn btn-danger" onclick="quitaedicion('listadosede','edicionsede')"><i class="fa-solid fa-circle-xmark"></i></button>
    </div>
    <h2>Editar Usuario</h2>

    <div class="mb-3  col-12">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="email" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="mb-3 col-12">
        <label for="exampleInputEmail1" class="form-label">rol</label>
        <input type="email" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="mb-3 col-12">
        <label for="exampleInputEmail1" class="form-label">Documento</label>
        <input type="email" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="mb-3 col-12">
        <label for="exampleInputEmail1" class="form-label">Direcciòn</label>
        <input type="email" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="mb-3 col-12">
        <label for="exampleInputEmail1" class="form-label">Celular</label>
        <input type="email" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="mb-3 col-12">
        <label for="exampleInputEmail1" class="form-label">Correo</label>
        <input type="email" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="mb-3 col-12">
        <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
        <input type="email" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <button type="button" class="btn btn-primary btn-success" onclick="swal_saveedition(), quitaedicion('listadosede','edicionsede')">Guardar</i></button>
    </div>
</div>

<div class="adicion adicion_off" id="detalle">
    <div class="adicion_title">
        <h1>Nuevo Usuario</h1>
    </div>
    <div class="adicion_content" id="addsed">

        <div class="mb-3 col-7">
            <label for="exampleInputEmail1" class="form-label">Cedula</label>
            <p>10378932134</p>
        </div>
        <div class="mb-3 col-7">
            <label for="exampleInputEmail1" class="form-label">Direcciòn</label>
            <p>Carrera 97 # 48 A 106</p>
        </div>
        <div class="mb-3 col-7">
            <label for="exampleInputEmail1" class="form-label">Celular</label>
            <p>3022272156</p>
        </div>
        <div class="mb-3 col-7">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <p>Danielmarte123@gmail.com</p>
        </div>
        <div class="mb-3 col-7">
            <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
            <p>01/11/1992</p>
        </div>
        <div class="mb-3 col-7">
            <button type="button" class="btn btn-primary btn-danger" onclick="switchadicion('detalle')">Cerrar</i></button>
        </div>
    </div>
</div>

<div class="adicion adicion_off" id="detalle2">
    <div class="adicion_title">
        <h1>Nuevo Usuario</h1>
    </div>
    <div class="adicion_content" id="addsed">

        <div class="mb-3 col-7">
            <label for="exampleInputEmail1" class="form-label">Cedula</label>
            <p>1037596245</p>
        </div>
        <div class="mb-3 col-7">
            <label for="exampleInputEmail1" class="form-label">Direcciòn</label>
            <p>Carrera 50 # 67BB A 28</p>
        </div>
        <div class="mb-3 col-7">
            <label for="exampleInputEmail1" class="form-label">Celular</label>
            <p>3004567893</p>
        </div>
        <div class="mb-3 col-7">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <p>Jose563@gmail.com</p>
        </div>
        <div class="mb-3 col-7">
            <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
            <p>30/05/1998</p>
        </div>
        <div class="mb-3 col-7">
            <button type="button" class="btn btn-primary btn-danger" onclick="switchadicion('detalle2')">Cerrar</i></button>
        </div>
    </div>
</div>

<div class="adicion adicion_off" id="detalle3">
    <div class="adicion_title">
        <h1>Nuevo Usuario</h1>
    </div>
    <div class="adicion_content" id="addsed">

        <div class="mb-3 col-7">
            <label for="exampleInputEmail1" class="form-label">Cedula</label>
            <p>10372587894</p>
        </div>
        <div class="mb-3 col-7">
            <label for="exampleInputEmail1" class="form-label">Direcciòn</label>
            <p>Carrera 107B # 56 A 98</p>
        </div>
        <div class="mb-3 col-7">
            <label for="exampleInputEmail1" class="form-label">Celular</label>
            <p>3024567897</p>
        </div>
        <div class="mb-3 col-7">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <p>Carlitos12@gmail.com</p>
        </div>
        <div class="mb-3 col-7">
            <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
            <p>22/01/1990</p>
        </div>
        <div class="mb-3 col-7">
            <button type="button" class="btn btn-primary btn-danger" onclick="switchadicion('detalle3')">Cerrar</i></button>
        </div>
    </div>
</div>

<script>
    let tabla = document.getElementById("tabla");
    let datatable = new DataTable(tabla);
</script>