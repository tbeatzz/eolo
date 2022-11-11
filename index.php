<?php 


$servername = "localhost";
$database = "eolo";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$consulta = "SELECT * FROM datos WHERE id = (SELECT MAX(id) from datos)";


if ($result = $conn->query($consulta)) {
  while ($row = $result->fetch_assoc()) {
      $temperatura = $row["temperatura"];
      $humedad = $row["humedad"];
      $s_termica = $row["s_termica"];
      $viento_direccion = $row["viento_direccion"];
      $viento_velocidad = $row["viento_velocidad"];
      $lluvia = $row["p_atmosferica"];

  }
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EOLO | Inicio</title>
    <!-- css -->
    <link rel="stylesheet" href="css/app.css" />
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    /> -->
    <!-- js -->
    <script defer src="js/app.js"></script>
  </head>
  <body>
    <!-- PRELOAD -->
    <div class="preload">
      <img src="img/logos/logo_2.png" alt="Logo eolo" class="preload__img" />
    </div>
    <!-- FIN PRELOAD -->

    <!-- HEADER -->
    <header class="header">
      <div class="header__wrapper">
        <h1 class="header__h1">
          <a href="#" title="EOLO" class="header__a">
            <img
              src="img/logos/logo_2.png"
              alt="EOLO logo"
              class="header__img"
              loading="lazy"
            />
          </a>
        </h1>

      </div>
    </header>
    <!-- FIN HEADER -->

    <main class="main">
      <section class="main__section datos">
        <!-- Wrapper del los cuadros -->
        <div class="datos__wrapper wrapper">
          <!-- Cuadro de temperatura y lluvia -->
          <div
            class="datos__templluv animate__animated animate__fadeInLeft animate__delay-3s"
          >
            <!-- DATOS Temperatura -->
            <div class="datos__temperatura">
              <!-- DATOS ICONO -->
              <div class="datos__svg">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  viewBox="0 0 16 16"
                >
                  <path d="M8 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                  <path
                    d="M8 0a2.5 2.5 0 0 0-2.5 2.5v7.55a3.5 3.5 0 1 0 5 0V2.5A2.5 2.5 0 0 0 8 0zM6.5 2.5a1.5 1.5 0 1 1 3 0v7.987l.167.15a2.5 2.5 0 1 1-3.333 0l.166-.15V2.5z"
                  />
                </svg>
              </div>
              <!-- DATOS VALORES -->
              <div class="datos__info">
                <h2 class="datos__h2">Templado</h2>
                <h3 class="datos__estado"><?php echo $temperatura?></h3>
              </div>
            </div>
            <!-- DATOS LLUVIA -->
            <div class="datos__lluvia">
              <div class="datos__svg">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M11.473 9a4.5 4.5 0 0 0-8.72-.99A3 3 0 0 0 3 14h8.5a2.5 2.5 0 1 0-.027-5z"
                  />
                  <path
                    d="M14.544 9.772a3.506 3.506 0 0 0-2.225-1.676 5.502 5.502 0 0 0-6.337-4.002 4.002 4.002 0 0 1 7.392.91 2.5 2.5 0 0 1 1.17 4.769z"
                  />
                </svg>
              </div>
              <div class="datos__info">
                <h2 class="datos__h2">Lluvia</h2>
                <h3 class="datos__estado"><?php echo $lluvia?></h3>
              </div>
            </div>
          </div>

          <!-- Cuadro de datos del viento -->
          <div
            class="datos__templluv animate__animated animate__fadeInLeft animate__delay-3s"
          >
            <!-- DATOS Temperatura -->
            <div class="datos__temperatura">
              <!-- DATOS ICONO -->
              <div class="datos__svg">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-wind"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M12.5 2A2.5 2.5 0 0 0 10 4.5a.5.5 0 0 1-1 0A3.5 3.5 0 1 1 12.5 8H.5a.5.5 0 0 1 0-1h12a2.5 2.5 0 0 0 0-5zm-7 1a1 1 0 0 0-1 1 .5.5 0 0 1-1 0 2 2 0 1 1 2 2h-5a.5.5 0 0 1 0-1h5a1 1 0 0 0 0-2zM0 9.5A.5.5 0 0 1 .5 9h10.042a3 3 0 1 1-3 3 .5.5 0 0 1 1 0 2 2 0 1 0 2-2H.5a.5.5 0 0 1-.5-.5z"
                  />
                </svg>
              </div>
              <!-- DATOS VALORES -->
              <div class="datos__info">
                <h2 class="datos__h2">Velocidad del viento</h2>
                <h3 class="datos__estado"><?php echo $viento_velocidad?> </h3>
              </div>
            </div>
            <!-- DATOS LLUVIA -->
            <div class="datos__lluvia">
              <div class="datos__svg">
                <svg
                  version="1.1"
                  id="Layer_1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  x="0px"
                  y="0px"
                  viewBox="0 0 109.88 122.88"
                  style="enable-background: new 0 0 109.88 122.88"
                  xml:space="preserve"
                >
                  <g>
                    <path
                      class="st0"
                      d="M40.45,2.13c3.17,13.57,9.96,25.71,17.08,36.7c1.06-1.6,2.18-3.24,3.33-4.91c6.39-9.34,13.67-19.99,16.5-32.26 c0.26-1.15,1.4-1.86,2.55-1.6c0.82,0.19,1.42,0.82,1.6,1.59c2.85,12.21,10.12,22.86,16.51,32.21c6.35,9.3,11.87,17.39,11.87,25.08 c0,14.27-7.93,23.42-18.07,27.43c-3.53,1.4-7.33,2.16-11.15,2.29C75.43,135.98,0,134.23,0,83.39C0,62.59,32.31,37.36,40.45,2.13 L40.45,2.13z M60.08,42.7c10.49,15.69,20.87,28.96,20.87,40.69c0,0.34-0.02,0.66-0.02,0.99c3.2-0.16,6.37-0.81,9.31-1.98 c8.63-3.41,15.37-11.23,15.37-23.46c0-6.38-5.17-13.96-11.12-22.68c-5.39-7.9-11.39-16.69-15.06-26.72 c-3.66,10.09-9.67,18.88-15.07,26.77C62.87,38.51,61.41,40.64,60.08,42.7L60.08,42.7z M15.81,77.48c-0.2-2.26,1.46-4.25,3.72-4.46 c2.26-0.21,4.25,1.46,4.46,3.72c0.51,5.46,1.7,10.48,3.99,14.82c2.21,4.19,5.48,7.79,10.22,10.57c1.96,1.14,2.61,3.66,1.47,5.61 c-1.15,1.96-3.66,2.61-5.61,1.47c-6.17-3.62-10.45-8.32-13.34-13.82C17.88,90.03,16.42,83.97,15.81,77.48L15.81,77.48L15.81,77.48z"
                    />
                  </g>
                </svg>
              </div>
              <div class="datos__info">
                <h2 class="datos__h2">Humedad</h2>
                <h3 class="datos__estado"><?php echo $humedad?></h3>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- <footer class="footer">
      <h1>Copyright © EOLO 2022</h1>
    </footer> -->
  </body>
</html>
