<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Escaners Lasers 3D </title>
    <link rel="stylesheet" href="CSS/Southern.css">
  </head>

  <body>

  <?php include("Menu.php") ?>

  <style media="screen">
    .Handheld-Sec {
      background: rgb(227,227,227);
    }
    .BestScans-Sec {
      background: white;
    }
    .Sigma {
      padding: 50px 0;
      background-color: rgb(38,39,43);
    }
    .Sigma h3 {
      color: white;
    }
  </style>

  <div class="Handheld-Welcome">

        <h3> Southern Technologies </h3>
        <h1> 3D Scanner Range </h1>
        <p> Descubre nuestra seleccion de escaners 3D para todo tipo de
            aplicaciones, desde medicina, ingenieria inversa, medicina, hasta marketing
            digital. Tenemos tres categorias de escaners: Profesionales, de Escritorio, Industriales.
          </p>

  </div>


      <div class="Handheld-Sec">
        <?php include ("Pages/Scanners/Handheld.php") ?>

      <div class="Handheld-Sec2">
        <?php include ("Pages/Scanners/Handheld-II.php") ?>
      </div>

      <div class="Sigma">
        <?php include ("Pages/SixSigma.php") ?>
      </div>

      <div class="Handheld-Sec2">
        <?php include ("Pages/Scanners/Desktop.php") ?>
      </div>

      <?php include ("Pages/Scanners/Industrial.php") ?>

      <div class="BestScans-Sec">
      <?php include ("Pages/Scanners/BestScans.php") ?>
      </div>

      <div class="Clear"> </div>

      <?php include("Footer.php") ?>

  </body>
</html>
