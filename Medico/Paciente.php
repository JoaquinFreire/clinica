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
        <link rel="stylesheet" href="Paciente.css ?v=<?php echo time();?>"/>
        <title>Paciente</title>
    </head>
    <body>
        
            <ul>
                <li><a href="Home.html">Home</a></li>
                <li><a class="active" href="Paciente.php">Pacientes</a></li>
                <li><a href="Turnos.html">Turnos</a></li>
                <li><a href="Consulta0.php">Consultas</a></li>
            </ul>
<br>
        <table id="tabla">
            <tr>
                <th>Id</th>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Codigo Postal</th>
                <th>Calle</th>
                <th>Altura</th>
                <th>Piso</th>
                <th>Dpto</th>
                <th>Manzana</th>
                <th>Lote</th>
                <th>Pronvincia</th>
                <th>Localidad</th>
                <th>E-mail</th>
                <th>Telefono</th>
                <th>Telefono 2</th>
                <th>Fecha Nacimiento</th>
            </tr>    
<?php

$sql="SELECT * FROM pacientes ";
$result=mysqli_query($Conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
?>

    <tr>
        <td><?php echo $mostrar['id_p']?></td>
        <td><?php echo $mostrar['DNI']?></td>
        <td><?php echo $mostrar['Nombre']?></td>
        <td><?php echo $mostrar['Apellido']?></td>
        <td><?php echo $mostrar['CP']?></td>
        <td><?php echo $mostrar['Calle']?></td>
        <td><?php echo $mostrar['Altura']?></td>
        <td><?php echo $mostrar['Piso']?></td>
        <td><?php echo $mostrar['Dpto']?></td>
        <td><?php echo $mostrar['Manzana']?></td>
        <td><?php echo $mostrar['Lote']?></td>
        <td><?php echo $mostrar['Provincia']?></td>
        <td><?php echo $mostrar['Localidad']?></td>
        <td><?php echo $mostrar['Mail']?></td>
        <td><?php echo $mostrar['Tel']?></td>
        <td><?php echo $mostrar['Tel_dos']?></td>
        <td><?php echo $mostrar['FNAC']?></td>
    </tr>

   
<?php
}
?>
</table>
</body>
</html>