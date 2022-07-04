<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="../root/datatable.css">
<link rel="stylesheet" href="../root/servicios/service_style.css">
<div class="service_list">
    <center>
    <div>
            <h1>VENTAS</h1>
        </div>
        </center>
    <table id="tabla" >
        <thead>
            <tr>
                <td>Visualizar</td>
                <td>Eliminar</td>
                <td>Producto</td>
                <td>Cantidad</td>
                <td>Comprador</td>
                <td>Valor</td>
                <td>Fecha de Venta</td>
            </tr>
            </thead>
        <tbody>
        <tr>
        <td><button class="btn btn-secondary" id="seg_ventas_detailbtn"  onclick="switchadicion('detalle')"><i class="fa-solid fa-circle-info"></i></button>
            <td>
            <button class="btn btn-primary" id="seg_ventas_deletebtn" onclick="swal_eliminacion()"> <i class="fa-solid fa-trash"></i></button>
                </div>
                </td>
                <td>Camisa</td>
            <td>1</td>
            <td>Julian Mesa</td>
            <td>$ 20.000</td>
            <td>15/03/2022</td>
        </tr>
        <tr>
        <td><button class="btn btn-secondary" id="seg_ventas_detailbtn2"  onclick="switchadicion('detalle')"><i class="fa-solid fa-circle-info"></i></button>
            <td>
            <button class="btn btn-primary" id="seg_ventas_deletebtn2" onclick="swal_eliminacion()"> <i class="fa-solid fa-trash"></i></button>
</i></button>
                </div>
                </td>
                <td>Pantaloneta</td>
            <td>1</td>
            <td>Julian Mesa</td>
            <td>$ 15.000</td>
            <td>15/03/2022</td>
        </tr>
        <tr>
        <td><button class="btn btn-secondary" id="seg_ventas_detailbtn3"  onclick="switchadicion('detalle')"><i class="fa-solid fa-circle-info"></i></button>
            <td>
            <button class="btn btn-primary" id="seg_ventas_deletebtn3" onclick="swal_eliminacion()"> <i class="fa-solid fa-trash"></i></button>
</i></button>
                </div>
                </td>
                <td>Medias</td>
            <td>1</td>
            <td>Julian Mesa</td>
            <td>$ 8.000</td>
            <td>15/03/2022</td>
        </tr>
        </tbody>
    </table>
    <div class="addbtn" id="seg_ventas_newbtn">
    <button class="btn btn-success col-4" id="seg_ventas_newbtn" onclick="switchadicion('sedeadicion')">Nueva Venta <i class="fa-solid fa-circle-plus"></i></button>
    </div>
        <div class="adicion adicion_off" id="sedeadicion">
        <div class="adicion_title">
            <h1>Nueva Venta</h1>
        </div>
        <div class="adicion_content" id="addsed">

            <div class="mb-3  col-7">
                <label for="exampleInputEmail1" class="form-label">Producto</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Tipo</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Talla</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Precio</label>
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
            <button class="btn btn-primary" onclick="swal_eliminacion()"> <i class="fa-solid fa-trash"></i></button>
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
            <button class="btn btn-primary" onclick="swal_eliminacion()"> <i class="fa-solid fa-trash"></i></button>
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
                <button type="button" class="btn btn-primary btn-info" onclick="swal_savecreation()">Adicionar Producto</i></button>
            </div>
        </div>
    </div>

</div>
<div class="adicion adicion_off" id="detalle">
        <div class="adicion_title">
            <h1>Venta</h1>
        </div>
        <div class="adicion_content" id="addsed">

        <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Producto</label>
                <p>Camisa</p>
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                <p>1</p>
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Comprador</label>
                <p>Julian mesa</p>
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Valor</label>
                <p>$ 20.000</p>
            </div>
            <div class="mb-3 col-7">
                <label for="exampleInputEmail1" class="form-label">Fecha de venta</label>
                <p>15/03/2022</p>
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