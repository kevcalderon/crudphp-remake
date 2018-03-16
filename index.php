<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD-remake</title>
	<?php require 'scripts.php';?>;
</head>
<body>
	<?php 
	require 'class/conexiondb.php';
	$sql="SELECT * FROM Usuarios";
	$result=mysqli_query($conexion,$sql);
	?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						Table Dinamics
					</div>
					<div class="card-body">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							ADD.
						</button>
						<hr>
						<table class="table table-hover table-condensed" id="idtable">
							<thead>
								<tr>
									<td>Nombre</td>
									<td>Edad</td>
									<td>Pais</td>
									<td>Opciones</td>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<td>Nombre</td>
									<td>Edad</td>
									<td>Pais</td>
									<td>Opciones</td>
								</tr>
							</tfoot>
							<tbody>
								<?php
								while ($mostrar=mysqli_fetch_array($result)) {

									?>
									<tr>
										<td><?php echo $mostrar['Nombre']?></td>
										<td><?php echo $mostrar['Edad']?></td>
										<td><?php echo $mostrar['Pais']?></td>
										<td>
											<span class="btn btn-success btn-xs">Editar</span>
											<span class="btn btn-danger btn-xs">Eliminar</span>
										</td>
										<?php
									}
									?>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="card-footer text-muted">
						Demo-remake
					</div>
				</div>
			</div>
		</div>
		<div>

					<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<form name="signInForm" method="post" action="procedures/insertarRegistro.php">
				  <div class="form-group">
					<label>Name: </label>
					<input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" placeholder="Enter your name." required
					data-fv-notempty-message="The name is required">
				
				  </div>
				  <div class="form-group">
					<label>Age: </label>
					<input type="text" class="form-control" id="edadUsuario" name="edadUsuario" placeholder="Enter your age." required
					data-fv-notempty-message="The age is required">
				  </div>
				  <div class="form-group">
					<label>Country: </label>
					<input type="text" class="form-control" id="paisUsuario" name="paisUsuario" placeholder="Enter your country." required
					data-fv-notempty-message="The country is required">
				  </div>
				  <button type="submit" id="btnSubmit" name="enviando" class="btn btn-primary" >Submit</button>
				  
				</form> 	
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	

		</body>
		</html>

		<script type="text/javascript">
			$(document).ready(function() {
				$('#idtable').DataTable();
				//$('#signInForm').formValidation();



			});	
			</script>

			