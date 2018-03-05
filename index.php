<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link REL=StyleSheet href="toast.css" type="text/css">
</head>
<body>
	<div class="container">
		<br>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		  ADD.
		</button>
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
	      	<form name="signInForm" method="post" action="insertarRegistro.php">
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
			  <button type="submit" name="enviando" class="btn btn-primary" >Submit</button>
			  
			</form> 	
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	

	<br>
	<div class="container">
		<table class="table table-dark">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>NOMBRE</th>
		      <th>EDAD</th>
		      <th>OPCIONES</th>
		    </tr>
		  </thead>
		 	  <?php
		 	  require 'conexiondb.php';

		 	  $result= mysqli_query($conexion, "SELECT * FROM Usuarios");

		 	  while($res = mysqli_fetch_array($result)){
		 	  	echo "<tr>";
		 	  	echo "<td>".$res['usuarioId']."</td>";
		 	  	echo "<td>".$res['Nombre']."</td>";
		 	  	echo "<td>".$res['Edad']."</td>";
		 	  	echo "<td>".$res['Pais']."</td>";
		 	  	echo "<td><button href=\"editarRegistro.php?id=$res[usuarioId]\">Edit</button> | <button href=\"delete.php?id=$res[usuarioId]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</button></td>";

		 	  }
			?>
			</table>	
	


	<script type="text/javascript">
		$(document).ready(function() {
    		$('#signInForm').formValidation();
		}); 
	</script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</body>
</html>