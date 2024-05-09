<?php
session_start();
if (!array_key_exists('Paso por login', $_SESSION)) {
   header('Location: login.php');
   die;
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>cich.mx</title>
</head>
<body>
    <header class="head">Clinica de Salud de Chiapas 
    <img src="favicon/clinica.png" id="clinica"></header>
    <nav>
  <ul>
    <li><a href="#">Citas</a></li>
    <li><a href="Reports.php">Reportar</a></li>
    <li class="dropdown" id="admin">
      <a href="#" class="dropbtn">Administracion</a>
      <div class="dropdown-content">
        <a href="#">Ver citas</a>
        <a href="VerUsuarios.php">Ver usuarios</a>
        <a href="Colab.php">Ver colaboradores</a>
        <a href="Reports.php">Hacer reportes</a>
      </div>
    </li>

    <li class="dropdown">
      <a href="#" class="dropbtn">Horarios de Atención</a>
      <div class="dropdown-content">
        <a href="#">Lunes a Viernes</a>
        <a href="#">Sábados</a>
        <a href="#">Domingos</a>
      </div>
        </li>
    </ul>
    </nav>
    <section class="content">
    <h2>Noticias </h2>
    <p><b>El Gobierno de López Obrador alista su “megafarmacia”, un plan que genera dudas entre especialistas</b> 
    El Gobierno de México se prepara para inaugurar una “megafarmacia” que, según el presidente Andrés Manuel 
    López Obrador, contará con todos los medicamentos existentes y podrá surtir en 24 horas a las instituciones 
    públicas de salud que lo requieran. Sin embargo, el plan genera dudas entre especialistas consultados por CNN, 
    que cuestionan que vaya a funcionar como el Ejecutivo promete. ... <a href="https://cnnespanol.cnn.com/2023/12/27/gobiern-lopez-obrador-megafarmacia-plan-dudas-entre-especialistas-orix/">Leer más</a>
    </p>
    </section>
</body>
</html>