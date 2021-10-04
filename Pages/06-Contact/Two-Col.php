<style media="screen">

  .Two-Col {
    position: relative;
    height: auto;
    color: black;
  }

  .Two-Col-Txt {
    position: relative;
    max-width: 550px;
    padding: 30px;
    width: 90%;
  }
  .Two-Col-Txt h1 {
    margin-bottom: 5px;
    color: black;
  }
  .Two-Col-Txt h4 {
    color: black;
  }
  .Two-Col-Txt h4, p {
    margin-bottom: 20px;
  }
  .Two-Col p {
  color: black;
}

    .Two-Col-L {
      position: relative;
      float: left;
      width: 50%;
      height: 400px;
    }
    .Two-Col-R {
      position: relative;
      float: left;
      height: 400px;
      width: 50%;
      background: pink;
    }


    @media screen and (max-width: 1000px) {

        .Two-Col-Txt {
          background: lightblue;
          max-width: 600px;
          width: 80%;
          padding: 15px;
        }
          .Two-Col-L {
            width: 100%;
          }
          .Two-Col-R {
            width: 100%;
          }

    }

</style>


<section class="Two-Col">
  <div class="Two-Col-L">

    <div class="Two-Col-Txt Centerly">

      <h1> Original </h1>
      <h4> Dream. Delineate. Innovate. </h4>
      <p> Synergize the technical requirements of what must be,
          together with what could be. From the many, focus on one;
          decide upon a design and move ahead. Work up preliminary
          design and measurement via paper and ultiametly CAD software.
        </p>
        <p> Implement portable 3D scanner for creating 3D models quickly.
          Review and analyze your design until its ready for prototyping.
          </p>
    </div>

  </div>
  <div class="Two-Col-R">
    Right
  </div>

<div class="Clear">  </div>
</section>
