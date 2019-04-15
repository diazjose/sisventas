<br>
<div class="container responsive">
	  <div class="">
	    <h3 class=""> <strong>Datos de Facturacion</strong></h3>
	  </div>
	  <br>
	  <div class="border border-info row title">
	  		<div class="col-md-4 justify-content-start title-head"><h4 class="text-primary"><i class="fas fa-search"></i> Buscar Factura</h4></div>
	  		<div class="col-md-4 title-head d-none d-md-block"></div>
	  		<div class="col-md-4 d-flex justify-content-end title-head"><a href="<?= base_url() ?>facturacion/nueva" class="btn btn-info"><i class="fas fa-plus"></i> Nueva Factura</a></div>
	  </div>

	 <div class="my-3 text-md-center">
	 		
	 		<form class="form-inline">
				  
				  <label for="factura" class="col-md-3"><strong># Factura o Fecha </strong></label>
				  
				  <input type="text" class="form-control mr-2 col-md-4" id="factura" placeholder="Fecha o # de Factura">
				  
				  <button type="submit" class="btn btn-light border"><i class="fas fa-search"></i> Buscar</button>
			</form> 
	 		
			<div>
				
			</div>
	 </div>	
	  <div class="border border-info table-responsive">
	  		<table class="table text-center">
	  			<thead class="table-primary">
	  				<th>#</th>
	  				<th>Fecha</th>
	  				<th>Cliente</th>
	  				<th>Vendedor</th>
	  				<th>Estado</th>
	  				<th>Total</th>
	  				<th>Acciones</th>
	  			</thead>
	  			<tbody>
	  				<tr>
		  				<td>00001</td>
		  				<td>11/04/2019</td>
		  				<td>Lobos Luis</td>
		  				<td>Diaz Jose</td>
		  				<td>
		  					<span class="badge badge-success">Pagada</span>
		  				</td>
		  				<td>500.40</td>
		  				<td>
		  					<a href="#" class="btn btn-light border" title="Editar Factura"><i class="fas fa-edit"></i></a>
							<a href="#" class="btn btn-light border" title="Descargar Factura"><i class="fas fa-arrow-circle-down"></i></a>
		  					<a href="#" class="btn btn-light border" title="Eliminar Factura"><i class="fas fa-trash-alt"></i></a>
		  				</td>
	  				</tr>
	  				<tr>
		  				<td>00002</td>
		  				<td>11/04/2019</td>
		  				<td>Cordoba Alicia</td>
		  				<td>Diaz Jose</td>
		  				<td>
		  					<span class="badge badge-warning">Pendiente</span>
		  				</td>
		  				<td>1645.35</td>
		  				<td>
		  					<a href="#" class="btn btn-light border" title="Editar Factura"><i class="fas fa-edit"></i></a>
							<a href="#" class="btn btn-light border" title="Descargar Factura"><i class="fas fa-arrow-circle-down"></i></a>
		  					<a href="#" class="btn btn-light border" title="Eliminar Factura"><i class="fas fa-trash-alt"></i></a>
		  				</td>
	  				</tr>
	  				<tr>
		  				<td>00001</td>
		  				<td>11/04/2019</td>
		  				<td>Lobos Luis</td>
		  				<td>Diaz Jose</td>
		  				<td>
		  					<span class="badge badge-success">Pagada</span>
		  				</td>
		  				<td>500.40</td>
		  				<td>
		  					<a href="#" class="btn btn-light border"><i class="fas fa-edit"></i></a>
							<a href="#" class="btn btn-light border"><i class="fas fa-arrow-circle-down"></i></a>
		  					<a href="#" class="btn btn-light border"><i class="fas fa-trash-alt"></i></a>
		  				</td>
	  				</tr>
	  				<tr>
		  				<td>00002</td>
		  				<td>11/04/2019</td>
		  				<td>Cordoba Alicia</td>
		  				<td>Diaz Jose</td>
		  				<td>
		  					<span class="badge badge-success">Pagada</span>
		  				</td>
		  				<td>1645.35</td>
		  				<td>
		  					<a href="#" class="btn btn-light border"><i class="fas fa-edit"></i></a>
							<a href="#" class="btn btn-light border"><i class="fas fa-arrow-circle-down"></i></a>
		  					<a href="#" class="btn btn-light border"><i class="fas fa-trash-alt"></i></a>
		  				</td>
	  				</tr>
	  			</tbody>
	  			
	  		</table>
	  </div>
</div>	    