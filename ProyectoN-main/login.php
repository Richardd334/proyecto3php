<?php
  require_once "conecction.php";
  if(isset($_POST)&& (!empty($_POST["submit"]))){
    $user= $_POST['username'];
    $password=base64_encode($_POST['password']);

    $command= "SELECT * FROM usuarios where Correo =('$user') and Contraseña=('$password')";
    $resultado=mysqli_query($db,$command);
  
    $filas=mysqli_fetch_assoc($resultado);
    if($filas!=null){ 
  
      if ($filas['rol']==2){

        session_start();
        $_SESSION['Paso por login']=true;
        $_SESSION['admin']=true;
        
        header("Location: inicio_admin.php");
      }
      else{
        //OCultar  style="display: none"
        session_start();
        $_SESSION['login']=true;
        $_SESSION['Nombre']=$filas['Nombre'];

        header("Location: Inicio_usuario.php");
      }
    }else{
      echo "Correo o contraseña incorrecta";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosL.css">
    <title>Incio de Sesion</title>
</head>
<body>
<section>
    <h2>Iniciar Sesión</h2>
    <form action="login.php" method="post">
      <label for="username">Correo:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" name ="submit" value="Iniciar Sesión">
    </form>
    <a href="register.php">Registrarme</a>
  </section>
</body>
</html>

