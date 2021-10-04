
  <style media="screen">
  .slider {
    position: relative;
    width: 100%;
    height: 85vh;
    overflow: hidden;
  }
  .slides {
    position: absolute;
    width: 300%;
    height: 100%;
    top: 0px;
    left: 0;
    transition: 2s ease;
  }
  .Aelna{
    height: 400px;
  }

  .slide {
    position: relative;
    width: 33.33%;
    height: 100%;
    float: left;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
  }



  .slide::before {
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0, 0.05);
  }

         /* Slider images */
        .slide:nth-child(1) {
          background-image: url(images/Home/Slider/Slider2.gif);
        }

        .slide:nth-child(2) {
          background-image: url(images/Home/Slider/Slide3.png);
        }

        .slide:nth-child(3) {
          background-image: url(images/Home/Slider/Slide1.jpg);
        }


  /* Slider Data */
  .slide-data {
    position: absolute;
    top: 26%;
    transform: translateY(-50%);
    width: 100%;
    text-align: center;
    color: #fff;
    padding: 0% 15%;
    color: WHITE;
  }
  .slide-data-center{
    top: 40% !important;
  }

  @media screen and (max-width: 672px){
    .slide-data {
      top: 37%;
    }
  }


    .slide-data h1 {
      text-shadow: 2px 2px black;
      text-align: center;
      text-transform: uppercase;
      font-weight: bolder;
      font-size: 2.3em;
      color: WHITE;
    }


      @media screen and (max-width: 375px){
        .slide-data h1 {
          font-size: 1.9em;
        }
      }

    .slide-data p {
      font-size: 1.2em;
      margin-bottom: 10px;
      color: lightgrey;
      text-shadow: 1px 1px black;

    }

    .slide-data button {
      background: none;
      outline: none;
      border: 1px solid #fff;
      color: #fff;
      font-weight: bolder;
      padding: 10px 25px;
      font-size: 20px;
      transition: 0.4s linear;
      text-shadow: 1px 1px black;
      cursor: pointer;

    }

    .slide-data button:hover {
      color: #000;
      background-color: #fff;
      text-shadow: 1px 1px transparent;
    }




    /* Dots & Arrows */
    .slider .arrows {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: none;
      outline: none;
      border: none;
      font-size: 60px;
      color: #fff;
      transition: 0.4s linear;
      cursor: pointer;
    }
    .slider .arrows:hover {
      text-shadow: 0px 0px 3px grey;
    }
      .slider .arrows:hover {
        text-shadow: 1px 1px 3px grey;
      }

        .slider .prev {
          left: 3%;
        }
        .slider .next {
          right: 3%;
        }

    .dots {
      position: absolute;
      bottom: 3%;
      width: 100%;
      text-align: center;
      cursor: pointer;
    }

    .dots span {
      width: 12px;
      height: 12px;
      margin: 0 6px;
      border-radius: 100px;
      background-color: #fff;
      display: inline-block;
      transition: 0.4s linear;

    }

    .dots span:hover {
      background-color: #000 !important;
      border: 2px solid #fff;
    }

    .dot-active {
      background-color: #000 !important;
      border: 2px solid #fff;
    }
  </style>


    <div class="slider">
       <div class="slides">


          <div class="slide">
            <div class="slide-data">

            </div>
          </div>

           <div class="slide">
             <div class="slide-data">

               <h1> Nuestros Scanners </h1><br>
               <p> Artec 3D es un líder mundial en tecnología de escaneo 3D,
                  ofrecemos los mejores y más completos escáneres 3D y
                 software de procesamiento aplicable en una amplia gama de industrias. </p><br>

               <button id="Open-Scanners"> EXPLORAR </button>

             </div>
           </div>

            <div class="slide">
              <div class="slide-data slide-data-center">
                <h1> Aplicaciones </h1><br>
                <p> Artec 3D desarrolla y mejora constantemente soluciones de
                   escaneo 3D que son perfectas para su uso en prototipos
                   rápidos e ingeniería inversa. </p>
                  <br>
                <button id="Open-ContactUs"> CONTACTANOS </button>
              </div>
            </div>
       </div> <!-- END Slides -->



      <!-- Left Arrow -->
      <button class="arrows prev" onclick="plusslide(-1)">
        <span><i class="fas fa-angle-left"></i></span>
      </button>

      <!-- Right Arrow -->
      <button class="arrows next" onclick="plusslide(1)">
        <span><i class="fas fa-angle-right"></i></span>
      </button>

      <div class="dots">
        <span onclick="currentslide(1)"> </span>
        <span onclick="currentslide(2)"> </span>
        <span onclick="currentslide(3)"> </span>
      </div>

    </div> <!-- END Banner Slider -->



    <script type="text/javascript">

    document.getElementById('Open-Scanners').addEventListener('click', e => {
      window.open("Scanners.php","_self");
    }
    );

    document.getElementById('Open-ContactUs').addEventListener('click', e => {
      window.open("Contact.php","_self");
    }
    );






    let slideIndex = 0;

    let slider = document.querySelector(".slider");
    let slides = document.querySelector(".slides");
    let slide = document.querySelectorAll(".slide");

    let dots = document.querySelectorAll(".dots span");


    showslide();


    function plusslide(position) {
      slideIndex += position;

      if(slideIndex > slide.length) {
        slideIndex = 1;
      }
      else if (slideIndex < 1) {
        slideIndex = slide.length;
      }

      // Default: Active Class is removed from all dots
      for (let i=0; i < dots.length; i++) {
        const element = dots[i];
        element.classList.remove("dot-active");
      }

      slides.style.left = `-${slideIndex -1}00%`;
      dots[slideIndex - 1].classList.add("dot-active");

    } // End PlusSlide()








    function currentslide(index) {

      if(index > slide.length) {
        index = 1;
      }
      else if (index < 1) {
        index = slide.length;
      }

      // Default: Active Class is removed from all dots
      for (let i=0; i < dots.length; i++) {
        const element = dots[i];
        element.classList.remove("dot-active");
      }

      slides.style.left = `-${index -1}00%`;
      dots[index - 1].classList.add("dot-active");

      slideIndex = index;
    } // End CurrentSlide()










    function showslide() {
      slideIndex++;

      if(slideIndex > slide.length) {
        slideIndex = 1;
      }
      else if (slideIndex < 1) {
        slideIndex = slide.length;
      }

      // Default: Active Class is removed from all dots
      for (let i=0; i < dots.length; i++) {
        const element = dots[i];
        element.classList.remove("dot-active");
      }

      slides.style.left = `-${slideIndex -1}00%`;
      dots[slideIndex - 1].classList.add("dot-active");
    }


    let interval = setInterval(()=> {
      showslide();
    }, 12000);   // Change image after 6 secs


    slider.addEventListener("mouseover", ()=> {
      clearInterval(interval);  // Stop Changing images onHover
    });


    slider.addEventListener("mouseout", ()=> {
      interval = setInterval(()=> {
        showslide();
      }, 12000);         // resume Timer after MouseOut from Slide
    });

    </script>
