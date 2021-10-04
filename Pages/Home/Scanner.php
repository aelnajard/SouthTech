
    <style media="screen">
    .Scanner-Home{
      position: relative;
      width: 100vw;
      background-color: rgba(245, 245, 245, .5);
      height: 740px;;
      padding-bottom: 40px;
    }
    .Container-Scanner-Home{
      position: relative;
      width: 80vw;
      margin: auto auto;
      height: 80%;
      overflow: hidden;
      bottom: 0px;
    }
    .Container-Scanner-Home-Long{
      position: absolute;
      left: 0px;
      height: 100%;
      width: 7500px;
    }
    .Arrows-Scanner-Container{
      position: relative;
      width: 100%;
      height: 40px;
      top: 45%;
    }
    .Arrow-Left, .Arrow-Right{
      position: absolute;
      height: 100%;
      cursor: pointer;
      filter: drop-shadow(1px 1px 1px black);
      transition: filter .2s;
      z-index: 100;
    }
    .Arrow-Left{
      left: 40px;
    }
    .Arrow-Right{
      right: 40px;
    }
    .Arrow-Left:hover, .Arrow-Right:hover{
      filter: drop-shadow(1px 1px 2px black);
      transition: all .5s;
    }
    .Arrow-Left:active, .Arrow-Right:active{
      filter: drop-shadow(1px 1px 1px black);
      transition: all .5s;
    }
    .Card-Scanner-Home{
      position: relative;
      display: inline-block;
      height: 100%;
      width: 380px;
      margin: auto 30px;
      top: 50%;
      transform: translateY(-50%);
    }
    .Card-Scanner-Home img{
      position: absolute;
      height: 300px;
      width: 100%;
      top: 0px;
      padding-bottom: 15px;
      border-bottom: 1px  solid rgba(223, 223, 223,1);
      opacity: 1;
      transition: opacity .8s;
    }
    .Card-Scanner-Home h3{
      position: absolute;
      top: 55%;
      font-size: 1.25em;
      font-weight:900;
      border-bottom: 2px solid transparent;
      transition: border-bottom .5s;
      cursor: pointer;

    }
    .Card-Scanner-Home p{
      position: absolute;
      top: 61%;
      font-size: 1em;
    }
    .Card-Scanner-Home img:nth-child(1){
      display: none;
      visibility: hidden;
      opacity: 0;
      transition: all .5s;
    }
    .Card-Scanner-Home:hover img:nth-child(1){
      display: block;
      visibility: visible;
      opacity: 1;
      transition: all .5s;
    }

    .Card-Scanner-Home:hover img:nth-child(2){
      display: block;
      opacity: 0;
      transition: opacity .8s;
    }


    .Card-Scanner-Home:hover h3{
      border-bottom: 2px solid black;
      transition: border-bottom .5s;
    }

    .Scanner-Home h1{
      position: relative;
      text-align: center;
      padding-top: 40px;
    }
    .SmallContainer-Scanner-Home{
      position: absolute;
      bottom: 20px;
      height: 120px;
      width: 100%;
    }
    .Item-Scanner-Home{
      position: relative;
      height: 30px;
      width: 100%;
      border-bottom: 1px  solid rgba(223, 223, 223,1);
    }
    .Left-Scanner, .Right-Scanner{
      position: absolute;
      padding: 5px;
      font-size: 1em;
      width: 40%;
      height: 100%;
    }
    .Left-Scanner{
      left: 0px;
      text-align: left;
    }
    .Right-Scanner {
      right: 0px;
    }
    .Right-Scanner p{
      position: relative;
      text-align: right;
      width: 100%;
      top: 0px;
    }
    .Left-Scanner p{
      position: relative;
      text-align: left;
      width: 100%;
      top: 0px;
    }

    .Left-Scanner p i{
      cursor: pointer;
      padding: 0 1px;
    }

    .Popup{
      position: absolute;
      display: none;
      width: 250px;
      background-color: black;
      z-index: 1000;
      left: 100%;
      bottom: -200%;
      padding: 10px;
      border-radius: 5px;
    }
    .Popup p{
      color: white;
      padding: 0px 10px;
      text-align: center;
      text-align: left;
    }

    .Open-Popup:hover  .Popup{
      display: block;
    }



    </style>
    <section class="Scanner-Home">

      <h1>Scanners</h1>
      <div class="Arrows-Scanner-Container">
        <img  id="Move-Left"  class="Arrow-Left" src="images/Home/Scanners/Arrow-Left.png" alt="">
        <img id="Move-Right" class="Arrow-Right" src="images/Home/Scanners/Arrow-Right.png" alt="">

      </div>
      <div class="Container-Scanner-Home">
        <div id="Move-Cards" class="Container-Scanner-Home-Long">


          <div class="Card-Scanner-Home">
            <img src="images/Home/Scanners/MicroJMGifs.gif" alt="">
            <img src="images/Home/Scanners/MicroJM.png" alt="">

            <a href="#"> <h3>Artec Micro</h3></a>
            <p>Escáner 3D de escritorio de grado metrológico para control de calidad,
               inspección, joyería, componentes médicos / dentales, etc.</p>
               <div class="SmallContainer-Scanner-Home">
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Tipo de Scanner</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >Escritorio</p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Open-Popup  Left-Scanner">
                     <div  class="Popup">
                       <p>Tamaño de objetos comunes:</p>
                       <br>
                       <p>XS: < 90x60x60 mm </p>
                       <p>S: 5 - 20 cm</p>
                       <p>M: 20 - 50 cm</p>
                       <p>L: 50 - 200 cm</p>
                       <p>S: > 200 cm</p>
                     </div>
                     <p>Tamaño del objeto <i class="fas fa-info"></i>
                     </p>
                   </div>
                   <div class="Right-Scanner">
                     <p >XS</p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Precisión</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >hasta 0,01 mm</p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Resolución</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >hasta 0,029 mm</p>
                   </div>
                 </div>
               </div>
          </div>




          <div class="Card-Scanner-Home">
            <img src="images/Home/Scanners/SpiderGifs.gif" alt="">
            <img src="images/Home/Scanners/Spider.png" alt="">

            <h3>Artec Space Spider</h3>
            <p>Escáner 3D de luz estructurada metrológica, con estabilización
               automática de temperatura para resultados de alta precisión.</p>
               <div class="SmallContainer-Scanner-Home">
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Tipo de scanner</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >Manual</p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Open-Popup  Left-Scanner">
                     <div  class="Popup">
                       <p>Tamaño de objetos comunes:</p>
                       <br>
                       <p>XS: < 90x60x60 mm </p>
                       <p>S: 5 - 20 cm</p>
                       <p>M: 20 - 50 cm</p>
                       <p>L: 50 - 200 cm</p>
                       <p>S: > 200 cm</p>
                     </div>
                     <p>Tamaño del objeto <i class="fas fa-info"></i>
                     </p>
                   </div>
                   <div class="Right-Scanner">
                     <p >S</p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Precisión</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >Hasta 0.05 mm</p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Resolución</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >hasta 0,1 mm</p>
                   </div>
                 </div>
               </div>
          </div>







          <div class="Card-Scanner-Home">
            <img src="images/Home/Scanners/EvaGifs.gif" alt="">
            <img src="images/Home/Scanners/Eva.png" alt="">

            <h3>Artec Eva</h3>
            <p>Nuestro escáner 3D portátil más vendido para un escaneo rápido
              y preciso. Ideal para capturar todo tipo de objetos de tamaño
              mediano.</p>
               <div class="SmallContainer-Scanner-Home">
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Tipo de scanner</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >Manual</p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Open-Popup  Left-Scanner">
                     <div  class="Popup">
                       <p>Tamaño de objetos comunes:</p>
                       <br>
                       <p>XS: < 90x60x60 mm </p>
                       <p>S: 5 - 20 cm</p>
                       <p>M: 20 - 50 cm</p>
                       <p>L: 50 - 200 cm</p>
                       <p>S: > 200 cm</p>
                     </div>
                     <p>Tamaño del objeto <i class="fas fa-info"></i>
                     </p>
                   </div>
                   <div class="Right-Scanner">
                     <p>A partir de 10 cm</p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Precisión</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >Hasta 0.01 mm</p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Resolución</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >hasta 0,2 mm</p>
                   </div>
                 </div>
               </div>
          </div>




          <div class="Card-Scanner-Home">
            <img src="images/Home/Scanners/LeoGifs.gif" alt="">
            <img src="images/Home/Scanners/Leo.png" alt="">

            <h3>Artec Leo</h3>
            <p>Escáner 3D móvil fácil de usar con una pantalla táctil incorporada
               y una interfaz de usuario intuitiva para un escaneo 3D fácil.</p>
               <div class="SmallContainer-Scanner-Home">
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Tipo de scanner</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >Manual</p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Open-Popup  Left-Scanner">
                     <div  class="Popup">
                       <p>Tamaño de objetos comunes:</p>
                       <br>
                       <p>XS: < 90x60x60 mm </p>
                       <p>S: 5 - 20 cm</p>
                       <p>M: 20 - 50 cm</p>
                       <p>L: 50 - 200 cm</p>
                       <p>S: > 200 cm</p>
                     </div>
                     <p>Tamaño del objeto <i class="fas fa-info"></i>
                     </p>
                   </div>
                   <div class="Right-Scanner">
                     <p >AM, L</p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Precisión</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >Hasta 0.1 mm<p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Resolución</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >hasta 0.2 mm</p>
                   </div>
                 </div>
               </div>
          </div>






          <div class="Card-Scanner-Home">
            <img src="images/Home/Scanners/RayGifs.gif" alt="">
            <img src="images/Home/Scanners/Ray.png" alt="">

            <h3>Artec Ray</h3>
            <p>Potente escáner 3D láser de largo alcance con batería incorporada,
               para la captura precisa de objetos grandes.</p>
               <div class="SmallContainer-Scanner-Home">
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Tipo de scanner</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >De largo alcance</p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Open-Popup  Left-Scanner">
                     <div  class="Popup">
                       <p>Tamaño de objetos comunes:</p>
                       <br>
                       <p>XS: < 90x60x60 mm </p>
                       <p>S: 5 - 20 cm</p>
                       <p>M: 20 - 50 cm</p>
                       <p>L: 50 - 200 cm</p>
                       <p>S: > 200 cm</p>
                     </div>
                     <p>Tamaño del objeto <i class="fas fa-info"></i>
                     </p>
                   </div>
                   <div class="Right-Scanner">
                     <p >L, XL</p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Precisión</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >Hasta 0.0125°<p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Resolución</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >--</p>
                   </div>
                 </div>
               </div>
          </div>





          <div class="Card-Scanner-Home">
            <img src="images/Home/Scanners/EvaLiteGifs.gif" alt="">
            <img src="images/Home/Scanners/Eva.png" alt="">

            <h3>Artec Eva Lite</h3>
            <p>Un scanner 3D portátil para tomar medidas para
              aplicaciones médicas y crear soluciones de atención médica personalizadas.</p>
               <div class="SmallContainer-Scanner-Home">
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Tipo de scanner</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >Manual</p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Open-Popup  Left-Scanner">
                     <div  class="Popup">
                       <p>Tamaño de objetos comunes:</p>
                       <br>
                       <p>XS: < 90x60x60 mm </p>
                       <p>S: 5 - 20 cm</p>
                       <p>M: 20 - 50 cm</p>
                       <p>L: 50 - 200 cm</p>
                       <p>S: > 200 cm</p>
                     </div>
                     <p>Tamaño del objeto <i class="fas fa-info"></i>
                     </p>
                   </div>
                   <div class="Right-Scanner">
                     <p>----</p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Precisión</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >Hasta 0.1 mm</p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Resolución</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >hasta 0.5 mm</p>
                   </div>
                 </div>
               </div>
          </div>




          <div class="Card-Scanner-Home">
            <img src="images/Home/Scanners/RoboticScan.gif" alt="">
            <img src="images/Home/Scanners/RototicScan.png" alt="">

            <h3>RoboticScan</h3>
            <p>Introduzca esta solución automática de manos libres en su flujo
              de trabajo para crear  modelos 3D precisos de la manera
              más rentable y que ahorra tiempo.</p>
               <div class="SmallContainer-Scanner-Home">
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Tipo de scanner</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >--</p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Open-Popup  Left-Scanner">
                     <div  class="Popup">
                       <p>Tamaño de objetos comunes:</p>
                       <br>
                       <p>XS: < 90x60x60 mm </p>
                       <p>S: 5 - 20 cm</p>
                       <p>M: 20 - 50 cm</p>
                       <p>L: 50 - 200 cm</p>
                       <p>S: > 200 cm</p>
                     </div>
                     <p>Tamaño del objeto <i class="fas fa-info"></i>
                     </p>
                   </div>
                   <div class="Right-Scanner">
                     <p>----</p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Precisión</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >--</p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Resolución</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >--</p>
                   </div>
                 </div>
               </div>
          </div>









          <div class="Card-Scanner-Home">
            <img src="images/Home/Scanners/ShapifyBooth.gif" alt="">
            <img src="images/Home/Scanners/ShapifyBooth.png" alt="">

            <h3>Shapify Booth</h3>
            <p>Escáner corporal 3D de luz estructurada con un solo clic.</p>
               <div class="SmallContainer-Scanner-Home">
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Tipo de scanner</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >Cabina</p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Open-Popup  Left-Scanner">
                     <div  class="Popup">
                       <p>Tamaño de objetos comunes:</p>
                       <br>
                       <p>XS: < 90x60x60 mm </p>
                       <p>S: 5 - 20 cm</p>
                       <p>M: 20 - 50 cm</p>
                       <p>L: 50 - 200 cm</p>
                       <p>S: > 200 cm</p>
                     </div>
                     <p>Tamaño del objeto <i class="fas fa-info"></i>
                     </p>
                   </div>
                   <div class="Right-Scanner">
                     <p>M</p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Precisión</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >0.2 mm</p>
                   </div>
                 </div>
                 <div class="Item-Scanner-Home">
                   <div class="Left-Scanner">
                     <p >Resolución</p>
                   </div>
                   <div class="Right-Scanner">
                     <p >Hasta 2 mm</p>
                   </div>
                 </div>
               </div>
          </div>













        </div>
      </div>
    </section>
    <script type="text/javascript">



    document.getElementById('Move-Right').addEventListener('click', e => {

    var left =  document.getElementById('Move-Cards').offsetLeft;
    left = left - 440;
    if (left > -2200) {
      document.getElementById('Move-Cards').style.left=left + "px" ;
      document.getElementById('Move-Cards').style.transition = "left 1s ";
    }
    else {
      document.getElementById('Move-Cards').style.left=0 + "px" ;
      document.getElementById('Move-Cards').style.transition = "left 2.5s ";
    }
    }
    );


    document.getElementById('Move-Left').addEventListener('click', e => {

    var left =  document.getElementById('Move-Cards').offsetLeft;
    left = left + 440;
    if (left < 0) {
      document.getElementById('Move-Cards').style.left=left + "px" ;
      document.getElementById('Move-Cards').style.transition = "left 1s ";
    }
    else{
      document.getElementById('Move-Cards').style.left=-2200 + "px" ;
      document.getElementById('Move-Cards').style.transition = "left 2.5s ";
    }
    }
    );
    </script>
