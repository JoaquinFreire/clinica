<?php

$User="root";
$Pass="";
$Servidor="localhost";
$Base="clinica";
$Fecha=$_POST['Fecha'];
//hola

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
	<link rel="stylesheet" href="Turnos.css?v=<?php echo time(); ?>" />
	<title>turnos</title>
	
</head>
<body>
<ul>
    <li><a href="Doctor.html">Home</a></li>
    <li><a href="Paciente.php">Pacientes</a></li>
    <li><a class="active" href="Turnos.html">Turnos</a></li>
    <li><a href="Consulta0.php">Consultas</a></li>
</ul>
<br>
<table id="tabla">
<tr>
	<th>Id</th>
	<th>Dni</th>
	<th>Fecha</th>
	<th>Hora</th>
	<th>Atendido</th>
	<th>Médico</th>
</tr>
<?php

//$sql = "SELECT * FROM proxima_consulta WHERE Fecha = '".$Hoy."'";
$sql="SELECT * FROM proxima_consulta WHERE Fecha='".$Fecha."'";
$result=mysqli_query($Conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
?>
	<tr>
		<td><?php echo $mostrar['ID']?></td>
		<td><?php echo $mostrar['Dni']?></td>
		<td><?php echo $mostrar['Fecha']?></td>
		<td><?php echo $mostrar['Hora']?></td>
		<td><?php echo $mostrar['Atendido']?></td>
		<td><?php echo $mostrar['Medico']?></td>
	</tr>

<?php
}
?>
</table>
</body>
</html>