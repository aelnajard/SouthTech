<style>

/* ----------- */
/* Pro Scanner */
/* ----------- */
.ProScan {
  position: relative;
  width: 100%;
  margin-bottom: 40px;
  height: auto;
  overflow: hidden;
}
  /* LEFT */
  .Pro-L {
    float: left;
    height: 500px;
    width: 60%;
    padding: 45px 30px 30px 30px;
  }
    .Pro-L h1 {
      margin-bottom: 20px;
    }
    .Pro-L h2 {
      margin-bottom: 10px;
    }
    .Pro-L span {
      font-weight: normal;
    }
    .Pro-L h3 {
      margin-bottom: 20px;
    }

    .Brochure {
      height: 50px;
      padding: 15px;
    }


  /* RIGHT */
  .Pro-R {
    padding: 10px;
    float: left;
    width: 40%;
    height: auto;
  }
      .Pro-Specs {
        position: relative;
      }
        .Specs-Top {
          position: relative;
          width: 50%;
          height: auto;
          margin: 0 auto;
        }
          .Specs-Top img {
            position: relative;
            min-width: 300px;
            width: 100%;
          }
        .Specs-Bot {
          position: relative;
          min-width: 300px;
          width: 50%;
          margin: 0 auto;
        }
          .Specs-Bot img {
            position: relative;
            width: 130px;
            left: 50%;
            transform: translateX(-100%);
          }



        /* Responsiveness */
        @media only screen and (max-width:1250px) {
          .Wrap {
            width: 95%;
          }
        }

        @media only screen and (max-width: 850px) {
          body {
          }
          .ProScan {
            height: auto;
            margin-bottom: 70px;
          }
          .Pro-L {
            height: auto;
            width: 100%;
            padding: 50px;
          }
          .Pro-R {
            width: 100%;
          }
          .Wrap {
            width: 95%;
          }

          .Pro-Specs {
            position: relative;
          }
            .Specs-Top {
              width: 40%;
            }
              .Specs-Top img {
                min-width: 200px;
              }
              .Specs-Bot img {
                width: 32.5%;
              }

      }


</style>




    <section class="ProScan">

      <div class="Wrap">

          <div class="Pro-L">
            <h1> Artec Eva </h1>
            <h2> Fast 3D scanner for professionals </h2>
            <h3> Named best 3D scanner under $50,000 </h3>
            <p> This structured light 3D scanner is the ideal choice
              for making a quick, textured and accurate 3D model of
              medium sized objects such as a human bust, an allow wheel,
              or a motorcycle exhaust system. It scans quickly for sure. </p>

            <p> Light, fast and versatile, Eva is our most popular scanner
              and a market leader in handheld 3D scanners. Based on
              safe-to-use structured light scanning technology, it is
              an excellent allround solution for capturing objects of
              almost any kind, including objects with black and
              shiny surfaces. </p>

            <div class="Brochure">
              <p> Download <a href="www.google.com"> Brochure </a> </p>
            </div>

            <h2> Precio: <span>US $19,800</span> </h2>
            <h4> Precio especial <span>para Educacion & investigacion<span></h4>
          </div>

          <div class="Pro-R">
              <div class="Pro-Specs">

                <div class="Specs-Top">
                  <img src="images\ProScan\Eva.png" class="CenterX">
                </div>

                <div class="Specs-Bot">
                  <img src="images\ProScan\Pro-R-01.png">
                  <img src="images\ProScan\Pro-R-02.png">
                </div>

              </div>
          </div>

          </div>

      </div>

    </section>
