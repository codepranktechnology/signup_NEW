<!DOCTYPE html>
<html lang="en">

<head>
  <title>Signup</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="assets/js/jquery.min.js"></script>
  <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="assets/css/styles.css" rel="stylesheet">
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
  <script src="assets/js/mian.js"></script>
</body>
</html>