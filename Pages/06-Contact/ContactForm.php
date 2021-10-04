<style media="screen">

  .ContactForm {
    position: relative;
    width: 95%;
    margin: 0 auto;
  }

  .Contact-Msg {
    position: relative;
    width: 80%;
    margin: 0px auto;
    padding: 50px 0px;
  }

    .Contact-Msg h1 {
      text-align: center;
      margin-bottom: 16px;
    }
    .Contact-Msg p {
      text-align: center;
      margin-bottom: 32px;
      color: lightgrey;
    }


    .Contact-Form-Area {
      position: relative;
      max-width: 600px;
      width: 90%;
      margin: 0 auto;
      padding-bottom: 100px;
    }

    .Contact-Form-Area form {
        display: grid;
        grid-template-columns: 2fr;
        grid-gap: 16px;

        background-color: rgba(255,255,255, 0.85);
        padding: 32px;
        border-radius: 4px;
        border: 1px solid grey;
        box-shadow: 0px 6px 12px rgba(0,0,0, 0.9);
    }
    .Contact-Form-Area textarea {
          resize: none;
          min-height: 120px;
        }

    .Contact-Form-Area label {
      display: block;
      margin-bottom: 5px;
      color: #888;
      font-size: 1em;
    }
    .Contact-Form-Area .form-group .form-element {
      appearance: none;
      outline: none;
      border: none;

      display: block;
      width: 100%;

      border-radius: 8px;
      padding: 12px 16px;
      color: grey;
      background-color: #F3F3F3;
      font-size: .92em;
    }

    .Contact-Form-Area .submit-group input {
        appearance: none;
        border: none;
        outline: none;

        padding: 12px 16px;
        border-radius: 4px;
        cursor: pointer;

        background: rgb(240,63,36);
        transition: 1s;
        color: #FFF;
        font-size: 0.82em;
      }

      .Contact-Form-Area .submit-group input:hover {
      background: rgba(240,63,36,0.85);
      }

</style>


<section class="ContactForm">

  <div class="Contact-Msg">
    <h1> Contactanos! </h1>
    <p> Utiliza el siguiente formulario para ponerte en contacto con
        nuestro equipo. Estamos pendientes y te estaremos contestando en las proximas 48 horas,
        pero en caso de lo contrario, no dudes en volvernos a escribir! </p>
  </div>


  <div class="Contact-Form-Area">

    <form>

      <div class="form-group">
        <label for="firstname"> First Name: </label>
        <input type="text" name="firstname" id="firstname" class="form-element" placeholder="" required>
      </div>

      <div class="form-group">
        <label for="lastname"> Last Name: </label>
        <input type="text" name="lastname" id="lastname" class="form-element" placeholder="" required>
      </div>

      <div class="form-group">
        <label for="company"> Company Name: </label>
        <input type="text" name="company" id="company" class="form-element" placeholder="">
      </div>

      <div class="form-group">
        <label for="email"> Email Address: </label>
        <input type="text" name="email" id="email" class="form-element" placeholder="">
      </div>

      <div class="form-group full">
        <label for="email"> Message: </label>
        <textarea name="message" id="message" class="form-element" placeholder=""></textarea>
      </div>

      <div class="submit-group">
        <input type="submit" value="SEND MESSAGE">
      </div>

    </form>

  </div>

</section>
