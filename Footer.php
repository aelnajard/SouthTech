
<style>

/* Footer */
.footer {
  font-size: 0.9em;
  display: flex;
  flex-flow: row wrap;
  padding: 30px 30px 20px 30px;
  background-color: #171c24;
  border-top: 1px solid #e5e5e5;
}

.footer > * {
  flex:  1 100%;
}

.footer__addr {
  margin-right: 1.25em;
  margin-bottom: 2em;
}

.footer__logo {
  font-weight: 400;
  text-transform: lowercase;
  font-size: 1.5rem;
}
  .footer__logo img {
    width: 150px;
  }

.footer__addr h2 {
  margin-top: 1.3em;
  font-size: 15px;
  font-weight: 400;
}

.nav__title {
  color: #e8e8e8;
  font-weight: 400;
  font-size: 15px;
}

.footer address {
  font-style: normal;
  color: #999;
}

.footer__btn {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 36px;
  max-width: max-content;
  background-color: #E8E8E8;
  border-radius: 100px;
  color: #2f2f2f;
  line-height: 0;
  margin: 0.6em 0;
  font-size: 1rem;
  padding: 0 1.3em;
}

.footer ul {
  list-style: none;
  padding-left: 0;
}

.footer li {
  line-height: 2em;
}

.footer a {
  text-decoration: none;
}

.footer__nav {
  display: flex;
	flex-flow: row wrap;
}

.footer__nav > * {
  flex: 1 50%;
  margin-right: 1.25em;
}

.nav__ul a {
  color: #999;
}

.nav__ul--extra {
  column-count: 2;
  column-gap: 1.25em;
}

.legal {
  display: flex;
  flex-wrap: wrap;
  color: #999;
  border-top: 1px solid #383838;
  padding-top: 15px;
  font-size: 0.75em;
}
.legal p {
  color: lightgrey;
}
.legal__links {
  display: flex;
  align-items: center;
}
.legal__links a {
  text-decoration: none;
  color: #E8E8E8;
  margin-left: 5px;
}

.heart {
  color: #2f2f2f;
}

@media screen and (min-width: 24.375em) {
  .legal .legal__links {
    margin-left: auto;
  }
}

@media screen and (min-width: 40.375em) {
  .footer__nav > * {
    flex: 1;
  }

  .nav__item--extra {
    flex-grow: 2;
  }

  .footer__addr {
    flex: 1 0px;
  }

  .footer__nav {
    flex: 2 0px;
  }
}

</style>








<!-- Footer -->
<Footer class="footer">

  <div class="footer__addr">
    <h1 class="footer__logo"> <a href="index.php"><img src="images\Artec-White.png"></a> </h1>
    <h2 class="nav__title"> Contacto </h2>
    <address>
      Colombia, Bogota D.C. <br>
      Carrera 7a #156-40 <br> North Point Towers <br>
      Torre A | Oficina 903
      </address>
  </div>

  <ul class="footer__nav">
    <li class="nav__item">
      <h2 class="nav__title">Social Media</h2>
      <ul class="nav__ul">
        <li> <a href="#">Linkedin</a> </li>
        <li> <a href="#">Youtube</a> </li>
        <li> <a href="#">Instagram</a> </li>
      </ul>
    </li>

    <li class="nav__item nav__item--extra">
      <h2 class="nav__title">Southern Technology</h2>
      <ul class="nav__ul nav__ul--extra">
        <li> <a href="Scanners.php"> 3D Scanners </a> </li>
        <li> <a href="#"> Software </a> </li>
        <li> <a href="#"> Modelos 3D </a> </li>
          <li> <a href="Applications.php"> Aplicaciones </a> </li>
        <li> <a href="Contact.php"> Contactanos </a> </li>
      </ul>
    </li>

    <li class="nav__item">
      <h2 class="nav__title">Legal</h2>
      <ul class="nav__ul">
        <li> <a href="#">Privacy Policy</a> </li>
        <li> <a href="#">Terms of Use</a> </li>
        <li> <a href="#">Sitemap</a> </li>
      </ul>
    </li>
  </ul>

  <div class="legal">
    <p>&copy; 2021 Southern Technologies. </p>

    <div class="legal__links">
      Powered by: <span> <a href="http://www.otticostudio.com"> Ottico <span class="heart"></span> Studio </a></span>
    </div>
  </div>
</Footer>
<!-- End Footer -->
