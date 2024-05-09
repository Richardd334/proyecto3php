<?php
    require_once "conecction.php";
    $usuarios = mysqli_query($db,"SELECT * FROM usuarios ");
?>
<html>
    <h1> Listado de usuarios </h1>
    <!--<h3> <div align="right"><a href="ealta2.php">Alta de usuarios </a></div></h3>-->
    <hr>
<table border = 0 >
    <tr>
        <th width="15%">Nombre</th>
        <th width="15%">Apellidos Paterno</th>
        <th width="15%">Apellidos Materno</th>
        <th width="20%">email</th>
        <th width="10%">Ver completo/ Editar</th>
        <th width="8%">Borrar </th>
    </tr>
<?php
$color = "#f0f2f2";
while ($usua = mysqli_fetch_assoc($usuarios)){
?>
    <tr bgcolor="<?=$color?>">
        <td><?=$usua["Nombre"];?></td>
        <td><?=$usua["ApellidoPaterno"];?></td>
        <td><?=$usua["ApellidoMaterno"];?></td>
        <td><?=$usua["Correo"];?></td>
        <td><center><a href="EditarUs.php?usua=<?=$usua["Curp"];?>">Editar/Ver</a></center></td>
        <td><center><a href="eborrar.php?usua=<?=$usua["Curp"];?>">Borrar</a></center></td>
    </tr>
<?php 
    if ($color == "#f0f2f2"){
        $color = "#f32f20";
    } else {
        $color="#f0f2f2";
    }
}
?>
</table>
</html>