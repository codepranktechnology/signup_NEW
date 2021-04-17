<!DOCTYPE html>
<html lang="en">

<head>
  <title>Page Title</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="assets/js/jquery.min.js"></script>
  <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    /* Style the body */
    body {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
    }

    #intro {
      background-image: url("./assets/images/WEBSITE.png");
      background-repeat: no-repeat;
      height: 100vh;
      width: 100vw;
      position: relative;
      overflow: hidden;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: 50%;
    }

    .content-box {
      margin-top: 22rem;
    }

    h3 {
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 1.5rem;
    }

    h1 {
      font-size: 5rem;
      font-weight: bolder;
      margin-bottom: 1.5rem;
    }

    /* ----------- iPad Pro ----------- */
/* Portrait and Landscape */
@media only screen 
  and (min-width: 1024px) 
  and (max-height: 1366px) 
  and (-webkit-min-device-pixel-ratio: 1.5) {

    #intro {
        background-image: url("./assets/images/iPAD.png");
      }
}

/* Portrait */
@media only screen 
  and (min-width: 1024px) 
  and (max-height: 1366px) 
  and (orientation: portrait) 
  and (-webkit-min-device-pixel-ratio: 1.5) {

    #intro {
        background-image: url("./assets/images/iPAD.png");
      }
}

/* Landscape */
@media only screen 
  and (min-width: 1024px) 
  and (max-height: 1366px) 
  and (orientation: landscape) 
  and (-webkit-min-device-pixel-ratio: 1.5) {

    #intro {
        background-image: url("./assets/images/iPAD.png");
      }

}

    /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
    @media screen and (max-width: 400px) {
      #intro {
        background-image: url("./assets/images/pHONE.png");
      }

      .content-box {
        margin-top: 30rem;
      }

      h3 {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: .5rem;
      }

      h1 {
        font-size: 2.5rem;
        font-weight: bolder;
        margin-bottom: .5rem;
      }
    }

    .mask {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      background-attachment: fixed;
    }

    .shadow-2-strong {
      -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .25), 0 5px 15px 2px rgba(0, 0, 0, .2) !important;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .25), 0 5px 15px 2px rgba(0, 0, 0, .2) !important;
    }
  </style>
</head>

<body>
  <div id="notification" style="z-index: 999" class="d-none d-flex justify-content-center position-absolute w-100">
    <div id="success" class="d-none alert alert-success  text-center"  role="alert">
      Thank you!!! We will get back to you.
    </div>
    <div id="emailFail" class="d-none alert alert-danger  text-center"  role="alert">
      Please provide correct email address.
    </div>
  </div>
  <!-- Background image -->
  <div id="intro" class="bg-image shadow-2-strong">
    <div class="mask">
      <div class="container d-flex align-items-center justify-content-center text-center h-100">
        <div class="content-box">
          <h3>Find the best Influencer for your Brand</h3>
          <h1>Coming Soon</h1>
          <div class="d-flex align-items-center justify-content-between">
          <input type="email" id="emailName" name="emailName" class="form-control"
            placeholder="type your email address">
          <button id="submitEmail" style="background-color: #ccc;" class="btn btn-submit">Connect</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $( document ).ready( function () {
      $( "#notification" ).hide();
      $( "#submitEmail" ).on( 'click', function () {
        var emailName = $( "#emailName" ).val();
        if(emailName != ''){
          var sendInfo 		= JSON.stringify({"emailName":emailName});
          $.ajax( {
          url: "main.php",
          type: "POST",
          data: sendInfo,
          contentType: "application/json; charset=utf-8",
          async: false,
          success: function ( response ) {
            console.log( response );
            $( "#notification" ).removeClass("d-none");
            $( "#success" ).removeClass("d-none");
            setTimeout(function () {
              $( "#notification" ).addClass("d-none");
              $( "#success" ).addClass("d-none");
              $( "#emailName" ).val('')
            }, 3000);
          },
          error: function ( request, status, error ) {
            console.log( request + "<=>" + status + "<=>" + error );
          },
          complete: function () {
          }
          } );
        }else{
          $( "#notification" ).removeClass("d-none");
          $( "#emailFail" ).removeClass("d-none");
            setTimeout(function () {
              $( "#notification" ).addClass("d-none");
              $( "#emailFail" ).addClass("d-none");
            }, 1000);
        }
      } );
    } );
  </script>
</body>

</html>