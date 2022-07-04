<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="../root/datatable.css">
<link rel="stylesheet" href="../root/servicios/service_style.css">
<div class="service_list" id="listadoservdep">
    <center>
        <div>
            <h1>SERVICIOS DEPORTIVOS</h1>
        </div>
    </center>
    <table id="tabla">
        <thead>
            <tr>
                <td>Acción</td>
                <td>Estado</td>
                <td>Deporte</td>
                <td>Categoría</td>
                <td>Nombre servicio</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <button class="btn btn-primary" id="seg_servdep_editbtn" title="Editar" onclick="activaedicion('listadoservdep','edicionservdep')"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn btn-secondary" title="Informacion" onclick="switchadicion('servdepdetalle')"><i class="fa-solid fa-circle-info"></i></button>
                </td>
                <td>
                    <div class="form-check form-switch" id="seg_servdep_statechk">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
                </td>
                <td>Fútbol</td>
                <td>Sub-17</td>
                <td>Leones Sub-17</td>
            </tr>
            <tr>
                <td>
                    <button class="btn btn-primary" id="seg_servdep_editbtn2" title="Editar" onclick="activaedicion('listadoservdep','edicionservdep')"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn btn-secondary" title="Informacion" onclick="switchadicion('servdepdetalle')"><i class="fa-solid fa-circle-info"></i></button>
                </td>
                <td>
                    <div class="form-check form-switch" id="seg_servdep_statechk2">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
                </td>
                <td>Basketball</td>
                <td>Juvenil</td>
                <td>Lakers Colombian</td>
            </tr>
            <tr>
                <td>
                    <button class="btn btn-primary" id="seg_servdep_editbtn3" title="Editar" onclick="activaedicion('listadoservdep','edicionservdep')"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn btn-secondary" title="Informacion" onclick="switchadicion('servdepdetalle')"><i class="fa-solid fa-circle-info"></i></button>
                </td>
                <td>
                    <div class="form-check form-switch" id="seg_servdep_statechk3">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
                </td>
                <td>Natación</td>
                <td>Recreativa</td>
                <td>Dolphins</td>
            </tr>
            <tr>
                <td>
                    <button class="btn btn-primary" id="seg_servdep_editbtn4" title="Editar" onclick="activaedicion('listadoservdep','edicionservdep')"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn btn-secondary" title="Informacion" onclick="switchadicion('servdepdetalle')"><i class="fa-solid fa-circle-info"></i></button>
                </td>
                <td>
                    <div class="form-check form-switch" id="seg_servdep_statechk4">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
                </td>
                <td>Volleyball</td>
                <td>Playa</td>
                <td>Sand Champions</td>
            </tr>
        </tbody>
    </table>
    <div class="addbtn" id="seg_servdep_newbtn">
    <button class="btn btn-success col-4" onclick="switchadicion('servdepadicion')">Nuevo servicio deportivo <i class="fa-solid fa-circle-plus"></i></button>
    </div>

    <div class="adicion adicion_off" id="servdepadicion">
        <div class="adicion_title">
            <h1>Nuevo servicio deportivo</h1>
        </div><br>
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
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>--</option>
                    <option value="1">infantil</option>
                    <option value="2">juvenil</option>
                    <option value="3">Entendido</option>
                    <option value="4">Profesional</option>
                </select>
            </div>

            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Nombre servicio deportivo</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>

            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Nombre Sede</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>--</option>
                    <option value="1">La Colombiana - Bello</option>
                    <option value="2">La canchita - Bello</option>
                    <option value="3">Eiffel - Bello</option>
                    <option value="4">Colanta 3 - Itagüí</option>
                </select>
            </div>

            <div class="mb-3 col-11" id="jaja">
                <table id="tabla" style="width: 100%">
                    <thead>
                        <tr>
                            <td>Dia</td>
                            <td>Inicia</td>
                            <td>Finaliza</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lunes</td>
                            <td>
                                <input type="time" class="form-control" aria-describedby="starttime">
                            </td>
                            <td>
                                <input type="time" class="form-control" aria-describedby="starttime">
                            </td>
                        </tr>

                        <tr>
                            <td>Martes</td>
                            <td>
                                <input type="time" class="form-control" aria-describedby="starttime">
                            </td>
                            <td>
                                <input type="time" class="form-control" aria-describedby="starttime">
                            </td>
                        </tr>

                        <tr>
                            <td>Miércoles</td>
                            <td>
                                <input type="time" class="form-control" aria-describedby="starttime">
                            </td>
                            <td>
                                <input type="time" class="form-control" aria-describedby="starttime">
                            </td>
                        </tr>

                        <tr>
                            <td>Jueves</td>
                            <td>
                                <input type="time" class="form-control" aria-describedby="starttime">
                            </td>
                            <td>
                                <input type="time" class="form-control" aria-describedby="starttime">
                            </td>
                        </tr>

                        <tr>
                            <td>Viernes</td>
                            <td>
                                <input type="time" class="form-control" aria-describedby="starttime">
                            </td>
                            <td>
                                <input type="time" class="form-control" aria-describedby="starttime">
                            </td>
                        </tr>

                        <tr>
                            <td>Sábado</td>
                            <td>
                                <input type="time" class="form-control" aria-describedby="starttime">
                            </td>
                            <td>
                                <input type="time" class="form-control" aria-describedby="starttime">
                            </td>
                        </tr>

                        <tr>
                            <td>Domingo</td>
                            <td>
                                <input type="time" class="form-control" aria-describedby="starttime">
                            </td>
                            <td>
                                <input type="time" class="form-control" aria-describedby="starttime">
                            </td>
                        </tr>

                    </tbody>
                </table>
                <button class="btn btn-success col-12" style="margin-top: 3%" onclick="updateservdepall()">Actualizar todos</button>
            </div>
            <div class="mb-3 col-7">
                <button type="button" class="btn btn-primary btn-success" onclick="swal_savecreation(), switchadicion('servdepadicion')">Guardar</i></button>
                <button type="button" class="btn btn-primary btn-danger" onclick="switchadicion('servdepadicion')">Cancelar</i></button>
            </div>
        </div>
    </div>

    <div class="adicion adicion_off" id="servdepdetalle">
        <div class="adicion_title">
            <h1>Detalle servicio deportivo</h1>
        </div>
        <div class="adicion_content" id="addsed">

            <div class="mb-3 col-7">
                <b><label for="exampleInputEmail1" class="form-label">Nombre deporte</label></b><br>
                Fútbol
            </div>

            <div class="mb-3 col-7">
                <b><label for="exampleInputEmail1" class="form-label">Nombre categoría</label></b><br>
                Juvenil
            </div>

            <div class="mb-3 col-7">
                <b><label for="exampleInputEmail1" class="form-label">Nombre servicio deportivo</label></b><br>
                Leones Sub-17
            </div>

            <div class="mb-3 col-7">
                <b><label for="exampleInputEmail1" class="form-label">Nombre Sede</label></b><br>
                Colanta 3 - Itagüí
            </div>

            <div class="mb-3 col-11" id="jaja">
                <table id="tabla" style="width: 100%">
                    <thead>
                        <tr>
                            <td>Dia</td>
                            <td>Inicia</td>
                            <td>Finaliza</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lunes</td>
                            <td>
                                11:00 .a.m
                            </td>
                            <td>
                                02:00 .p.m
                            </td>
                        </tr>

                        <tr>
                            <td>Martes</td>
                            <td>
                                --
                            </td>
                            <td>
                                --
                            </td>
                        </tr>

                        <tr>
                            <td>Miércoles</td>
                            <td>
                                08:00 .a.m
                            </td>
                            <td>
                                12:00 .p.m
                            </td>
                        </tr>

                        <tr>
                            <td>Jueves</td>
                            <td>
                                09:00 .a.m
                            </td>
                            <td>
                                11:00 .p.m
                            </td>
                        </tr>

                        <tr>
                            <td>Viernes</td>
                            <td>
                                --
                            </td>
                            <td>
                                --
                            </td>
                        </tr>

                        <tr>
                            <td>Sábado</td>
                            <td>
                                08:00 .a.m
                            </td>
                            <td>
                                10:00 .p.m
                            </td>
                        </tr>

                        <tr>
                            <td>Domingo</td>
                            <td>
                                08:00 .p.m
                            </td>
                            <td>
                                10:00 .p.m
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="mb-3 col-11">
                <button type="button" class="btn btn-primary btn-danger" onclick="switchadicion('servdepdetalle')">Cerrar</i></button>
            </div>
        </div>
    </div>

</div>

<div class="service_edit" id="edicionservdep">
    <br>
    <div class="btnCerrar">
        <button type="button" class="btn btn-primary btn-danger" onclick="quitaedicion('listadoservdep','edicionservdep')"><i class="fa-solid fa-circle-xmark"></i></button>
    </div>
    
    <h2>Editar servicio deportivo</h2>

    <div class="mb-3 col-12">
        <label for="exampleInputEmail1" class="form-label">Nombre deporte</label>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>--</option>
            <option value="1">Fútbol</option>
            <option value="2">Basketball</option>
            <option value="3">Volleyball</option>
            <option value="4">Natación</option>
        </select>
    </div>

    <div class="mb-3 col-12">
        <label for="exampleInputEmail1" class="form-label">Nombre categoría</label>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>--</option>
            <option value="1">infantil</option>
            <option value="2">juvenil</option>
            <option value="3">Entendido</option>
            <option value="4">Profesional</option>
        </select>
    </div>

    <div class="mb-3 col-12">
        <label for="exampleInputEmail1" class="form-label">Nombre servicio deportivo</label>
        <input type="email" class="form-control" aria-describedby="emailHelp">
    </div>

    <div class="mb-3 col-12">
        <label for="exampleInputEmail1" class="form-label">Nombre Sede</label>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>--</option>
            <option value="1">La Colombiana - Bello</option>
            <option value="2">La canchita - Bello</option>
            <option value="3">Eiffel - Bello</option>
            <option value="4">Colanta 3 - Itagüí</option>
        </select>
    </div>

    <div class="mb-3 col-12" id="jaja">
        <table id="tabla" style="width: 100%">
            <thead>
                <tr>
                    <td>Dia</td>
                    <td>Inicia</td>
                    <td>Finaliza</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Lunes</td>
                    <td>
                        <input type="time" class="form-control" aria-describedby="starttime">
                    </td>
                    <td>
                        <input type="time" class="form-control" aria-describedby="starttime">
                    </td>
                </tr>

                <tr>
                    <td>Martes</td>
                    <td>
                        <input type="time" class="form-control" aria-describedby="starttime">
                    </td>
                    <td>
                        <input type="time" class="form-control" aria-describedby="starttime">
                    </td>
                </tr>

                <tr>
                    <td>Miércoles</td>
                    <td>
                        <input type="time" class="form-control" aria-describedby="starttime">
                    </td>
                    <td>
                        <input type="time" class="form-control" aria-describedby="starttime">
                    </td>
                </tr>

                <tr>
                    <td>Jueves</td>
                    <td>
                        <input type="time" class="form-control" aria-describedby="starttime">
                    </td>
                    <td>
                        <input type="time" class="form-control" aria-describedby="starttime">
                    </td>
                </tr>

                <tr>
                    <td>Viernes</td>
                    <td>
                        <input type="time" class="form-control" aria-describedby="starttime">
                    </td>
                    <td>
                        <input type="time" class="form-control" aria-describedby="starttime">
                    </td>
                </tr>

                <tr>
                    <td>Sábado</td>
                    <td>
                        <input type="time" class="form-control" aria-describedby="starttime">
                    </td>
                    <td>
                        <input type="time" class="form-control" aria-describedby="starttime">
                    </td>
                </tr>

                <tr>
                    <td>Domingo</td>
                    <td>
                        <input type="time" class="form-control" aria-describedby="starttime">
                    </td>
                    <td>
                        <input type="time" class="form-control" aria-describedby="starttime">
                    </td>
                </tr>
            </tbody>
        </table>
        <button class="btn btn-success col-12" style="margin-top: 3%" onclick="updateservdepall()">Actualizar todos</button>
    </div>

    <div class="mb-3">
        <button type="button" class="btn btn-primary btn-success" onclick="swal_saveedition(), quitaedicion('listadosede','edicionsede')">Guardar</i></button>
    </div>

</div>



<script>
    let tabla = document.getElementById("tabla");
    let datatable = new DataTable(tabla);
</script>