<?php

$User="root";
$Pass="";
$Servidor="localhost";
$Base="clinica";

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

        <link rel="stylesheet" href="Secretaria.css?v=<?php echo time(); ?>" />
        <title>Buscar</title>
    </head>
    <body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">

        <ul>
            <li><a>Menú</a></li>
            <div class="menu">
            <li><a href="BxFecha.php">Buscar por Fecha</a></li>
            <li><a class="active" href="SacarT.php">Sacar Turnos</a></li>
            <li><a href="TaEntrar.php">Turnos a Entrar</a></li>
            <li><a href="TConfirm.php">Turnos Confirmados</a></li>
        </div>
        </ul>

        <div id="contenedorcito" align="center">
        	<div id="datos">
        <label>DNI</label>
        <input type="text" name="Dni" placeholder="Ingrese DNI" required>
        <br>
		<label for="Fecha">Fecha y Hora</label>
        <input type="date" name="Fecha" required>
        <input type="time" name="Hora" required>
        <br>
        <button class="button" name="submit" style="vertical-align: middle;"><span>Cargar</span></button>
        </div>
    	</div>
<?php
if (isset($_POST['submit'])) {
	$Fecha=$_POST['Fecha'];
	$Hora=$_POST['Hora'];
	$Dni=$_POST['Dni'];

	$sql="INSERT INTO proxima_consulta (Dni, Fecha, Hora, Atendido) VALUES ('$Dni', '$Fecha', '$Hora', \"No\")";
	$result=mysqli_query($Conexion, $sql);

	if ($result==FALSE) {
		?>
		<p align="center"><?php echo("Error al guardar");?></p>
	<?php
	}
	else{
		?>
		<p align="center"><?php echo("Guardado con exito");?></p>
	<?php
	}
}
?>
