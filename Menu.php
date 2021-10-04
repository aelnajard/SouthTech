
  <style media="screen">

  .Space-Menu {
    position: relative;
    height: 70px;
  }
  .wrapper{
    z-index: 1000;
    box-sizing: border-box;
    text-decoration: none;
    background: #171c24;
    position: fixed;
    width: 100%;
    box-shadow: 1px 1px 2px black;
  }
  .wrapper nav{
    position: relative;
    display: flex;
    max-width: calc(100% - 200px);
    margin: 0 auto;
    height: 70px;
    align-items: center;
    justify-content: space-between;
  }
  nav .content{
    display: flex;
    align-items: center;
  }
  nav .content .links{
    margin-left: 80px;
    display: flex;
  }
  .content .logo a{
    color: #fff;
    font-size: 30px;
    font-weight: 600;
  }
  .content .links li{
    list-style: none;
    line-height: 70px;
  }
  .content .links li a,
  .content .links li label{
    color: white;
    font-size: 18px;
    font-weight: 500;
    padding: 10px 25px;
    transition: all 0.3s ease;
    border-left: 2px solid #171c24;
  }
  .content .links li label{
    display: none;
  }
  .content .links li a:hover,
  .content .links li label:hover{
    color: red;
    transition: border-bottom .5s;
  }
  .wrapper .search-icon,
  .wrapper .menu-icon{
    color: #fff;
    font-size: 18px;
    cursor: pointer;
    line-height: 70px;
    width: 70px;
    text-align: center;
  }
  .wrapper .menu-icon{
    display: none;
  }
  .wrapper #show-search:checked ~ .search-icon i::before{
    content: "\f00d";
  }


  .search-box input{
    width: 100%;
    height: 100%;
    border: none;
    outline: none;
    font-size: 17px;
    color: #fff;
    background: #171c24;
    padding: 0 100px 0 15px;
  }
  .search-box input::placeholder{
    color: #f2f2f2;
  }
  .search-box .go-icon{
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    line-height: 60px;
    width: 70px;
    background: #171c24;
    border: none;
    outline: none;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
  }
  .wrapper input[type="checkbox"]{
    display: none;
  }

  /* Dropdown Menu code start */
  .content .links ul{
    position: absolute;
    background: #171c24;
    top: 200px;
    z-index: -1;
    opacity: 0;
    visibility: hidden;
    border-left: 2px solid red;
  }
  .content .links li:hover > ul{
    top: 70px;
    opacity: 1;
    visibility: visible;
    transition: all .3s ease;
  }
  .content .links ul li a{
    display: block;
    width: 100%;
    line-height: 30px;
    border-radius: 0px!important;
  }
  .content .links ul ul{
    position: absolute;
    top: 0;
    right: calc(-100% + 8px);
  }
  .content .links ul li{
    position: relative;
  }
  .content .links ul li:hover ul{
    top: 0;
  }

  /* Responsive code start */
  @media screen and (max-width: 1250px){
    .wrapper nav{
      max-width: 100%;
      padding: 0 20px;
    }
    nav .content .links{
      margin-left: 30px;
    }
    .content .links li a{
      padding: 8px 13px;
    }
    .wrapper .search-box{
      max-width: calc(100% - 100px);
    }
    .wrapper .search-box input{
      padding: 0 100px 0 15px;
    }
  }

  @media screen and (max-width: 900px){
    .wrapper .menu-icon{
      display: block;
    }
    .wrapper #show-menu:checked ~ .menu-icon i::before{
      content: "\f00d";
    }
    nav .content .links{
      display: block;
      position: fixed;
      background: #14181f;
      height: 100%;
      width: 100%;
      top: 70px;
      left: -100%;
      margin-left: 0;
      max-width: 350px;
      overflow-y: auto;
      padding-bottom: 100px;
      transition: all 0.3s ease;
    }
    nav #show-menu:checked ~ .content .links{
      left: 0%;
    }
    .content .links li{
      margin: 15px 20px;
    }
    .content .links li a,
    .content .links li label{
      line-height: 40px;
      font-size: 20px;
      display: block;
      padding: 8px 18px;
      cursor: pointer;
    }
    .content .links li a.desktop-link{
      display: none;
    }

    /* dropdown responsive code start */
    .content .links ul,
    .content .links ul ul{
      position: static;
      opacity: 1;
      visibility: visible;
      background: none;
      max-height: 0px;
      overflow: hidden;
    }
    .content .links #show-features:checked ~ ul,
    .content .links #show-features2:checked ~ ul
{
      max-height: 100vh;
    }
    .content .links ul li{
      margin: 7px 20px;
    }
    .content .links ul li a{
      font-size: 18px;
      line-height: 30px;
      border-radius: 5px!important;
    }
  }

  @media screen and (max-width: 400px){
    .wrapper nav{
      padding: 0 10px;
    }
    .content .logo a{
      font-size: 27px;
    }
    .wrapper .search-box{
      max-width: calc(100% - 70px);
    }
    .wrapper .search-box .go-icon{
      width: 30px;
      right: 0;
    }
    .wrapper .search-box input{
      padding-right: 30px;
    }
  }

  </style>

  <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="index.php">SouthernTechnologies</a></div>
        <ul class="links">
          <li><a href="index.php">Home</a></li>
          <li>
            <a href="Scanners.php" class="desktop-link">Scanners</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Scanners</label>
            <div class="triangle"></div>

            <ul>
              <li><a href="#">Artec Eva</a></li>
              <li><a href="#">Artec Eva Lite</a></li>
              <li><a href="#">Artec Space Spider</a></li>
              <li><a href="#">Artec Leo</a></li>
              <li><a href="#">Artec Ray</a></li>
              <li><a href="#">Artec Micro</a></li>
              <li><a href="#">RoboticScan</a></li>
              <li><a href="#">Artec Shapify Booth</a></li>
              <li><a href="#">Artec Turnable</a></li>
            </ul>
          </li>

          <li>
            <a href="Software.php" class="desktop-link">Software</a>
            <input type="checkbox" id="show-features2">
            <label for="show-features2">Software</label>
            <ul>
              <li><a href="#">Artec Studio 16</a></li>
              <li><a href="#">Artec Cloud</a></li>
              <li><a href="#">ScanApp for Mac</a></li>
              <li><a href="#">Artec SDK</a></li>
              <li><a href="#">Scan to Solidworks</a></li>
              <li><a href="#">Geomagic Design X</a></li>
              <li><a href="#">Geomagic Freeform</a></li>
              <li><a href="#">Geomagic Control X</a></li>
              <li><a href="#">Geomagic Wrap</a></li>

            </ul>
          </li>


          <li><a href="Applications.php">Aplicaciones</a></li>
          <li><a href="Models.php">Modelos</a></li>
          <li><a href="Contact.php">Contáctanos</a></li>
        </ul>
      </div>

    </nav>
  </div>
<div class="Space-Menu"></div>
