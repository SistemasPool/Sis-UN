<?php

////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////

$host="localhost";
$usuario="root";
$contraseña="";
$base="unibienes";

$conexion= new mysqli($host, $usuario, $contraseña, $base);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////

$respo="SELECT * FROM respon_civil_auto_pol";
$resciv=$conexion->query($respo);
?>

			<form method="post">
			<table class="table">

				<tr>
					<th>ID_Alumno</th>
					<th>Nombre</th>
					<th>Carrera</th>
					<th>Grupo</th>
				</tr>

				<?php

				while ($registroAlumnos = $resciv->fetch_array(MYSQLI_BOTH))

				{

					echo'<tr>

						<td><input name="idalu[]" value="'.$registroAlumnos['id_respciv'].'" /></td>

						 <td><input name="suma['.$registroAlumnos['id_respciv'].']" value="'.$registroAlumnos['suma_asegurada'].'" /></td>
                         <td>
                        <select name="est['.$registroAlumnos['id_respciv'].']">
                            <option value="'.$registroAlumnos['estado'].'">'.$registroAlumnos['estado'].'</option>
                        </select>
                          </td>
						 </tr>';
				}


				?>

			</table>
			<input type="submit" name="actualizar" value="Actualizar Registros" class="btn btn-info col-md-offset-9" />
		</form>

		<?php

			if(isset($_POST['actualizar']))
			{
				foreach ($_POST['idalu'] as $ids) 
				{
					//$editID=mysqli_real_escape_string($conexion, $_POST['idalu2'][$ids]);
					$editNom=mysqli_real_escape_string($conexion, $_POST['suma'][$ids]);
					$editCarr=mysqli_real_escape_string($conexion, $_POST['est'][$ids]);
					//$editGru=mysqli_real_escape_string($conexion, $_POST['gru'][$ids]);

					$actualizar=$conexion->query("UPDATE respon_civil_auto_pol SET suma_asegurada='$editNom', estado='$editCarr' WHERE id_respciv='$ids'");
				}

				if($actualizar==true)
				{
					header("Location: prueba_multiple_update.php");
                }

				else
				{
					echo "NO FUNIONA!";
				}
			}

		?>