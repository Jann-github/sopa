
<?php
	require_once "../clases/Conexion.php";
	$con = new Conectar();
	$conexion = $con->conexion();
	$sql = "SELECT id_videojuego,
					Nombre,
					Tipo,
					Fecha_Lanzamiento,
					Descripcion
			FROM t_videojuegos";
	$result = mysqli_query($conexion, $sql);  
?>

<button class="btn btn-primary" data-toggle="modal" data-target="#modalInsertar">
 	<span class="fas fa-user-plus"></span> Agregar nuevo
</button>
<hr>
<table class="table table-hover" id="tablaDatos">
	<thead>
		<tr>
			<td>Id_videojuego</td>
			<td>Nombre</td>
			<td>Tipo</td>
			<td>Fecha de Lanzamiento</td>
			<td>Descripcion</td>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>
	</thead>
	<tbody>
	<?php
		while($ver = mysqli_fetch_array($result)):
	 ?>
		<tr>
			<td><?php echo $ver['id_videojuego'] ?></td>
			<td><?php echo $ver['Nombre'] ?></td>
			<td><?php echo $ver['Tipo'] ?></td>
			<td><?php echo $ver['Fecha_Lanzamiento'] ?></td>
			<td><?php echo $ver['Descripcion'] ?></td>
			<td>
				<button class="btn btn-warning">
					<span class="fas fa-user-edit"></span>
				</button>
			</td>
			<td>
				<button class="btn btn-danger">
					<span class="fas fa-user-times"></span>
				</button>
			</td>
		</tr>
		<?php
			endwhile; 
		 ?>
	</tbody>
</table>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaDatos').DataTable();

	});

</script>