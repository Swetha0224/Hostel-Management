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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
    <img class="logo me-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Vignan_logo.png/903px-Vignan_logo.png?20170727094359" width="70" height="70">
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index2.php" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="mess1.php">Mess</a></li>
              <li><a href="rooms.php">Rooms</a></li>
              <li><a href="comp.php">Complaints</a></li>
            </ul>
          </li>
          <li><a href="about1.php">About-Us</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="contact1.php">Contact-Us</a></li>
          <!-- <li></li> -->
          <li><a href="logout.php" class="getstarted">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(https://universityinnovation.org/images/3/31/VIIT.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>VIGNAN</span></h2>
              <p class="animate__animated animate__fadeInDown"><?php echo $_SESSION['name']; ?></p>
              <p class="animate__animated animate__fadeInUp">Vignan's Institute Of Information Technology is one of the engineering institutions run by the Vignan group of Guntur. It was established in 2002 to offer undergraduate (BTech) (college code:L3) courses in engineering and technology. It is situated in Duvvada, a suburban region of Visakhapatnam, India.

            </p>
              <a href="https://vignaniit.edu.in/principal.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
             
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(https://image.shutterstock.com/image-photo/tbilisi-georgia-oct-9-window-260nw-1164605263.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">VIGNAN HOSTEL</h2>
              <p class="animate__animated animate__fadeInUp">The hostel rooms are maintained with fully hygenic and clean beds,curtains,shelves.The room consists of 4 people with an attached washrooms.Hostel provides wi-fi facility.</p>
              <a href="https://vignaniit.edu.in/principal.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(https://www.sathyabama.ac.in/sites/default/files/2020-01/DSC_4916.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">VIGNAN's AKSHAYAPATRA</h2>
              <p class="animate__animated animate__fadeInUp">Vignan takes pride in claiming that we have one of the best and the most experienced team that takes care in preparing and catering healthy food in a hygienic environment. Our aesthetically designed Canteen is one of the best places to eat</p>
              <a href="https://vignaniit.edu.in/principal.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>Vignan's Institute <br>Of Information Technology(VIIT)</h2>
            <h3>Approved by AICTE-New Delhi & Affliated to JNTUK,Kakinada</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
                Vignan's Institute of Information Technology (VIIT), Visakhapatnam was established in the year 2002 and is a private co-educational institution. The campus is spread over 17 acres of land. It is approved by the All India Council for Technical Education (AICTE). VIIT Visakhapatnam has a total of 344 faculty members while the total student enrollment is 4612. Vignan’s Institute of Information Technology is an ISO 9001:2015 certified institute. The mission of the institute is to introduce innovative practices of teaching and learning.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>The institute is accredited by the NBA.</li>
              <li><i class="ri-check-double-line"></i> VIIT Visakhapatnam is also accredited by the NAAC.</li>
              <li><i class="ri-check-double-line"></i> The institute is approved by the AICTE.</li>
            </ul>
            <p class="fst-italic">
                The institute is located beside VSEZ Vadlapudi Duvvada, Gajuwaka, Visakhapatnam, Andhra Pradesh. The nearest railway station is Duvvada.
            </p>
          </div>
        </div>

      </div>
    </section><section id="services" class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">Luggage Security</a></h4>
              <p>Hostel provide cupboards with a key to every student. They provide security and responsible for your luggage in the rooms.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-safe"></i>
              <h4><a href="#">Meditation Room</a></h4>
              <p>If you want to do any exercises/meditation in morning then you have to inform in the chat box to get a room.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-hospital"></i>
              <h4><a href="#">Hospital</a></h4>
              <p>The hostel can provide medicines to students.If any emergency occurs,the hostel can admit into a hospital.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-book"></i>
              <h4><a href="#">Study Room</a></h4>
              <p>If you want to study separately in the study room then you can request in the chat box so they can allocate the room.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-chat-dots"></i>
              <h4><a href="#">Chat box</a></h4>
              <p>If you have any queries or any other problems related to hostel then you can message or inform in the chat box.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-calendar4-week"></i>
              <h4><a href="#">Events</a></h4>
              <p>Suppose you want to celebrate any event in the hostel. You can seek permission in the chat box so they can give permission.</p>
            </div>
          </div>
        </div>

      </div>
    </section>

  </main>
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Vignan</h3>
              <p>
                Duvvada<br>
                Visakhapatnam<br><br>
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

 
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/waypoints/noframework.waypoints.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <script src="main.js"></script>

</body>

</html>

<?php 
}else{
     header("Location: index1.php");
     exit();
}
 ?>