<?php

$User="root";
$Pass="";
$Servidor="localhost";
$Base="clinica";

$Conexion=mysqli_connect($Servidor, $User, $Pass);
$BD=mysqli_select_db($Conexion, $Base);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Secretaria.css" type="text/css">
        <title>Buscar</title>
    </head>
    <body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">


        <ul>
            <li><a>Menú</a></li>
            <li><a href="BxFecha.php">Buscar por Fecha</a></li>
            <li><a href="SacarT.php">Sacar Turnos</a></li>
            <li><a class="active" href="TaEntrar.php">Turnos a Entrar</a></li>
            <li><a href="TConfirm.php">Turnos Confirmados</a></li>
        </ul>

        <table border="1">
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
</form>
</table>
</body>
</html>