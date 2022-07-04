<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="../root/datatable.css">
<link rel="stylesheet" href="../root/servicios/service_style.css">

<div class="service_list" id="listadocategory">
    <center>
        <div>
            <h1>CATEGORIAS</h1>
        </div>
    </center>
    <table id="tabla">
        <thead>
            <tr>
                <td>Acción</td>
                <td>Estado</td>
                <td>Nombre deporte</td>
                <td>nombre categoría</td>
                <td>Rango edad</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><button class="btn btn-primary" onclick="activaedicion('listadocategory','edicioncategory')"> <i class="fa-solid fa-pen"></i> </button></td>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
                </td>
                <td>Fútbol</td>
                <td>Sub-17</td>
                <td>15 años - 17 años</td>
            </tr>
            <tr>
                <td><button class="btn btn-primary" onclick="activaedicion('listadocategory','edicioncategory')"> <i class="fa-solid fa-pen"></i> </button></td>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
                </td>
                <td>Basketball</td>
                <td>Juvenil</td>
                <td>11 años - 16 años</td>
            </tr>
            <tr>
                <td><button class="btn btn-primary" onclick="activaedicion('listadocategory','edicioncategory')"> <i class="fa-solid fa-pen"></i> </button></td>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
                </td>
                <td>Natación</td>
                <td>Recreativa</td>
                <td>No especificado</td>
            </tr>
            <tr>
                <td><button class="btn btn-primary" onclick="activaedicion('listadocategory','edicioncategory')"> <i class="fa-solid fa-pen"></i> </button></td>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
                </td>
                <td>Volleyball</td>
                <td>Playa</td>
                <td>18+</td>
            </tr>
        </tbody>
    </table>
    <div class="addbtn">
    <button class="btn btn-success col-4" onclick="switchadicion('categoryadicion')">Nueva categoría</button>
    </div>

    <div class="adicion adicion_off" id="categoryadicion">
        <div class="adicion_title">
            <h1>Nueva categoría</h1>
        </div>
        <div class="adicion_content" id="addsed">

            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Nombre deporte</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>--</option>
                    <option value="1">Fútbol</option>
                    <option value="2">Basketball</option>
                    <option value="3">Volleyball</option>
                    <option value="4">Natación</option>
                </select>
            </div>

            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Nombre categoría</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>

            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Rango edad</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <button type="button" class="btn btn-primary btn-success" onclick="swal_savecreation(), switchadicion('categoryadicion')">Guardar</i></button>
                <button type="button" class="btn btn-primary btn-danger" onclick="switchadicion('categoryadicion')">Cancelar</i></button>
            </div>
        </div>
    </div>
</div>

<div class="service_edit" id="edicioncategory">
    <br>
    
    <div class="btnCerrar">
    <button type="button" class="btn btn-primary btn-danger" onclick="quitaedicion('listadocategory','edicioncategory')"><i class="fa-solid fa-circle-xmark"></i></button>
    </div>

    <h2>Editar categoría</h2>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre deporte</label>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>--</option>
            <option value="1">Fútbol</option>
            <option value="2">Basketball</option>
            <option value="3">Volleyball</option>
            <option value="4">Natación</option>

        </select>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre categoría</label>
        <input type="email" class="form-control" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Rango edad</label>
        <input type="email" class="form-control" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <button type="button" class="btn btn-primary btn-success" onclick="swal_saveedition(), quitaedicion('listadocategory','edicioncategory')">Guardar</i></button>
    </div>

</div>

<script>
    let tabla = document.getElementById("tabla");
    let datatable = new DataTable(tabla);
</script>