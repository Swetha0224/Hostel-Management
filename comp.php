<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIIT</title>
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
          <li><a href="comp.php" class="active">Complaints</a></li>

<li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
  <ul>
    <!-- <li><a href="#">Mess</a></li> -->
    <li><a href="#">Rooms</a></li>
    <li><a href="mess.php">Mess</a></li>
  </ul>
</li>
<li><a href="about.php">About-Us</a></li>
<li><a href="gallery.php">Gallery</a></li>
<li><a href="contact.php">Contact-Us</a></li>
<li><p><?php echo $_SESSION['name']; ?><a href="logout.php" class="getstarted">Logout</a></p></li>
</ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
      </div>
    </header>
    <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
      
              <div class="d-flex justify-content-between align-items-center">
                <h2>Complaints</h2>
                <ol>
                  <li><a href="index2.php">Home</a></li>
                  <li>Complaints</li>
                </ol>
              </div>
      
            </div>
          </section>
  <section>
    <section id="contact" class="contact">
    <div class="container px-4 text-center">
  <div class="row gx-5">
    <div class="col-6">
    <img src="https://www.scilife.io/hubfs/Complaints-Management.jpg" class="img-thumbnail h-500" alt="...">
    </div>
    <div class="col-6 ">
      <form id="sss"
        method="POST"
        class="w-100 rounded-1 p-4 border bg-white"
        enctype="multipart/form-data"
      >
        <label class="d-block mb-4">
          <span class="form-label d-block">Your name</span>
          <input
            name="name"
            type="text"
            class="form-control"
            placeholder="Enter name"
            required
          />
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Email address</span>
          <input
            name="email"
            type="email"
            class="form-control"
            placeholder="Enter email"
            required
          />
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Upload Image</span>
          <input name="receipt" type="file" class="form-control" required/>
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Write Complaint here</span>
          <textarea
            name="message"
            class="form-control"
            rows="3"
            placeholder="Please describe your problem"
            required></textarea>
        </label>
        <br>
              <div class="text-center"><input type="submit" class="submit"></div>
            
        
      </form>
    </div>
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

  <!-- Template Main JS File -->
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