<?php

$User="root";
$Pass="";
$Servidor="localhost";
$Base="clinica";
$DNI=$_POST ['Dni'];

$Conexion=mysqli_connect($Servidor, $User, $Pass);
$BD=mysqli_select_db($Conexion, $Base);
?>


<!DOCTYPE html>
<html lang="ES">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--responsive-->
    <meta name="author" content="Freire, Nobrega, Mina, Barrionuevo" />
    <!--autores-->
    <meta name="application-name" content="Servicio de turnos en clinica, menejo de turnos, vista al cliente y doctor" />
    <!--Descripción de la página-->
    <meta name="description" content="Pagina de clinica para ver datos, subirlos, y analizarlos" />
    <meta name="encoding" charset="utf-8" />
    <!--Reconoce caracteres especiales-->
    <meta name="lang" content="es-ES" />
	<link rel="stylesheet" href="Doctor.css?v=<?php echo time(); ?>" />
	<title>Consulta</title>
</head>
<body>
	<h1>Información del Paciente</h1>
	
	<h2>Seguimiento Clinico</h2>
	
	<table border="1">
		<thead>
			<tr>
				<td>ID</td>
				<td>Hist Clin Id</td>
				<td>Fecha</td>
				<td>Peso</td>
				<td>Altura</td>
				<td>Presion</td>
				<td>Saturación</td>
				<td>Observación</td>
				<td>Medico ID</td>
			</thead>
			<?php



			$SQL="SELECT * FROM pacientes, seguimiento_clinico WHERE DNI= '".$DNI."' ";
			$result = mysqli_query($Conexion, $SQL);

			while($mostrar=mysqli_fetch_array($result)){
				?>

				<tr>
					<td><?php echo $mostrar['ID_S']?></td>
					<td><?php echo $mostrar['Id_hc']?></td>
					<td><?php echo $mostrar['Fecha']?></td>
					<td><?php echo $mostrar['Peso']?></td>
					<td><?php echo $mostrar['Altura']?></td>
					<td><?php echo $mostrar['Presion']?></td>
					<td><?php echo $mostrar['Saturacion']?></td>
					<td><?php echo $mostrar['Observacion']?></td>
					<td><?php echo $mostrar['Medico_Id']?></td>
				</tr>
				<?php
			}
			?>
		</table>
    <br>
    <h2>Enfermedades Crónicas</h2>
	<table border="1">
		<thead>
			<tr>
				<td>ID</td>
				<td>Id_Hist_Clinica</td>
				<td>Diabetes</td>
				<td>Hipertensión Art</td>
				<td>Cardiaco</td>
				<td>Transplantado</td>
				<td>Alérgico</td>
			</thead>
			<?php



			$SQL="SELECT * FROM pacientes, seguimiento_clinico, enfermedades_cronicas WHERE DNI= '".$DNI."' ";
			$result = mysqli_query($Conexion, $SQL);

			while($mostrar=mysqli_fetch_array($result)){
				?>

				<tr>
					<td><?php echo $mostrar['Id_ec']?></td>
					<td><?php echo $mostrar['Id_hc']?></td>
					<td><?php echo $mostrar['Diabetes']?></td>
					<td><?php echo $mostrar['Hipertension']?></td>
					<td><?php echo $mostrar['Cardiaco']?></td>
					<td><?php echo $mostrar['Transplantados']?></td>
					<td><?php echo $mostrar['Alergico']?></td>
				</tr>
				<?php
			}
			?>
		</table>
		   <br>

    <h2>Historial Clinico</h2>
	<table border="1">
		<thead>
			<tr>
				<td>ID</td>
				<td>Paciente_ID</td>
				<td>Grupo Sanguineo</td>
	
			</thead>
			<?php



			$SQL="SELECT * FROM pacientes, seguimiento_clinico, enfermedades_cronicas, hist_clinica WHERE DNI= '".$DNI."' ";
			$result = mysqli_query($Conexion, $SQL);

			while($mostrar=mysqli_fetch_array($result)){
				?>

				<tr>
					<td><?php echo $mostrar['Id_hc']?></td>
					<td><?php echo $mostrar['id_p']?></td>
					<td><?php echo $mostrar['Grupo_Sanguineo']?></td>
				</tr>
				<?php
			}
			?>
		</table>
		   <br>
    <a class="boton" href="Consulta0.php">Volver</a>
	</body>
	</html>


