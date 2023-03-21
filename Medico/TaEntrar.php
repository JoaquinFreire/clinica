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
            <li><a href="SacarT.php">Sacar Turnos</a></li>
            <li><a class="active" href="TaEntrar.php">Turnos a Entrar</a></li>
            <li><a href="TConfirm.php">Turnos Confirmados</a></li>
        </div>
        </ul>

        <table id="tabla" align="center">
                <tr>
                <th>Id</th>
	            <th>Dni</th>
            	<th>Fecha</th>
            	<th>Hora</th>
            	<th>Atendido</th>
                </tr>
                <?php


    $sql = "SELECT * FROM `proxima_consulta` WHERE Atendido=\"No\";";
$result=mysqli_query($Conexion, $sql);
while($mostrar=mysqli_fetch_array($result)){
?>

<tr>
		<td><?php echo $mostrar['ID']?></td>
		<td><?php echo $mostrar['Dni']?></td>
		<td><?php echo $mostrar['Fecha']?></td>
		<td><?php echo $mostrar['Hora']?></td>
		<td><?php echo $mostrar['Atendido']?></td>
</tr>

<?php
}
?>
<div class="id" align="center">
    <br>    
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <label for="Id">Id</label>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <input type="text" name="Id" required="">
    <br>
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<label for="Medico">Medico que lo atenderá</label>
    <input type="text" name="Medico"  required="">
    <button type="submit" name="submit" >Enviar</button>
</div>
<br><br><br>
<?php
if(isset($_POST['submit'])){
    $Id=$_POST['Id'];
    $Medico=$_POST['Medico'];
$sql = "UPDATE `proxima_consulta` SET `Atendido`=\"Si\", `Medico`='".$Medico."' WHERE Id='".$Id."' ";
$result=mysqli_query($Conexion,$sql);
header("Status: 301 Moved Permanently");
header("Location: TaEntrar.php");
}
?>

</form>
</table>
</body>
</html>