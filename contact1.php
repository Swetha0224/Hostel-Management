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
            <li><a href="contact1.php" class="active">Contact-Us</a></li>
  
            <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="mess1.php">Mess</a></li>
                <li><a href="#">Rooms</a></li>
                <li><a href="#">Complaints</a></li>
              </ul>
            </li>
            <li><a href="about1.php">About-Us</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <!-- <li><a href="contact.html">Contact-Us</a></li> -->
            <li><p><?php echo $_SESSION['name']; ?><a href="logout.php" class="getstarted">Logout</a></p></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
      </div>
    </header>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container-fluid">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="index2.php">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://maps.google.com/maps?width=991&amp;height=573&amp;hl=en&amp;q=vignan institute informational technology viskhapatnam&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Besides VSEZ Vadlapudi Duvvada, Gajuwaka, Visakhapatnam, Andhra Pradesh 530049</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>vignan@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+916281010199</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form>
               
              <div class="row"> 
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <br>
              <div class="text-center"><input type="submit" class="submit"></div>
            </form>

          <!-- </div> -->

        <!-- </div> -->

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Vignan</h3>
              <p>
                Duvvada <br>
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

          <div class="col-lg-2 col-md-6 footer-links ">
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
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="main.js"></script>
  <script>
    let url="https://script.google.com/macros/s/AKfycbzKnJnLDzFffT2Bl91pUYL_5Io3dQyqQbMOFN2HCx2HRWDqLty1-8ukbJ_RuS_ZLOax/exec";
    // let url="https://script.google.com/macros/s/AKfycbwHt2yabhbFkSDldQziIJppG1WnRQvw025rlrLtyzOdLBko1t12lVmo5vcVb-y2-LWa/exec";
    let form=document.querySelector("form");
    let submit=document.querySelector(".submit");
    let message=document.querySelector(".message");
    form.addEventListener('submit',(e)=>{
            e.preventDefault();
            submit.value="submitting..."
            fetch(url,{method:"POST",body: new FormData(form)})
            .then(res=>res.text())
            .then(data=>{
                message.innerHTML=data;
                submit.value="Sent"
            })
            .catch(err=>{
                message.innerHTML=err; 
                submit.value="Sent"
            })
    })
  </script>

</body>

</html>

<?php 
}else{
     header("Location: index1.php");
     exit();
}
 ?>
<!-- <h2>Contact Us</h2>
                <span class="message"></span>
                <input type="text" name="name" placeholder='Name..'>
                <input type="email" name="email" placeholder='Email..'>
                <textarea name="message" cols="30" rows="10" placeholder='Message..'></textarea>
                <input type="submit" class="submit">-->