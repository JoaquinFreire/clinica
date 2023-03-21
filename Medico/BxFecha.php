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
            <li><a href="Secretaria.html">Menú</a></li>
            <li><a class="active" href="BxFecha.php">Buscar por Fecha</a></li>
            <li><a href="SacarT.php">Sacar Turnos</a></li>
            <li><a href="TaEntrar.php">Turnos a Entrar</a></li>
            <li><a href="TConfirm.php">Turnos Confirmados</a></li>
        </ul>
        <ul>
            <li><a>Menú</a></li>
            <div class="menu">
            <li><a class="active" href="BxFecha.php">Buscar por Fecha</a></li>
            <li><a href="SacarT.php">Sacar Turnos</a></li>
            <li><a href="TaEntrar.php">Turnos a Entrar</a></li>
            <li><a href="TConfirm.php">Turnos Confirmados</a></li>
        </div>
        </ul>
            <label for="Fecha">Cargar Fecha</label>
            <div align="right">
            <input type="date" name="Fecha" required>
            <button class="button" name="submit" style="vertical-align: middle;"><span>Buscar</span></button>
            </div>
        <br>
        <br>
        <br>
        <br>
        <table align="center" id="tabla">
            <tr>
                <th>Id</th>
	            <th>Dni</th>
            	<th>Fecha</th>
            	<th>Hora</th>
            	<th>Atendido</th>
            	<th>Médico</th>
            </tr>
                
<?php
if(isset($_POST['submit'])){
$Fecha=$_POST['Fecha'];

$sql="SELECT * FROM proxima_consulta WHERE Fecha='".$Fecha."'";
$result=mysqli_query($Conexion, $sql);
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
}
?>
</form>
</table>

</body>
</html>