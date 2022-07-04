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
                
                <td>Nombre</td>
                <td>Rol</td>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td><button class="btn btn-secondary" onclick="switchadicion('detalle')"><i class="fa-solid fa-circle-info"></i></button></td>
                    
               

               
                <td>Daniel martinez</td>
                <td>Administrador</td>

            </tr>
            <tr>
                
                    <td><button class="btn btn-secondary" onclick="switchadicion('detalle2')"><i class="fa-solid fa-circle-info"></i></button></td>
                
               
                <td>Jose montoya</td>
                <td>Director tècnico</td>

            </tr>
            <tr>
               
                   <td> <button class="btn btn-secondary" onclick="switchadicion('detalle3')"><i class="fa-solid fa-circle-info"></i></button></td>
               
                <td>Carlos Saldarriaga</td>
                <td>Entrenador</td>

            </tr>
        </tbody>
    </table>
   
   

<div class="adicion adicion_off" id="detalle">
        <div class="adicion_title">
            <h1>Cambiar Contraseña</h1>
        </div>
        <div class="adicion_content" id="addsed">

        <div class="mb-3  col-7">
                <label for="exampleInputEmail1" class="form-label">Nueva contraseña</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Confirmar contraseña</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <button type="button" class="btn btn-primary btn-success" onclick="switchadicion('detalle')">Guardar</i></button>
                <button type="button" class="btn btn-primary btn-danger" onclick="switchadicion('detalle')">Cerrar</i></button>
            </div>
        </div>
    </div>
    
    <div class="adicion adicion_off" id="detalle2">
        <div class="adicion_title">
        <h1>Cambiar Contraseña</h1>
        </div>
        <div class="adicion_content" id="addsed">

        <div class="mb-3  col-7">
                <label for="exampleInputEmail1" class="form-label">Nueva contraseña</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Confirmar contraseña</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
            <button type="button" class="btn btn-primary btn-success" onclick="switchadicion('detalle2')">Guardar</i></button>
                <button type="button" class="btn btn-primary btn-danger" onclick="switchadicion('detalle2')">Cerrar</i></button>
            </div>
        </div>
    </div>

    <div class="adicion adicion_off" id="detalle3">
        <div class="adicion_title">
        <h1>Cambiar Contraseña</h1>
        </div>
        <div class="adicion_content" id="addsed">

        <div class="mb-3  col-7">
                <label for="exampleInputEmail1" class="form-label">Nueva contraseña</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Confirmar contraseña</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
            <button type="button" class="btn btn-primary btn-success" onclick="switchadicion('detalle3')">Guardar</i></button>
                <button type="button" class="btn btn-primary btn-danger" onclick="switchadicion('detalle3')">Cerrar</i></button>
            </div>
        </div>
    </div>

<script>
    let tabla = document.getElementById("tabla");
    let datatable = new DataTable(tabla);
</script>