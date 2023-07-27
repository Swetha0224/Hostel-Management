<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
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
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
    <img class="logo me-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Vignan_logo.png/903px-Vignan_logo.png?20170727094359" width="70" height="70">
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="mess1.php" class="active">Mess</a></li>

          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <!-- <li><a href="#">Mess</a></li> -->
              <li><a href="#">Rooms</a></li>
              <li><a href="#">Complaints</a></li>
            </ul>
          </li>
          <li><a href="about1.php">About-Us</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="contact1.php">Contact-Us</a></li>
          <li><p><?php echo $_SESSION['name']; ?><a href="logout.php" class="getstarted">Logout</a></p></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
      
              <div class="d-flex justify-content-between align-items-center">
                <h2>MESS</h2>
                <ol>
                  <li><a href="index2.php">Home</a></li>
                  <li>MESS</li>
                </ol>
              </div>
      
            </div>
          </section>
  <section>
  <div class="container">
<div class="row">
    <h1>Mess-Timings</h1>
 <div class="col-md-6">
<ul>
    <li><h5>Breakfast: 8:00 am - 10:00 am</h5></li>
    <li><h5>Lunch: 12:00 noon - 2:00 pm</h5></li>
</ul>
</div>
<div class="col-md-6">
<ul>
    <li><h5>Snacks: 5:00 pm - 6:00 pm</h5></li>
    <li><h5>Dinner: 8:00 pm - 10:00 pm</h5></li>
</ul>
</div>
</div>
<div class="row">
  <h1>Mess Time-Table</h1>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Day</th>
      <th scope="col">Breakfast</th>
      <th scope="col">Lunch</th>
      <th scope="col">Snacks</th>
      <th scope="col">Dinner</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Monday</th>
      <td>Idly-Sambar</td>
      <td>Rice,Dal,Sambar,Potato fry</td>
      <td>Milk,Manchuriyan</td>
      <td>Roti,Milmaker</td>
    </tr>
    <tr>
      <th scope="row">Tuesday</th>
      <td>Lemon rice</td>
      <td>Rice,Dal,Sambar,Brinjal curry</td>
      <td>Sweet corn</td>
      <td>Roti,Egg & mushroom</td>
    </tr>
    <tr>
      <th scope="row">Wednesday</th>
      <td>Dosa</td>
      <td>Rice,Dal,Sambar,Cabbage fry,mixed veg curry</td>
      <td>Noodles</td>
      <td>Roti,Green peas</td>
    </tr>
    <tr>
      <th scope="row">Thursday</th>
      <td>Mysore Bonda</td>
      <td>Rice,Dal,Sambar,Cauliflower curry</td>
      <td>Panipuri</td>
      <td>Veg/egg fried rice</td>
    </tr>
    <tr>
      <th scope="row">Friday</th>
      <td>Tomato rice</td>
      <td>Rice,Dal,Sambar,Panner</td>
      <td>Chat</td>
      <td>Rice,Ghee,Dal,papad</td>
    </tr>
    <tr>
      <th scope="row">Saturday</th>
      <td>Idly,Vada</td>
      <td>Rice,Dal,Sambar,Drumstick</td>
      <td>Fruits</td>
      <td>Sambar bath</td>
    </tr>
    <tr>
      <th scope="row">Sunday</th>
      <td>Chapathi,kurma</td>
      <td>Rice,Biryani,Chicken,panner</td>
      <td>Kesari/semiya</td>
      <td>Zeera rice,curd rice</td>
    </tr>
  </tbody>
</table>
</div>
</div>
</section>



  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Vignan</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +916281010199<br>
                <strong>Email:</strong> vignan@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links ms-auto">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Vignan</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/waypoints/noframework.waypoints.js"></script>
  <script src="vendor/php-email-form/validate.js"></script> -->
  <script src="main.js"></script>

</body>

</html>

<?php 
}else{
     header("Location: index1.php");
     exit();
}
 ?>