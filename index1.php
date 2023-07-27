<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VIIT-Hostel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="image/favicon-32x32.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="style.css" rel="stylesheet">
</head>
<body>



	 <!-- ======= Header ======= -->
	 <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center">
      <img class="logo me-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Vignan_logo.png/903px-Vignan_logo.png?20170727094359" width="70" height="70">
      
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="contact" class="active">Contact-Us</a></li>
  
            <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="#">Mess</a></li>
                <li><a href="#">Rooms</a></li>
                <li><a href="#">Complaints</a></li>
              </ul>
            </li>
            <li><a href="about">About-Us</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <!-- <li><a href="contact.html">Contact-Us</a></li> -->
            <li><a href="index1" class="getstarted">Get Started</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
      </div>
    </header>
<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

        <div class="d-flex justify-content-center py-4">
          <a href="index.php" class="logo d-flex align-items-center w-auto">
            <img src="image/favicon-32x32.png" alt="">
            <span ><h1 class="d-none d-lg-block"> Vignan</h1></span>
          </a>
        </div>

        <div class="card mb-3">

          <div class="card-body">

            <div class="pt-4 pb-2">
              <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
              <p class="text-center small">Enter your username & password to login</p>
            </div>

            <form action="login.php" method="post">

            <?php if (isset($_GET['error'])) { ?>
     		          <p class="error"><?php echo $_GET['error']; ?></p>
     	        <?php } ?>

              <div class="col-12">
                <label for="yourUsername" class="form-label">Username</label>
                <div class="input-group has-validation">
                  <input type="text" name="user_name" class="form-control" id="yourUsername" required>
                  <div class="invalid-feedback">Please enter your username.</div>
                </div>
              </div>

              <div class="col-12">
                <label for="yourPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="yourPassword" required>
                <div class="invalid-feedback">Please enter your password!</div>
              </div>
             <br>
              <!-- <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                  <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
              </div> -->
              <div class="col-12">
              <!-- <button type="submit">Login</button> -->
              <button class="btn btn-secondary text-opacity-75 w-100" type="submit">Login</button>
              </div>
              <div class="col-12">
                <p class="small mb-0">Don't have account? <a href="signup.php" class="ca">Create an account</a></p>
              </div>
            </form>

          </div>
        </div>
              </div>
            </section>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/waypoints/noframework.waypoints.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="main.js"></script>

</body>

</html>