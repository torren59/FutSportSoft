<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="../root/datatable.css">
<link rel="stylesheet" href="../root/servicios/service_style.css">
<div class="service_list" id="listadorol">
    <center>
    <div class="tituloTabla">
            <h1>ROLES</h1>
        </div>
    </center>
    <table id="tabla">
        <thead>
            <tr>
                <td>Acción</td>
                <td>Estado</td>
                <td>Nombre</td>
                <td>Permiso</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><button class="btn btn-primary" onclick="activaedicion('listadorol','edicionrol')"><i class="fa-solid fa-pen"></i></button></td>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
                </td>
                <td>Entrenador</td>
                <td>Adiciòn de roles</td>
            </tr>
            <tr>
                <td><button class="btn btn-primary" onclick="activaedicion('listadorol','edicionrol')"><i class="fa-solid fa-pen"></i></button></td>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
                </td>
                <td>Director tecnico</td>
                <td>Ediciòn de usuarios</td>

            </tr>
        </tbody>
    </table>
    <div class="addbtn">
    <button class="btn btn-success col-3" onclick="switchadicion('roladicion')">Nuevo Rol <i class="fa-solid fa-circle-plus"></i></button>
    </div>

    <div class="adicion adicion_off" id="roladicion">
        <div class="adicion_title">
            <h1>Nuevo Rol</h1>
        </div>
        <div class="adicion_content" id="addsed">

            <div class="mb-3  col-5">
                <label for="exampleInputEmail1" class="form-label">Nombre Rol</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="adicion_title">
            <h2>Lista de Permisos</h2>
            </div>

            <table class="table">
                <thead class="thead-dark">
                    <tr>

                        <th scope="col">#</th>
                        <th scope="col">Descripciòn</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Visualizaciòn de deportistas</label>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Visualizaciòn por grupos</label>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Adiciòn de deportistas</label>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td><input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Ediciòn de deportistas</label>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="mb-3 col-7">
            <button type="button" class="btn btn-primary btn-success" onclick="swal_savecreation(), switchadicion('roladicion')">Guardar</i></button>
            <button type="button" class="btn btn-primary btn-danger" onclick="switchadicion('roladicion')">Cancelar</i></button>
        </div>
    </div>
</div>



<div class="service_edit" id="edicionrol">
    <br>
    <div class="btnCerrar">
        <button type="button" class="btn btn-primary btn-danger" onclick="quitaedicion('listadorol','edicionrol')"><i class="fa-solid fa-circle-xmark"></i></button>
    </div>
    <h1>Editar Rol</h1>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="email" class="form-control" aria-describedby="emailHelp">
    </div>
    <h2>Lista de Permisos</h2>

    <table class="table">
        <thead class="thead-dark">
            <tr>

                <th scope="col">#</th>
                <th scope="col">Descripciòn</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Visualizaciòn de deportistas</label>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td><input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Visualizaciòn por grupos</label>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td><input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Adiciòn de deportistas</label>
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td><input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Ediciòn de deportistas</label>
                </td>
            </tr>
        </tbody>
    </table>



    <div class="mb-3">
        <button type="button" class="btn btn-primary btn-success" onclick="swal_saveedition(), quitaedicion('listadorol','edicionrol')">Guardar</i></button>
    </div>

</div>



<script>
    let tabla = document.getElementById("tabla");
    let datatable = new DataTable(tabla);
</script>