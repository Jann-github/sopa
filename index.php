<!DOCTYPE html>
<html>
<head>
	<title>Practica_konami</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

	<script src="librerias/datatables/jquery.dataTables.min.js"></script>
	<script src="librerias/datatables/dataTables.bootstrap4.min.js"></script>

	<link rel="stylesheet" type="text/css" href="librerias/datatables/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="librerias/datatables/dataTables.bootstrap4.min.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/all.css">

	
</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>Konami video juegos</h1>
					<div id="tablaCrudLoad"></div>
				</div>
			</div>
		</div>

<!-- Modal -->
		<div class="modal fade" id="modalInsertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Agregar nueva persona</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		       		<label>Nombre</label>
		       		<input type="text" name="nombre" id="nombre" class="form-control">

		       		<label>Apellidos</label>
		       		<input type="text" name="apellidos" id="apellidos" class="form-control">
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		        <button type="button" class="btn btn-primary">Guardar</button>
		      </div>
		    </div>
		  </div>
		</div>
	</body>

	<script type="text/javascript">
		$(document).ready(function(){
			//funcion load de jquery
			//primero agregamos el id de la seccion donde se cargara el archivo 
			$('#tablaCrudLoad').load("vistas/tablaCrud.php");
		});
	</script>

</html>