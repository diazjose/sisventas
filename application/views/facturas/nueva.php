<br>
<div class="container responsive">
	
	
	<br>
	<div class="border border-info row title">
		<div class="col-md-4 justify-content-start title-head"><h4 class="text-primary"><i class="fas fa-pencil-alt"></i> Nueva Factura</h4></div>
	</div>
	<div  class="my-2 ">
		<form class="form-inline">
			<label for="nombre" class="col-md-1 font-weight-bold">Cliente</label>
			<input type="text" name="nombre" id="nombre" class="form-control col-md-3 my-md-3">
			
			<label for="tel" class="col-md-1 font-weight-bold">Telefono</label>
			<input type="text" name="telefono" id="tel" class="form-control col-md-3">
			
			<label for="email" class="col-md-1 font-weight-bold">Email</label>
			<input type="email" name="email" id="email" class="form-control col-md-3">
			
			<label for="vendedor" class="col-md-1 font-weight-bold">Vendedor</label>
			<select class="form-control col-md-3" id="vendedor" name="vendedor">
				<option>Jose Diaz</option>
				<option>Lucas Cordoba</option>
				<option>Pedro Alfonso</option>
				<option>Yacob Saul</option>	
			</select>
			
			<label for="fecha" class="col-md-1 font-weight-bold">Fecha</label>
			<input type="text" disabled="" name="fecha" id="fecha" value="<?= date('d/m/Y') ?>" class="form-control col-md-3">
			
			<label for="pago" class="col-md-1 font-weight-bold">Pago</label>
			<select class="form-control col-md-3" id="pado" name="pago">
				<option>Efectivo</option>
				<option>Cheque</option>
				<option>Credito</option>
				<option>Transferencia Bancaria</option>	
			</select>
			
		</form>	
		<div class="row my-3 justify-content-md-end">
			<div>
				<a href="#" class="btn btn-light border mx-1"><i class="fas fa-plus"></i> Nuevo Producto</a>
			</div>
			<div>
				<a href="#" class="btn btn-light border mx-1"><i class="fas fa-user-plus"></i> Nuevo Cliente</a>
			</div>
			<div>
				<a href="#" data-toggle="modal" data-target="#agregarProductos" class="btn btn-light border mx-1"><i class="fas fa-search"></i> Agregar Producto</a>
			</div>
			<div>
				<a href="<?= base_url() ?>reportes/factura" class="btn btn-light border mx-1"><i class="fas fa-print"></i> Imprimir</a>
			</div>
		</div>	
	</div>
	<div>
		<form class="form-inline">
		  <input type="text" class="form-control mr-2 col-md-4 my-2" placeholder="Codigo de Producto" autofocus>
		</form> 
	</div>
	<div class="table table-responsive" id="tabla-factura">
		<table class="table">
			<thead>
				<th>CODIGO</th>
				<th>CANT</th>
				<th>DESCRIPCION</th>
				<th>PRECIO UNIT.</th>
				<th>PRECIO TOTAL</th>
				<th></th>
			</thead>
			<tbody id="tbody">
				
			</tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>TOTAL $ </td>
				<td id="total"></td>
			</tr>
		</table>
	</div>
	
</div>


<div class="modal fade" id="agregarProductos">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><i class="fas fa-search"></i> Buscar Productos</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        	<form class="form-inline">
				  
				  <input type="text" class="form-control mr-2 col-md-6 my-2" id="factura" placeholder="Buscar Productos...">
				  
				  <button type="submit" class="btn btn-light border"><i class="fas fa-search"></i> Buscar</button>
			</form> 
          	<div class="table-responsive">
          		<table class="table">
          			<thead>
          				<th>Codigo</th>
          				<th>Producto</th>
          				<th>Cantidad</th>
          				<th>Precio</th>
          				<th>Agregar</th>
          			</thead>
          			<tbody>
          				<tr id="producto_1">
          					<td class="codigo">00001</td>
          					<td class="producto">Shampoo</td>
          					<td class="cantidad"><input type="text" class="form-control col-3 text-center" value="1"></td>
          					<td class="precio">8.90</td>
          					<td><a href="#" onclick="ag_producto('producto_1');" class="btn btn-info"><i class="fas fa-plus"></i></a></td>
          				</tr>
          				<tr id="producto_2">
          					<td class="codigo">00012</td>
          					<td class="producto">Acondicionador</td>
          					<td class="cantidad"><input type="text" class="form-control col-3 text-center" value="1"></td>
          					<td class="precio">20.45</td>
          					<td><a href="#" onclick="ag_producto('producto_2');" class="btn btn-info"><i class="fas fa-plus"></i></a></td>
          				</tr>
          			</tbody>
          		</table>
          	</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
</div>
