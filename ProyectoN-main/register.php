<?php
    require_once "conecction.php";
    /**if(isset($_POST)&& (!empty($_POST["submit"]))){
        var_dump($_POST);
        $sql="INSERT INTO usuarios
        VALUES (NULL, '".$_POST["name"]."','".$_POST["suname"]."','".$_POST["bio"]."','"
        .$_POST["email"]."','".sha1($_POST["password"])."','".$_POST["role"]."','".$_POST["imagen"]."');";
    
        echo $sql;
        $insert_usuarios=mysqli_query($db, $sql);
        if($insert_usuarios){
            echo "Datos guardados a la bd";
            header("Location: elistado.php");
        }



        if(isset($_POST)&& (!empty($_POST["submit"]))){
        var_dump($_POST);
        $sql="INSERT INTO usuarios
        VALUES (NULL, '".$_POST["name"]."','".$_POST["suname"]."','".$_POST["bio"]."','"
        .$_POST["email"]."','".sha1($_POST["password"])."','".$_POST["role"]."','".$_POST["imagen"]."');";
    
        echo $sql;
        $insert_usuarios=mysqli_query($db, $sql);
        if($insert_usuarios){
            echo "Datos guardados a la bd";
            header("Location: elistado.php");
        }
    }

    }**/

    $sql="CREATE TABLE IF NOT EXISTS usuarios(
        Curp varchar(20) auto_increment not null,
        Nombre varchar(55) NOT NULL,
        ApellidoMaterno varchar(55) NOT NULL,
        ApellidoPaterno varchar(55) NOT NULL,
        Edad int(2) NOT NULL,
        Correo varchar(55) NOT NULL,
        Celular varchar(15) NOT NULL,
        Contraseña varchar(55) NOT NULL,
        rol varchar(15) NOT NULL
        CONSTRAINT  pk_user PRIMARY KEY(Curp)
    );";

    $create_usuarios_table=mysqli_query($db, $sql);
    if(isset($_POST)&& (!empty($_POST["Registrarse"]))){
        var_dump($_POST);
        $sql="INSERT INTO usuarios
        VALUES ('".$_POST["curp"]."','".$_POST["username"]."','".$_POST["ApePat"]."','"
        .$_POST["ApeMat"]."','".$_POST["edad"]."','".$_POST["correo"]."','".$_POST["cell"]."','".base64_encode($_POST["password"])."','".$_POST["role"]."');";
    
        $insert_usuarios=mysqli_query($db, $sql);
        if($insert_usuarios){
            echo "Datos guardados a la bd";
            header("Location: index.php");
        }
    }

    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" type="text/css" href="estilosR.css">
</head>
<body>
    <div class="container">
        <h1>Registro de Usuario</h1>
        <form action="register.php" method="POST">

            <label for="curp">CURP:</label><br>
            <input type="text" id="curp" name="curp" required><br><br>

            <label for="name">Nombre(s):</label><br>
            <input type="text" id="username" name="username" required><br><br>

            <label for="ApePat">Apellido Paterno</label><br>
            <input type="text" id="ApePat" name="ApePat" required><br><br>

            <label for="ApeMat">Apellido Materno</label><br>
            <input type="text" id="ApeMat" name="ApeMat" required><br><br>

            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password" required><br><br>

            <label for="password_con">Confirmar Contraseña:</label><br>
            <input type="password" id="password_con" name="password_con" required><br><br>

            <label for="role">Rol en la Empresa:</label><br>
            <select name="role" style="padding: 10px">
                        <option value="1">Usuario</option>
                        <option value="2">Administrador</option>
            </select><br><br>
            <!--input type="text" id="role" name="role" required><br><br-->

            <label for="edad">Edad:</label><br>
            <input type="text" id="edad" name="edad" required><br><br>

            <label for="correo">Correo:</label><br>
            <input type="text" id="correo" name="correo" required><br><br>

            <label for="cell">Celular:</label><br>
            <input type="text" id="cell" name="cell" required><br><br>

            <input type="submit" name="Registrarse" value="Registrarse">
        </form>
    </div>
</body>
</html>