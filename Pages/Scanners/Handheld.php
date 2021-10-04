<style media="screen">

  .Handheld-Welcome {
    position: relative;
    padding: 20px 50px;
    max-width: 900px;
    text-align: center;
    margin: 0 auto;
  }

  .Handheld-Scanners {
    position: relative;
    height: auto;
    padding-bottom: 30px;
    max-width: 1000px;
    width: 90%;
    margin: 0 auto;
  }

  .Handheld-Msg {
    position: relative;
    max-width: 750px;
    width: 90%;
    padding: 50px 0;
  }
  .Handheld-Msg h1 {
    color: rgb(239,65,38);
  }
  .Handheld-Msg h3 {
    margin-bottom: 20px;
  }

  .Handheld-Card {
    position: relative;
    background: white;
    height: 300px;
    width: 1000px;
    margin: 0 auto;
    margin-bottom: 50px;
    border-radius: 20px;

    box-shadow: 5px 5px 14px 3px rgba(0,0,0,0.46);
    -webkit-box-shadow: 5px 5px 14px 3px rgba(0,0,0,0.46);
  }

  .Handheld-Card-L {
    position: relative;
    float: left;
    width: 30%;
    height: 100%;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
  }
    .Handheld-Card-L img {
      object-fit: cover;
      width: 100%;
      height: 100%;
      border-top-left-radius: 20px;
      border-bottom-left-radius: 20px;
    }

  .Handheld-Card-M {
    position: relative;
    padding: 35px;
    float: left;
    width: 45%;
    height: 100%;
    background: rgb(57,57,56);
  }
    .Handheld-Card-M span {
      font-weight: normal;
    }
    .Handheld-Card-M h2 {
      margin-bottom: 25px;
      color: white;
    }
    .Handheld-Card-M p {
      letter-spacing: .1em;
      color: white;
    }


    .scanline {
      position: relative;
      border-bottom: 3px solid rgb(239,65,38);
      margin-bottom: 5px;
      margin-top: 35px;
    }

  .Handheld-Card-R {
    position: relative;
    padding: 30px;
    float: right;
    width: 25%;
  }
    .Handheld-Card-R h3 {
      margin-bottom: 2px;
    }
      .Handheld-Card-R h2 {
        margin-left: 85px;
      }
    .Handheld-Card-R p {
      margin-bottom: 35px;
      color: rgb(239,65,38);
      display: inline-block;
    }




          @media screen and (max-width: 1120px) {


              .Handheld-Msg {
                width: 90%;
                margin: 0 auto;
              }

              .Handheld-Scanners {
                width: 95%;
              }

              .Handheld-Card {
                position: relative;
                height: 600px;
                width: 700px;
                margin: 0 auto;
                margin-bottom: 70px;
              }

              .Handheld-Card-L {
                float: left;
                width: 50%;
                height: 50%;
                border-top-left-radius: 20px;
                border-bottom-left-radius: 20px;
              }
                .Handheld-Card-L img {
                  border-radius: 0px;
                  border-top-left-radius: 20px;
                }

              .Handheld-Card-M {
                position: relative;
                border-top-right-radius: 20px;
                float: left;
                height: 50%;
                width: 50%;
              }

              .Handheld-Card-R {
                position: relative;
                width: 70%;
                left: 70%;
                transform: translateX(-120%);
                text-align: center;
              }
                .scanline {
                  width: 175px;
                  margin: 0 auto;
                }
                .Handheld-Card-R h2 {
                  margin-left: 0px;
                }
          }


          @media screen and (max-width: 800px) {

              .Handheld-Card {
                height: 700px;
                max-width: 450px;
                width: 90%;
              }

              .Handheld-Card-L {
                width: 100%;
                height: 30%;
                border-top-left-radius: 20px;
              }
                .Handheld-Card-L img {
                  border-radius: 0px;
                  object-fit: contain;
                  border-top-left-radius: 20px;
                  border-top-right-radius: 20px;
                }

              .Handheld-Card-M {
                position: relative;
                float: left;
                border-radius: 0px;
                height: 40%;
                width: 100%;
              }

              .Handheld-Card-R {
                width: 70%;
                height: 20%;
                left: 70%;
                transform: translateX(-120%);
              }
              .Handheld-Card-R h3 {
                position: relative;
                top: -10px;
              }
              .Handheld-Card-R p  {
                position: relative;
                top: -12.5px;
                margin-bottom: 20px;
              }
              .Handheld-Card-R h2  {
                margin: -10px;
              }
                .scanline {
                  display: none;
                }
          }



</style>


<section class="Handheld-Scanners">

  <div class="Handheld-Msg">
    <h1> Handheld 3D Scanning </h1>
    <h3> Portable, Fast & Intuitive </h3>
    <p> A professional handheld 3D scanner is portable and user-friendly, making it fast to capture
objects and detailed areas from all angles and in almost any environment. Handheld 3D scanners
are also the best tool for digitizing hard-to-scan areas such as black or shiny surfaces. </p>
  </div>


    <div class="Handheld-Card">

      <div class="Handheld-Card-L">
        <img src="images/Scanners/A-Eva.png">
      </div>

      <div class="Handheld-Card-M">
        <h2> <span>Artec</span> Eva </h2>
        <p> Long-time industry-favourite, this
            versatile 3D scanner makes fast 3D
            scans of objects such as the human
            body, furniture, industrial machinery
            and ancient artifacts. </p>
      </div>

      <div class="Handheld-Card-R">

        <h3> Accuracy: </h3>
        <p> up to 0.1mm </p>

        <h3> Scanning Object Size: </h3>
        <p> Medium </p>
        <div class="scanline"></div>
        <h2> $19,800 </h2>

      </div>

    </div>


    <!-- Eva Lite -->
      <div class="Handheld-Card">

        <div class="Handheld-Card-L">
          <img src="images/Scanners/A-Eva-Lite.png">
        </div>

        <div class="Handheld-Card-M">
          <h2> <span>Artec</span> Eva Lite </h2>
          <p> Budget version of Artec Eva for
              capturing organic shapes. Good entry
              level option for healthcare, universities
              or schools. No color capture for
              tracking, align or texturing.</p>
        </div>

        <div class="Handheld-Card-R">

          <h3> Accuracy: </h3>
          <p> up to 0.1mm </p>

          <h3> Scanning Object Size: </h3>
          <p> Medium </p>
          <div class="scanline"></div>
          <h2> $9,800 </h2>

        </div>

      </div>

</section>
