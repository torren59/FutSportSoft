<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="../root/datatable.css">
<link rel="stylesheet" href="../root/servicios/service_style.css">
<div class="service_list" id="listadodeporte">
    <center>
        <div>
            <h1>DEPORTES</h1>
        </div>
    </center>
    <table id="tabla">
        <thead>
            <tr>
                <td>Estado</td>
                <td>Nombre</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
                </td>
                <td>Fútbol</td>

            </tr>
            <tr>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
                </td>
                <td>Basketball</td>
            </tr>
            <tr>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
                </td>
                <td>Volleyball</td>
            </tr>
            <tr>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
                </td>
                <td>Natación</td>
            </tr>
        </tbody>
    </table>
    <div class="addbtn">
        <button class="btn btn-success col-4" onclick="switchadicion('deporteadicion')">Nuevo deporte <i class="fa-solid fa-circle-plus"></i></button>
    </div>

    <div class="adicion adicion_off" id="deporteadicion">
        <div class="adicion_title">
            <h1>Nueva sede</h1>
        </div>
        <div class="adicion_content" id="addsed">

            <div class="mb-3  col-7">
                <label for="exampleInputEmail1" class="form-label">Nombre del deporte</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>

            <div class="mb-3 col-7">
                <button type="button" class="btn btn-primary btn-success" onclick="swal_savecreation(), switchadicion('deporteadicion')">Guardar</i></button>
                <button type="button" class="btn btn-primary btn-danger" onclick="switchadicion('deporteadicion')">Cancelar</i></button>
            </div>
        </div>
    </div>

</div>

<script>
    let tabla = document.getElementById("tabla");
    let datatable = new DataTable(tabla);
</script>