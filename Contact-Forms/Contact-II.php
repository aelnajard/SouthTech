<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Contact Form </title>
  </head>

  <body>

    <style media="screen">

      .section-contact {
        min-height: 100vh;
        padding: 100px 0px;
        background-image: linear-gradient(175deg, #EEE 50%, #FF9FDB 50%, #9B75D7);
      }

      .contact-wrap {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0px 32px;
      }

          @media (max-width: 1024px) {
              .contact-wrap {
                padding: 0px 128px;
              }
          }

              @media (max-width: 768px) {
                  .contact-wrap {
                    padding: 0px 32px;
                  }
              }

      .section-contact h1 {
        color: #666;
        font-size: 36px;
        text-transform: uppercase;
        text-align: center;
        margin-bottom: 16px;
      }
      .section-contact p {
        color: #888;
        font-size: 18px;
        line-height: 1.5;
        margin-bottom: 32px;
      }

      .section-contact form {
        display: grid;
        grid-template-columns: 2fr;
        grid-gap: 16px;

        background-color: #FFF;
        padding: 32px;
        border-radius: 16px;
        box-shadow: 0px 6px 12px rgba(0,0,0, 0.2);
      }
          .section-contact textarea {
            resize: none;
            min-height: 100px;
          }

          @media (max-width: 768px) {
              body {
                grid-template-columns: repeat(2,1fr);
              }
          }

          .section-contact .form-group {
            padding-right: 30px;
          }

          .section-contact .form-group label {
              display: block;
              margin-bottom: 5px;
              color: #888;
              font-size: 14px;
            }

            .section-contact .form-group .form-element {
              appearance: none;
              outline: none;
              border: none;

              display: block;
              width: 100%;

              border-radius: 8px;
              padding: 12px 16px;
              background-color: #F3F3F3;
            }


          .section-contact .submit-group input {
            position: relative;
              appearance: none;
              border: none;
              outline: none;
              background: none;

              padding: 12px 16px;
              background-color: #FF9FDB;
              border-radius: 8px;
              color: #FFF;
              cursor: pointer;
              transition: 0.4s;
            }

          .section-contact .submit-group input:hover {
            background-color: #9B75D7;
          }






    </style>


    <section class="section-contact">
      <div class="contact-wrap">
        <h1> Contact the team! </h1>
        <p> Fill out the form below to get in touch with one of our
            members. We will try to get back to you within 48 hours.
            If we do not reply within that time please feel free to
            use the form again. </p>

          <!-- Form -->
          <form>

            <div class="form-group">
              <label for="firstname"> First Name: </label>
              <input type="text" name="firstname" id="firstname" class="form-element" placeholder="Nikola" required>
            </div>

            <div class="form-group">
              <label for="lastname"> Last Name: </label>
              <input type="text" name="lastname" id="lastname" class="form-element" placeholder="Tesla" required>
            </div>

            <div class="form-group">
              <label for="email"> Email Address: </label>
              <input type="text" name="email" id="email" class="form-element" placeholder="E-mail:">
            </div>

            <div class="form-group">
              <label for="company"> Company Name: </label>
              <input type="text" name="company" id="company" class="form-element" placeholder="Radcol">
            </div>

            <div class="form-group full">
              <label for="email"> What are you looking for? </label>
              <textarea name="message" id="message" class="form-element" placeholder="I want a new AR/VR ready App!.. "></textarea>
            </div>

            <div class="submit-group">
              <input type="submit" value="SEND MESSAGE">
            </div>
          </form>
      </div>
    </section>

  </body>
</html>
