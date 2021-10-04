<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Modelos </title>
    <link rel="stylesheet" href="CSS/Southern.css">
  </head>

  <body>
    <?php include("Menu.php"); ?>
    <style media="screen">
    .Models{
      position: relative;
      padding: 120px 0;
      height: auto;
      width: 80%;
      left: 50%;
      transform: translateX(-50%);
      text-align: center;
    }
    .BoxModels{
      position: relative;
      display: inline-block;
      height: 400px;
      width: 400px;
      margin: 20px;
      cursor: grab;
      border: 1px solid lightgrey;
      overflow: hidden;
      border-radius: 5px;
    }
    model-viewer{
      position: absolute;
      height: 100% !important;
      width: 100% !important;
    }
    .Top-Box{
      position: absolute;
      top: 0px;
      height: 20%;
      width: 100%;
      background-color: rgba(23, 28, 36, .925);
      transition: height .5s, opacity .7s;
      z-index: 10;
      border-bottom: 1px solid lightgrey;
      box-shadow: 0px 0px 3px grey;
    }
    .Top-Box h3{
      color: white;
      padding: 7%;
    }
    .Bottom-Box{
      position: absolute;
      bottom: 0px;
      height: 20%;
      width: 100%;
      background-color: rgba(23, 28, 36, .925);
      opacity: 1;
      transition: height .5s, opacity .7s;
      z-index: 10;
      border-top: 1px solid grey;
      box-shadow: -0px -0px 3px grey;

    }
    .Bottom-Box h3{
      color: white;
      padding: 7%;
      text-shadow: 1px 1px 0 grey;
    }
    .BoxModels:hover .Bottom-Box {
      opacity: 0;
      height: 0%;
      transition: height .5s, opacity .5s;
    }
    .BoxModels:hover .Top-Box{
      opacity: 0;
      height: 0%;
      transition: height .5s, opacity .5s;
    }

    </style>


    <section class="Models">

      <div class="BoxModels">

        <div class="Top-Box">
          <h3>lorem ipsum lorem ipsum</h3>
        </div>

        <div class="Bottom-Box">
          <h3>Aplicación: Medicina</h3>
        </div>

        <model-viewer src="Models/Model1.glb" ar ar-modes="webxr scene-viewer quick-look" camera-controls environment-image="neutral" poster="poster.webp" shadow-intensity="0" shadow-softness="0" auto-rotate>
          <div class="progress-bar hide" slot="progress-bar">
              <div class="update-bar"></div>
          </div>
        </model-viewer>
      </div>

      <div class="BoxModels">

        <div class="Top-Box">
          <h3>lorem ipsum lorem ipsum</h3>
        </div>

        <div class="Bottom-Box">
          <h3>Aplicación: Medicina</h3>
        </div>

        <model-viewer src="Models/Model2.glb" ar ar-modes="webxr scene-viewer quick-look" camera-controls environment-image="neutral" poster="poster.webp" shadow-intensity="0" shadow-softness="0" auto-rotate>
          <div class="progress-bar hide" slot="progress-bar">
              <div class="update-bar"></div>
          </div>
        </model-viewer>
      </div>

      <div class="BoxModels">

        <div class="Top-Box">
          <h3>lorem ipsum lorem ipsum</h3>
        </div>

        <div class="Bottom-Box">
          <h3>Aplicación: Medicina</h3>
        </div>

        <model-viewer src="Models/Model3.glb" ar ar-modes="webxr scene-viewer quick-look" camera-controls environment-image="neutral" poster="poster.webp" shadow-intensity="0" shadow-softness="0" auto-rotate>
          <div class="progress-bar hide" slot="progress-bar">
              <div class="update-bar"></div>
          </div>
        </model-viewer>
      </div>

      <div class="BoxModels">

        <div class="Top-Box">
          <h3>lorem ipsum lorem ipsum</h3>
        </div>

        <div class="Bottom-Box">
          <h3>Aplicación: Medicina</h3>
        </div>

        <model-viewer src="Models/Model4.glb" ar ar-modes="webxr scene-viewer quick-look" camera-controls environment-image="neutral" poster="poster.webp" shadow-intensity="0" shadow-softness="0" auto-rotate>
          <div class="progress-bar hide" slot="progress-bar">
              <div class="update-bar"></div>
          </div>
        </model-viewer>
      </div>

      <div class="BoxModels">

        <div class="Top-Box">
          <h3>lorem ipsum lorem ipsum</h3>
        </div>

        <div class="Bottom-Box">
          <h3>Aplicación: Medicina</h3>
        </div>

        <model-viewer src="Models/Model5.glb" ar ar-modes="webxr scene-viewer quick-look" camera-controls environment-image="neutral" poster="poster.webp" shadow-intensity="0" shadow-softness="0" auto-rotate>
          <div class="progress-bar hide" slot="progress-bar">
              <div class="update-bar"></div>
          </div>
        </model-viewer>
      </div>

      <div class="BoxModels">

        <div class="Top-Box">
          <h3>lorem ipsum lorem ipsum</h3>
        </div>

        <div class="Bottom-Box">
          <h3>Aplicación: Medicina</h3>
        </div>

        <model-viewer src="Models/Model6.glb" ar ar-modes="webxr scene-viewer quick-look" camera-controls environment-image="neutral" poster="poster.webp" shadow-intensity="0" shadow-softness="0" auto-rotate>
          <div class="progress-bar hide" slot="progress-bar">
              <div class="update-bar"></div>
          </div>
        </model-viewer>
      </div>




    </section>



    <script type="text/javascript">

    </script>

    <?php include("Footer.php")?>

    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

  </body>
</html>
