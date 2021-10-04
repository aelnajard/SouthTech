<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Contact Us </title>
    <link rel="stylesheet" href="CSS/Southern.css">
  </head>


  <body>
    <?php include("Menu.php") ?>

          <style media="screen">
            body {
              background-color: rgba(40,44,52);
            }

            .ContactUs-Map {
              position: relative;
              max-width: 700px;
              margin: 0 auto;
              height: auto;
              background-color: rgba(40,44,52);
            }

          </style>

      <?php include("Pages/06-Contact/info-Map.php") ?>
          <div class="ContactUs-Map">
            <?php include("Pages/06-Contact/ContactForm.php") ?>
          </div>
      <?php include("Footer.php") ?>

  </body>
</html>
