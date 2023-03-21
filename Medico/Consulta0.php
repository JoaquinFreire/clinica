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
<link rel="stylesheet" href="Consulta.css?v=<?php echo time(); ?>" />
    <title>Consulta</title>
</head>

<body>
    <form method="POST" action="consulta.php">
        <ul>
            <li><a href="Home.html">Home</a></li>
            <li><a href="Paciente.php">Pacientes</a></li>
            <li><a href="Turnos.html">Turnos</a></li>
            <li><a class="active">Consultas</a></li>
        </ul>
        <br><br><br><br>
        <div id="contenedor">
        <label for="Dni">DOCUMENTO:</label>
        <input type="text" id="Dni" name="Dni" placeholder="Introduce el Documento"><br>
        <input type="submit" value="Enviar">
        </div>
    </form>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
    <div id="contenedorcito" align="center">
        	<div id="datos">
        
        <label>DNI</label> 
        <input type="text" name="DNI" placeholder="Ingrese DNI" required>
         <br>
		<label for="Fecha">Fecha</label> 
        <input type="date" name="Fecha" required>
         <br>
        <label>Peso</label>
        <input type="text" name="Peso" placeholder="Ingrese el peso" required>
        <br>
        <label>Altura</label>
        <input type="text" name="Altura" placeholder="Ingrese altura" required>
        <br>
        <label>Presion</label>
        <input type="text" name="Presion" placeholder="Ingrese presion" required>
        <br>
        <label>Saturacion</label>
        <input type="text" name="Saturacion" placeholder="Ingrese saturacion" required>
        <br>
        <label>Observacion</label>
        <input type="text" name="Observacion" placeholder="Escriba observaciones" required>
        <br>
        <button class="button" name="submit" style="vertical-align: middle;"><span>Cargar</span></button>
        </div>
    	</div>
<?php
if (isset($_POST['submit'])) {
    $DNI=$_POST['DNI'];
	$Fecha=$_POST['Fecha'];
	$Peso=$_POST['Peso'];
	$Altura=$_POST['Altura'];
    $Presion=$_POST['Presion'];
    $Saturacion=$_POST['Saturacion'];
    $Observacion=$_POST['Observacion'];

	$sql="INSERT INTO seguimiento_clinico (Fecha, Peso, Altura, Presion, Saturacion, Observacion) VALUES ('$Fecha', '$Peso', '$Altura', '$Presion','$Saturacion' ,'$Observacion')";
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

</body>

</html>
