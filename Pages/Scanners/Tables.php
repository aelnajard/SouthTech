<style>

      /* ----------- */
      /*   Tables    */
      /* ----------- */

.Cases {
  position: relative;
  width: 100%;
  height: 500px;
  margin: 40px 0px;
}
.Cases img {
  position: relative;
  left: 50%;
  transform: translateX(-100%);
  width: 70px;
  margin: 20px 0;
}

.Case-L {
  position: relative;
  float: left;
  height: 100%;
  width: 50%;
}
.Case-R {
  position: relative;
  float: left;
  height: 100%;
  width: 50%;
  padding: 50px;
}
  .Case-R h4 {
    margin: 10px 0;
  }
  .Case-R h3 {
    margin: 10px 0;
  }


table {
  position: absolute;
  z-index: 1;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  min-width: 450px;
  height: 400px;

  border-collapse: collapse;
  border-spacing: 0;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 2px 12px 0 0;

  background: #FAFAFA;
  text-align: center;
}
th,td {
  width: 280px;
  padding: 10px;
}
th {
  font-size: 1.125em;
  background: rgb(239,64,35);
  color: #FAFAFA;
}
td {
  font-size: 0.9em;
}
tr:nth-child(odd) {
  background-color: #EEEEEE;
}


  /* Responsiveness */
  @media only screen and (max-width:1130px) {

    .Cases {
      position: relative;
      width: 100%;
      height: 500px;
    }
    .Case-L {
      width: 50%;
    }
    .Case-R {
      width: 50%;
      padding: 30px;
    }

  }


  @media only screen and (max-width: 1000px) {

    table {
      min-width: 420px;
    }
    .Cases {
      position: relative;
      width: 100%;
    }

    .Case-L {
      width: 100%;
    }
    .Case-R {
      width: 100%;
      height: auto;
      padding: 40px 15%;
      margin-bottom: 50px;
    }

  }



</style>





<div class="Wrap">
<!-- Wrap -->

      <section>
        <div class="Cases">

            <div class="Case-L">

                      <table>
                        <tr>
                          <th> 3D Accuracy </th>
                          <td> Up to 0.1 mm </td>
                        </tr>
                        <tr>
                          <th> 3D Resolution </th>
                          <td> Up to 0.2 mm </td>
                        </tr>

                        <tr>
                          <th> Object Size </th>
                          <td> Starting from 10 cm </td>
                        </tr>

                        <tr>
                          <th> Full Color Scanning </th>
                          <td> Yes </td>
                        </tr>

                        <tr>
                          <th> Target-free Tracking </th>
                          <td> Hybrid geometry and color based </td>
                        </tr>

                        <tr>
                          <th> 3D Reconstruction Rate </th>
                          <td> 16 FPS </td>
                        </tr>

                        <tr>
                          <th> Output Formats </th>
                          <td> All popular formats, including STL, OBJ, PLY, BTX </td>
                        </tr>

                        <tr>
                          <th> Weight </th>
                          <td> 0.9 kg </td>
                        </tr>

                      </table>

            </div>

            <div class="Case-R">

              <h2> Best scanner on the market </h2>
              <h4> Eva Lite also available </h4>
              <p> Thanks to their high precision, Artec 3D scanners have a wide range
                of applications in industrial design and manufacturing. Commonly used
                during various stages of product design development and implementation,
                these powerful 3D scanning tools significantly speed up the workflow </p>

                <img src="images/ProScan/Ball.png">

              <h3> Precision like no other </h3>
              <p> Seamless export of the 3D models to a variety of widely used CAD
                and CAM programs allows users to conduct a large variety of tests
                for quality control, acquire necessary measurements and other data for
                reverse engineering, object integration and more. </p>
            </div>

        </div>
      </section>

</div>
<!-- Wrap -->
<div class="Clear"> </div>
<!-- Clear Floats -->
