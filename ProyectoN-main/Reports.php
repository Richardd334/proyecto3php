<?php
    require_once "conecction.php";

  $sql="CREATE TABLE IF NOT EXISTS reports(
    Id_reporte int(10) auto_increment not null,
    curp varchar(55) NOT NULL,
    id_admin int(10),
    fecha_inicio datetime,
    fecha_solucion datetime,
    Tipo_problema varchar(255),
    Descripcion varchar(255),
    CONSTRAINT  pk_user PRIMARY KEY(Colaborador)
    ADD CONSTRAINT reportes_ibfk_1 FOREIGN KEY (id_admin) REFERENCES admin (id_admin) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT reportes_ibfk_2 FOREIGN KEY (curp) REFERENCES usuarios (Curp) ON DELETE CASCADE ON UPDATE CASCADE;
    COMMIT;
    );";
    if (isset($_GET["usua"]) && !empty($_GET["usua"])) {
        $curp = $_GET["usua"];
        $usuarios = mysqli_query($db,"SELECT * FROM usuarios WHERE Curp ={$curp}");
        $usuario = mysqli_fetch_assoc($usuarios);
        if ($usuario) {
            $idus = $usua;
            $nomb = $usuario["Nombre"];
            $apelPat = $usuario["ApellidoPaterno"];
            $apelMat = $usuario["ApellidoMaterno"];
            $edad = $usuario["Edad"];
            $correo = $usuario["Correo"];
            $cell=$usuario["Celular"];
            $password = $usuario["Contrasela"];
            if( $usuario["rol"]==1){
                $rol ="usuarrio";
            }else{
                $rol = "admin";
            }
        }
    }
    if (isset($_GET["admin"]) && !empty($_GET["admin"])) {
        $id_admin = $_GET["admin"];
        $admins = mysqli_query($db,"SELECT * FROM admin WHERE id_admin ={$id_admin}");
        $admin = mysqli_fetch_assoc($admins);
        if ($usuario) {
            $id_admin = $admin;
        } 
    }
    $sql="INSERT INTO reports
    VALUES ('".$curp."','".$id_admim."','"."','"
    ."','".$_POST["tipo_problema"]."','".$_POST["descripcion"]."';"; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Problemas</title>
    <link rel="stylesheet" href="estilosRepo.css">
</head>
<body>
    <div class="container">
        <h1>Reporte de Problemas</h1>
        <form action="submit.php" method="POST">
            <div class="form-group">
                <label for="tipo_problema">Tipo de Problema:</label>
                <select id="tipo_problema" name="tipo_problema" required>
                    <option value="">Seleccione un tipo de problema</option>
                    <option value="Problemas de Software">Problemas de Software</option>
                    <option value="Problemas de Hardware">Problemas de Hardware</option>
                    <option value="Otros Problemas">Otros Problemas</option>
                </select>
                <label for="admin">Tipo de Problema:</label>
                <select name="admin" id="tipo_problema" required>
                    <option value="">Seleccione un colaborador para canalizar su problema</option>
                    <option value="1">Ricardo Gómez Gálvez</option>
                    <option value="2">Mario Lissandro Zúñiga Sánchez</option>
                    <option value="3">Alberto Ballinas Moreno</option>
                    <option value="4">Carlos Isaías Pérez Vicente</option>
                </select>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción del problema:</label>
                <input type="text" id="descripcion" name="descripcion" required>
            </div>
            <button type="submit">Enviar Reporte</button>
        </form>
    </div>
</body>
</html>
