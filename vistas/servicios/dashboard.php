<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="../root/datatable.css">
<link rel="stylesheet" href="../root/servicios/service_style.css">

<div class="service_list" id="listadodashboard">
    <div id="dashboard_by_category">
        <div class="dashboardcategory">
            <center>Deportistas activos durante el año
                <iframe width="600" height="450" src="https://datastudio.google.com/embed/reporting/d0722236-3e0c-40f6-9f21-016ea99b00e1/page/pMdwC" frameborder="0" style="border:0" allowfullscreen></iframe>
            </center>
        </div>
        <div class="dashboardcategory">
            <center>Deportistas activos de acuerdo a periodo seleccionado
                <iframe width="600" height="450" src="https://datastudio.google.com/embed/reporting/d0722236-3e0c-40f6-9f21-016ea99b00e1/page/p_lkbn1qrbwc" frameborder="0" style="border:0" allowfullscreen></iframe>
            </center>
        </div>

        <div id="dashcatselect" class="row">
            <div class="mb-3 col-4">
                <label for="exampleInputEmail1" class="form-label">Nombre deporte</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>--</option>
                    <option value="1">Fútbol</option>
                    <option value="2">Basketball</option>
                    <option value="3">Volleyball</option>
                    <option value="4">Natación</option>
                </select>
            </div>

            <div class="mb-3 col-4">
                <label for="exampleInputEmail1" class="form-label">Nombre categoría</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option value="3" selected>Entendido</option>
                    <option value="4">Profesional</option>
                </select>
            </div>

            <button class="btn btn-success col-1" style="height: 50px; margin-top: 15px;" onclick="switchcategory('cat_1','cat_2')">Filtrar</button>
        </div>



        <div class="dashboardcategory dash_hide" id="cat_1">
            <center>
                Entendido <br>
                <iframe width="600" height="450" src="https://datastudio.google.com/embed/reporting/d0722236-3e0c-40f6-9f21-016ea99b00e1/page/p_fzigk4ccwc" frameborder="0" style="border:0" allowfullscreen></iframe>
            </center>
        </div>
        <div class="dashboardcategory" id="cat_2">
            <center>
                Profesional <br>
                <iframe width="600" height="450" src="https://datastudio.google.com/embed/reporting/d0722236-3e0c-40f6-9f21-016ea99b00e1/page/p_lkbn1qrbwc" frameborder="0" style="border:0" allowfullscreen></iframe>
            </center>
        </div>
    </div>
</div>





<script>
    let tabla = document.getElementById("tabla");
    let datatable = new DataTable(tabla);
</script>

<!--Cat1
<iframe width="600" height="450" src="https://datastudio.google.com/embed/reporting/d0722236-3e0c-40f6-9f21-016ea99b00e1/page/p_fzigk4ccwc" frameborder="0" style="border:0" allowfullscreen></iframe>

Cat2-->