<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Contact Us - Responsive </title>
  </head>
  <body>

    <style media="screen">

      * {
        margin: 0px;
        padding: 0px;
        outline: none;
        box-sizing: border-box;
        font-family: sans-serif;
      }

      body {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        padding: 40px;
        background: linear-gradient(120deg, #56d8e4 10%, #9f01ea 90%)
      }

      .container {
        background: #FFF;
        width: 800px;
        max-width: 800px;
        padding: 25px 40px 10px 40px;
        box-shadow: 0px 0px 10px rgba(0,0,0, 0.1);
      }

      .container .text {
        font-size: 35px;
        font-weight: 600;
        text-align: center;
        background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }


      .container form {
        padding: 30px 0px 0px 0px;
      }

      .container form .form-row {
        display: flex;
        margin: 32px 0;
      }

        form .form-row .input-data {
          position: relative;
          width: 100%;
          height: 40px;
          margin: 0 20px;
        }
        form .form-row .textarea {
          height: 100px;
        }

        .input-data input,
        .textarea textarea {
          display: block;
          height: 100%;
          width: 100%;
          border: none;
          font-size: 17px;
          border-bottom: 2px solid rgba(0,0,0, 0.12);
        }

        .textarea textarea {
          resize: none;
          padding-top: 10px;
        }

        /* Form Focus */
        .input-data input:focus ~ label,
        .textarea textarea:focus ~ label,
        .input-data input:valid ~ label,
        .textarea textarea:valid ~ label {
          transform: translateY(-20px);
          color: #3498db;
          font-size: 14px;
        }

        .input-data label {
          position: absolute;
          bottom: 10px;
          font-size: 16px;
          pointer-events: none;
          transition: all 0.3s ease;
        }

        .textarea label {
          width: 100%;
          bottom: 80px;
          background: #FFF;
        }

        .input-data .underline {
          position: absolute;
          bottom: 0px;
          height: 2px;
          width: 100%;
        }

        .input-data .underline:before,
        .input-data .underline:after {
          position: absolute;
          content: "";
          height: 100%;
          width: 100%;
          background: #3498db;
          transform: scaleX(0);
          transform-origin: center;
          transition: transform .6s ease;
        }

        .input-data input:focus ~ .underline:before, .underline:after,
        .textarea textarea:focus ~ .underline:before, .underline:after,
        .input-data input:valid ~ .underline:before, .underline:after,
        .textarea textarea:valid ~ .underline:before, .underline:after {
            transform: scaleX(1);
        }


        .submit-btn .input-data {
          height: 45px !important;
          width: 25% !important;
          overflow: hidden;
        }
        .submit-btn .input-data .inner {
          position: absolute;
          height: 100%;
          width: 300%;
          left: -100%;
          background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
          transition: all 0.3s;
        }

        .submit-btn .input-data:hover .inner {
          left: 0px;
        }

        .submit-btn .input-data input {
          position: relative;
          z-index: 2;
          background: none;
          border: none;
          color: #fff;
          font-size: 17px;
          font-weight: 500;
          text-transform: uppercase;
          letter-spacing: 1px;
          cursor: pointer;
        }


        @media (max-width: 700px) {
          .container .text {
            font-size: 30px;
          }
          .container form {
            padding: 10px 0 0 0;
          }
          .container form .form-row {
            display: block;
          }
          form .form-row .input-data {
            margin: 35px 0 !important;
          }
          .submit-btn .input-data {
            width: 40% !important;
          }
        }


    </style>

    <div class="container">
      <div class="text"> Contact Us </div>

      <form action="#">

        <div class="form-row">

          <div class="input-data">
            <input type="text" required>
            <div class="underline"> </div>
            <label> First Name: </label>
          </div>

          <div class="input-data">
            <input type="text" required>
            <div class="underline"> </div>
            <label> Last Name: </label>
          </div>

        </div>


        <div class="form-row">

          <div class="input-data">
            <input type="text" required>
            <div class="underline"> </div>
            <label> Company Name: </label>
          </div>

          <div class="input-data">
            <input type="text" required>
            <div class="underline"> </div>
            <label> Email Address: </label>
          </div>

        </div>


        <div class="form-row">

          <div class="input-data textarea">
            <textarea rows="10" cols="30" required></textarea>
            <div class="underline"> </div>
            <label> Message: </label>
          </div>

        </div>


        <div class="form-row submit-btn">

          <div class="input-data">
            <div class="inner"> </div>
            <input type="submit" value="submit">
          </div>

        </div>


      </form>


    </div>


  </body>
</html>
