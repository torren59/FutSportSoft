<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="../root/datatable.css">
<link rel="stylesheet" href="../root/servicios/service_style.css">

<div class="service_list" id="listadosede">
    <center>
        <div>
            <h1>SEDES</h1>
        </div>
    </center>
    <table id="tabla">
        <thead>
            <tr>
                <td>Acción</td>
                <td>Estado</td>
                <td>Nombre</td>
                <td>Municipio</td>
                <td>Barrio</td>
                <td>Dirección</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><button class="btn btn-primary" onclick="activaedicion('listadosede','edicionsede')"><i class="fa-solid fa-pen"></i></button></td>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
                </td>
                <td>La Colombiana</td>
                <td>Bello</td>
                <td>La pradera</td>
                <td>Calle 15 #33-10</td>
            </tr>
            <tr>
                <td><button class="btn btn-primary" onclick="activaedicion('listadosede','edicionsede')"><i class="fa-solid fa-pen"></i></button></td>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
                </td>
                <td>La canchita</td>
                <td>Bello</td>
                <td>El cafetal</td>
                <td>Calle 65 #11-15</td>
            </tr>
            <tr>
                <td><button class="btn btn-primary" onclick="activaedicion('listadosede','edicionsede')"> <i class="fa-solid fa-pen"></i> </button></td>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
                </td>
                <td>Eiffel</td>
                <td>Bello</td>
                <td>Paris</td>
                <td>Calle 12 #33-15</td>
            </tr>
            <tr>
                <td><button class="btn btn-primary" onclick="activaedicion('listadosede','edicionsede')"> <i class="fa-solid fa-pen"></i> </button></td>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
                </td>
                <td>Colanta 3</td>
                <td>ItagÜí</td>
                <td>El rosario</td>
                <td>Calle 12 #33-15</td>
            </tr>
        </tbody>
    </table>
    
    <div class="addbtn">
    <button class="btn btn-success col-3" onclick="switchadicion('sedeadicion')">Nueva sede <i class="fa-solid fa-circle-plus"></i></button>
    </div>

    <div class="adicion adicion_off" id="sedeadicion">
        <div class="adicion_title">
            <h1>Nueva sede</h1>
        </div>
        <div class="adicion_content" id="addsed">

            <div class="mb-3  col-7">
                <label for="exampleInputEmail1" class="form-label">Nombre sede</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Municipio</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Barrio</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Direccion</label>
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
    
    <div class="btnCerrar">
        <button type="button" class="btn btn-primary btn-danger" onclick="quitaedicion('listadosede','edicionsede')"><i class="fa-solid fa-circle-xmark"></i></button>
    </div>
    <h2>Editar sede</h2>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="email" class="form-control" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Municipio</label>
        <input type="email" class="form-control" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Barrio</label>
        <input type="email" class="form-control" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Dirección</label>
        <input type="email" class="form-control" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <button type="button" class="btn btn-primary btn-success" onclick="swal_saveedition(), quitaedicion('listadosede','edicionsede')">Guardar</i></button>
    </div>

</div>



<script>
    let tabla = document.getElementById("tabla");
    let datatable = new DataTable(tabla);
</script>