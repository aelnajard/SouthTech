<style>

.Promo {
      position: relative;
      height: 340px;
      width: 100%;
      background-color: rgb(240,63,36);
}
.Promo p {
  font-size: 1em;
  color: white;
}

.Promo h1 {
  font-size: 1.7em;
  color: darkslategrey;
}
.Promo h2 {
  font-size: 1.5em;
  color: white;
}
.Promo h3 {
  font-size: 1.3em;
  color: white;
}


  .Promo-L {
    float: left;
    width: 50%;
    height: 340px;
  }
    .Promo-L img {
      height: 300px;
    }


  .Promo-R {
    float: left;
    width: 50%;
    padding: 30px;
    color: white;
  }
    .Promo-R h2 {
      margin: 20px 0px;
    }
    .Promo-R img {
      position: relative;
      top: 32px;
      left: 30px;
    }

.Promo button {
  padding: 10px;
  border: none;
  color: rgb(209,209,209);
  background: rgb(92,92,93);
}






/* Responsiveness */
@media only screen and (max-width:1090px) {
  .Promo {
        height: 340px;
        width: 100%;
  }

    .Promo-L {
      width: 50%;
    }
      .Promo-L img {
        height: 75%;
      }
    .Promo-R {
      width: 50%;
      padding-right: 60px;
    }

    .Wrap-Promo {
      width: 100%;
      margin: 0 auto;
    }
}



@media only screen and (max-width: 800px) {

  .Promo {
        height: 700px;
  }

    .Promo-L {
      width: 100%;
    }
      .Promo-L img {
        height: 75%;
      }
    .Promo-R {
      width: 100%;
      padding: 5px 10%;
    }
    .Wrap-Promo {
      width: 80%;
      margin: 0 auto;
    }

}



</style>



    <section class="Promo">
      <div class="Wrap-Promo">

          <div class="Promo-L">
            <img src="images\Home\Promo-01.png" class="Centerly">
          </div>

          <div class="Promo-R">

              <h2> Try out the world's leading handheld 3D laser scanners </h2>
              <p> We have certified resellers all over the world and
                we can organize a free one-on-one demo of our products
                for you wherever you are </p>

              <button> Free Demo </button>
              <img src="images\Home\Promo-02.png">
          </div>
      </div>
    </section>
