<style media="screen">

  .Banner-Soft {
    position: relative;
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    height: 80vh;
  }
  .Banner-Soft-L {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 50%;
  }
    .Banner-L-Msg {
      position: relative;
      top: 20%;
      padding: 0 10%;
      max-width: 480px;
    }
    .Banner-Soft-L h1 {
      margin-bottom: 20px;
    }
  .Banner-Soft-R {
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: 50%;
  }
    .Banner-Soft-R img {
      width: 100%;
      max-width: 500px;
      position: relative;
      top: 50%;
      transform: translateY(-50%);
    }

    @media screen and (max-width: 800px) {

      .Banner-Soft {
        width: 75%;
      }
      .Banner-Soft-L {
        width: 100%;
        height: 50%;
      }
        .Banner-L-Msg {
          top: 0%;
          padding-top: 8%;
        }

      .Banner-Soft-R {
        width: 100%;
        top: 46%;
        left: 0;
        height: 50%;
      }
      .Banner-Soft-R img {
        width: 100%;
        max-width: 300px;
        position: relative;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
    }

</style>

<section class="Banner-Soft">

  <div class="Banner-Soft-L">
    <div class="Banner-L-Msg">
        <h1> 3D Software </h1>
        <p> Along with manufacturing professional 3D scanners, Artec develops
          smart 3D scanning software. Meticulously designed to meet the needs
          of both new and experienced users alike, it is the best choice for
          any application. </p>
    </div>
  </div>

  <div class="Banner-Soft-R">
    <img src="images/Software/Banner-Soft.png" alt="Software">
  </div>
</section>
