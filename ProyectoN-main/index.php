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
    <li><a href="login.php">Iniciar Sesion</a></li>

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
    <section class="content" style="width: 1250px;">
    <h2>Noticias</h2>
    <table>
      <tr>
        <td><p><b>El Gobierno de López Obrador alista su “megafarmacia”, un plan que genera dudas entre especialistas</b> 
        El Gobierno de México se prepara para inaugurar una “megafarmacia” que, según el presidente Andrés Manuel 
        López Obrador, contará con todos los medicamentos existentes y podrá surtir en 24 horas a las instituciones 
        públicas de salud que lo requieran. Sin embargo, el plan genera dudas entre especialistas consultados por CNN, 
        que cuestionan que vaya a funcionar como el Ejecutivo promete. ... <a href="https://cnnespanol.cnn.com/2023/12/27/gobiern-lopez-obrador-megafarmacia-plan-dudas-entre-especialistas-orix/">Leer más</a>
        </p></td>
          <!--td><div class="calendario">
        <h1>Calendario de Eventos</h1-->
        <!--div id="calendar"-->
          <!--?php       
          function generate_calendar($year, $month) {
              $firstDayOfMonth = new DateTime("$year-$month-01");
              $daysInMonth = $firstDayOfMonth->format('t');

              $calendar = '';

              // Generar encabezados de días de la semana
              $calendar .= '<div class="row">';
              $daysOfWeek = array('Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb');
              foreach ($daysOfWeek as $day) {
                  $calendar .= '<div class="day-of-week">' . $day . '</div>';
              }
              $calendar .= '</div>';

              // Generar días del mes
              $calendar .= '<div class="row">';
              $dayCounter = 0;
              for ($i = 1; $i <= $daysInMonth; $i++) {
                  $currentDate = new DateTime("$year-$month-$i");
                  $dayOfWeek = $currentDate->format('w');

                  // Llenar los días vacíos del comienzo del mes
                  if ($i === 1) {
                      $calendar .= str_repeat('<div class="day empty"></div>', $dayOfWeek);
                  }

                  // Verificar si el día actual tiene eventos
                  $events = get_events();
                  $eventClass = in_array($currentDate->format('Y-m-d'), $events) ? 'event' : '';

                  // Agregar día al calendario
                  $calendar .= '<div class="day ' . $eventClass . '">' . $i . '</div>';

                  $dayCounter++;
                  if ($dayCounter % 7 === 0) {
                      $calendar .= '</div><div class="row">';
                  }
              }

              // Llenar los días vacíos del final del mes
              if ($dayCounter % 7 !== 0) {
                  $remainingDays = 7 - ($dayCounter % 7);
                  $calendar .= str_repeat('<div class="day empty"></div>', $remainingDays);
              }

              $calendar .= '</div>';

              return $calendar;
          }

          // Obtener el año y mes actual
          $currentYear = date('Y');
          $currentMonth = date('m');

          echo generate_calendar($currentYear, $currentMonth);
          ?-->
        <!--/div>
    </div></td-->
    <td><p><b>Vacunación proactiva utilizando Quartet Nanocages multivirales para provocar 
      respuestas amplias contra el coronavirus
        Resumen </b>
        La defensa contra futuras pandemias requiere plataformas de vacunas que protejan 
        contra una variedad de patógenos relacionados. Se pueden utilizar patrones a  
        nanoescala para abordar este problema. Aquí, producimos cuartetos de dominios 
        de unión a receptores (RBD) vinculados a partir de un panel de betacoronavirus 
        similares al SARS, acoplados a una nanojaula diseñada computacionalmente a través 
        de enlaces SpyTag/SpyCatcher. Estas Nanojaulas del Cuarteto, que poseen una morfo-
        logía ramificada, inducen un alto nivel de anticuerpos neutralizantes contra varios
        coronavirus diferentes, incluso contra virus no representados en la vacuna. 
        Se generan respuestas de anticuerpos equivalentes a los RBD cerca de la nanojaula 
        o en las puntas de las ramas de la nanopartícula. </p> </td>
    </tr>
    </table>
    </section>
</body>
</html>
