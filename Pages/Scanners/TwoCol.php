<style>

/* ------------- */
/*    TWO COL    */
/* ------------- */
  .TwoCol {
    position: relative;
    width: 100%;
    height: auto;
  }

  .TwoCol h1 {
    margin-bottom: 20px;
  }
  .TwoCol h4 {
    margin-bottom: 5px;
  }
    .Col-Top {
      position: relative;
      height: 400px;
    }
    .Col-Txt {
      padding: 80px;
    }
    .Col-Bot {
      position: relative;
      height: 400px;
    }

      .Col-L {
        position: relative;
        float: left;
        width: 50%;
        height: 100%;
      }
      .Col-R {
        position: relative;
        float: left;
        width: 50%;
        height: 100%;
        padding: 70px;
      }

        #TopR {
          background-image: url("images/ProScan/Eva-01.png");
          background-repeat: no-repeat;
          background-size: cover;
        }
        #BotL {
          background-image: url("images/ProScan/Eva-02.png");
          background-repeat: no-repeat;
          background-size: cover;
        }



      @media only screen and (max-width:1130px) {

        .TwoCol-Wrap {
          width: 60%;
          margin: 0 auto;
        }

          .Col-Top {
            position: relative;
            height: auto;
          }
            #TopR {
              width: 100%;
              height: 400px;
            }
          .Col-L {
            width: 100%;
            padding: 50px;
            margin-bottom: 60px;
          }
          .Col-Bot {
            position: relative;
            height: 400px;
          }
          .Col-R {
            width: 100%;
            padding: 40px 10% 50px 10%;
          }
            #BotL {
              height: 100%;
            }
      }



        @media only screen and (max-width:950px) {
          .TwoCol-Wrap {
            width: 85%;
          }
          .Col-R {
            padding: 40px 17% 0px 17%;
          }
        }


            @media only screen and (max-width:750px) {
              .TwoCol-Wrap {
                width: 80%;
              }
              .Col-R {
                padding: 25px 15% 0px 5%;
              }
            }


            @media only screen and (max-width:600px) {
              .TwoCol-Wrap {
                width: 100%;
              }
              .Col-R {
                width: 100%;
                padding: 30px 50px 50px 50px;
              }

            }

</style>


    <section class="TwoCol-Wrap">
      <div class="TwoCol">

                <div class="Col-Top">
                  <div class="Col-L Col-Txt">
                    <h1> Industry-standard 3D scanner </h1>
                    <h4> scanner for all ocasions </h4>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting
                      industry. Lorem Ipsum has been the industry's standard dummy text
                      ever since the 1500s, when an unknown printer took a galley of type
                      and scrambled it to make a type specimen book. </p>

                  </div>
                  <div class="Col-R" id="TopR">

                  </div>
                </div>

                <div class="Col-Bot">
                  <div class="Col-L" id="BotL">
                      d
                  </div>
                  <div class="Col-R Col-Txt">
                    <h1> Powerful hybrid geometry texture </h1>
                    <h4> Eva is able to read both the geometry and color of the object </h4>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting
                      industry. Lorem Ipsum has been the industry's standard dummy text
                      ever since the 1500s, when an unknown printer took a galley of type
                      and scrambled it to make a type specimen book. </p>

                  </div>
                </div>
              </div>
      </div>

    </section>

<div class="Clear"> </div>
<!-- Clear Floats -->
