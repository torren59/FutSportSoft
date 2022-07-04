<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="../root/datatable.css">
<link rel="stylesheet" href="../root/servicios/service_style.css">
<div class="service_list">
    <center>
    <div>
            <h1>COMPRAS</h1>
        </div>
        </center>
    <table id="tabla" >
        <thead>
            <tr>
                <td>Visualizar</td>
                <td>Eliminar</td>
                <td>Nit</td>
                <td>Proveedor</td>
                <td>Numero Factura</td>
                <td>Fecha</td>
                <td>Total</td>
            </tr>
            </thead>
        <tbody>
        <tr>
        <td><button class="btn btn-secondary" onclick="switchadicion('detalle')"><i class="fa-solid fa-circle-info"></i></button>
            <td>
            <button class="btn btn-primary" id="seg_compras_deletebtn" onclick="swal_eliminacion()"> <i class="fa-solid fa-trash"></i></button>
                </div>
                </td>
                <td>8003589563</td>
            <td>Regol</td>
            <td>0001</td>
            <td>24/02/2022</td>
            <td>$ 25.000</td>
        </tr>
        <tr>
        <td><button class="btn btn-secondary" onclick="switchadicion('detalle')"><i class="fa-solid fa-circle-info"></i></button>
            <td>
            <button class="btn btn-primary" id="seg_compras_deletebtn2" onclick="swal_eliminacion()"> <i class="fa-solid fa-trash"></i></button>
</i></button>
                </div>
                </td>
                <td>9563257853</td>
            <td>Golty</td>
            <td>0002</td>
            <td>30/05/2022</td>
            <td>$ 50.000</td>
        </tr>
        <tr>
        <td><button class="btn btn-secondary" onclick="switchadicion('detalle')"><i class="fa-solid fa-circle-info"></i></button>
            <td>
            <button class="btn btn-primary" id="seg_compras_deletebtn3" onclick="swal_eliminacion()"> <i class="fa-solid fa-trash"></i></button>
</i></button>
                </div>
                </td>
                <td>8536957856</td>
            <td>Joma</td>
            <td>0003</td>
            <td>10/06/2022</td>
            <td>$ 100.000</td>
        </tr>
        </tbody>
    </table>
    <div class="addbtn">
    <button class="btn btn-success col-4" id="seg_compras_newbtn" onclick="switchadicion('sedeadicion')">Nueva compra <i class="fa-solid fa-circle-plus"></i></button>
    </div>
        <div class="adicion adicion_off" id="sedeadicion">
        <div class="adicion_title">
            <h1>Nueva Compra</h1>
        </div>
        <div class="adicion_content" id="addsed">

            <div class="mb-3  col-7">
                <label for="exampleInputEmail1" class="form-label">Nit</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Proveedor</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Numero de Factura</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Fecha</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Total</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <table id="tabla" class="mb-3 col-12">
        <thead>
            <tr>
                <td>Editar</td>
                <td>Eliminar</td>
                <td>Nro Factura</td>
                <td>Nombre</td>
                <td>Tipo</td>
                <td>Talla</td>
                <td>Cantidad</td>
                <td>Precio</td>
            </tr>
            </thead>
        <tbody>
        <tr>
        <td><button class="btn btn-primary" onclick="activaedicion('listadosventas','edicionventas')"><i class="fa-solid fa-pen"></i></button>
            <td>
            <button class="btn btn-primary" id="seg_compras_deletebtn" onclick="swal_eliminacion()"> <i class="fa-solid fa-trash"></i></button>
                </div>
                </td>
                <td>0001</td>
            <td>Camisa</td>
            <td>U</td>
            <td>L</td>
            <td>22</td>
            <td>$ 25.000</td>
        </tr>
        <tr>
        <td><button class="btn btn-primary" onclick="activaedicion('listadosventas','edicionventas')"><i class="fa-solid fa-pen"></i></button>
            <td>
            <button class="btn btn-primary" id="seg_compras_deletebtn" onclick="swal_eliminacion()"> <i class="fa-solid fa-trash"></i></button>
</i></button>
                </div>
                </td>
                <td>0002</td>
            <td>Pantaoneta</td>
            <td>U</td>
            <td>M</td>
            <td>15</td>
            <td>$ 10.000</td>
        </tr>
        </tbody>
    </table>
            
            <div class="mb-3 col-7">
                <button type="button" class="btn btn-primary btn-success" onclick="swal_savecreation(), switchadicion('sedeadicion')">Guardar</i></button>
                <button type="button" class="btn btn-primary btn-danger" onclick="switchadicion('sedeadicion')">Cancelar</i></button>
                <button type="button" class="btn btn-primary btn-info" onclick="swal_savecreation(), switchadicion('sedeadicion')">Adicionar Producto</i></button>
            </div>
        </div>
    </div>

</div>
<div class="adicion adicion_off" id="detalle">
        <div class="adicion_title">
            <h1>Compra</h1>
        </div>
        <div class="adicion_content" id="addsed">

        <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Nit</label>
                <p>8003589563</p>
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Proveedor</label>
                <p>Regol</p>
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Numero de Factura</label>
                <p>0001</p>
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Fecha</label>
                <p>24/02/2022</p>
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Total</label>
                <p>$ 25.000</p>
            </div>
            <table id="tabla" class="mb-3 col-7">
        <thead>
            <tr>
                <td><div class="mb-3 col-7">
                    <label for="exampleInputEmail1" class="form-label">IDproducto</label></td>
                    </div>
                <td><div class="mb-3 col-7">
                    <label for="exampleInputEmail1" class="form-label">Tipo</label></td>
                    </div></td>
                <td><div class="mb-3 col-7">
                    <label for="exampleInputEmail1" class="form-label">Nombre Producto</label></td>
                    </div></td>

            </tr>
            </thead>
        <tbody>
        <tr>
                <td>CASMAN55</td>
            <td>U</td>
            <td>Camisa Manchester</td>
        </tr>
        <tr>
        
                <td>PANMAN55</td>
            <td>U</td>
            <td>Pantaloneta Manchester</td>
        </tr>
        </tbody>
    </table>
            <div class="mb-3 col-7">
                <button type="button" class="btn btn-primary btn-danger" onclick="switchadicion('detalle')">Cerrar</i></button>
            </div>
        </div>
    </div>
    
    <div class="adicion adicion_off" id="detalle2">
        <div class="adicion_title">
            <h1>Compra</h1>
        </div>
        <div class="adicion_content" id="addsed">

        <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Nit</label>
                <p>9563257853</p>
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Proveedor</label>
                <p>Golty</p>
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Numero de Factura</label>
                <p>0002</p>
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Fecha</label>
                <p>30/05/2022</p>
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Total</label>
                <p>$ 50.000</p>
            </div>
            <div class="mb-3 col-7">
                <button type="button" class="btn btn-primary btn-danger" onclick="switchadicion('detalle2')">Cerrar</i></button>
            </div>
        </div>
    </div>

    <div class="adicion adicion_off" id="detalle3">
        <div class="adicion_title">
            <h1>Compra</h1>
        </div>
        <div class="adicion_content" id="addsed">

            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Nit</label>
                <p>8536957856</p>
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Proveedor</label>
                <p>Joma</p>
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Numero de Factura</label>
                <p>0003</p>
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Fecha</label>
                <p>10/06/2022</p>
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Total</label>
                <p>$ 100.000</p>
            </div>
            <div class="mb-3 col-7">
                <button type="button" class="btn btn-primary btn-danger" onclick="switchadicion('detalle3')">Cerrar</i></button>
            </div>
        </div>
    </div>
<script>
  let tabla = document.getElementById("tabla");
  let datatable= new DataTable(tabla);
  </script>