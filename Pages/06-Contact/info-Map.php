
  <style media="screen">

    .Contact {
      position: relative;
      margin: 0 auto;
      height: auto;
    }
        .Contact h2 {
          margin-bottom: 20px;
        }
        .Contact p {
          margin-bottom: 10px;
        }
        .Contact-L-Content h4, p, h2, h1 {
          letter-spacing: 0.05em;
          color: white;
        }

        .Contact h4 {
          letter-spacing: normal;
        }
        .Contact button {
          margin-top: 30px;
          padding: 10px;
          background: rgb(240,63,36);
          border: 0px;
          color: white;
          font-weight: bold;
        }


      .Contact-L {
        position: absolute;
        width: 50%;
        height: 100%;
        z-index: 2;
        background: rgba(0,0,0, 0.7);
      }
        .Contact-L-Content {
          position: relative;
          padding: 10px;
          min-width: 400px;
          max-width: 500px;
          width: 80%;
          left: 50%;
          top: 50%;
          transform: translate(-50%, -50%);
        }

      .Contact-R {
        position: relative;
        width: 100%;
        height: 500px;
      }


      @media screen and (max-width: 1000px) {
        .Contact-L {
          position: absolute;
          width: 100%;
          height: 50%;
        }
        .Contact-R {
          width: 100%;
          height: 1000px;
        }
      }

    </style>


    <section class="Contact">

      <div class="Contact-L">
        <div class="Contact-L-Content">

          <h1> Southern Technologies </h1>
          <h2> LATAM </h2>

          <p> Estamos orgullosos de presentar tecnologia de escaneo laser de punta.
            Ubicados en Bogota llegamos a toda latino america y el caribe! </p>

          <h4> Colombia, Bogota D.C. </h4>
          <h4> North Point Towers | Oficina 901 </h4>
          <h4> Cra 7a #156-40 </h4> <br/>
          <h4> Lunes a Viernes, 11am - 7pm </h4>

          <button type="VisitBtn" name="button"> Agenda tu Visita </button>

        </div>
      </div>
      <div class="Contact-R">

        <div class="mapouter">
          <div class="gmap_canvas">
            <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=north%20point%20tower%20building%20krystal%20ph&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://123movies-to.org"></a><br>
            <style>
            .mapouter {
              position:relative;
              text-align:right;
              height:100%;
              width: 100%;
              margin: 0 auto;
              }
            </style>
            <a href="https://www.embedgooglemap.net"></a>

            <style>
            .gmap_canvas {
              overflow:hidden;
              background:none !important;
              height: 100%;
              width:100%;
              }
            </style>
          </div>
        </div>

      </div>

      <div class="Clear"> </div>

    </section>
