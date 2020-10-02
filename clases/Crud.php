<?php 
	require_once "Conexion.php";
	class Crud extends Conectar {
		public function mostrar() {
			$conexion = Conectar::conexion();
			$sql = "SELECT id_persona,
							nombre,
							apellido
					FROM t_personas";
			$result = mysqli_query($conexion, $sql);

			$cadena = "<tbody>";

			while ($ver = mysqli_fetch_array($result)) {
				$cadena = $cadena . '<tr>'.
										'<td>' . $ver['id_persona']. '</td>
										<td>' . $ver['nombre']. '</td>
										<td> ' . $ver['apellido']. ' </td>
										<td>
											<button class="btn btn-warning">
												<span class="fas fa-user-edit">
												</span>
											</button>
										</td>
										<td>
											<button class="btn btn-danger">
												<span class="fas fa-user-times">
												</span>
											</button>
										</td>'.
									'</tr>';
			}

			return $cadena."</tbody>";
		}
	}

 ?>