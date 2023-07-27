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
          <li><a href="rooms.php" class="active">Rooms</a></li>

          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <!-- <li><a href="#">Mess</a></li> -->
              <li><a href="mess1.php">Mess</a></li>
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
                <h2>Allotment</h2>
                <ol>
                  <li><a href="rooms.php">ROOMS</a></li>
                  <li>Allotment</li>
                </ol>
              </div>
      
            </div>
          </section>
  <section class="ss">
    <div class="container">
        <br>
        <br>
        <h2>Details</h2>
    <form class="row g-3 needs-validation" id="fd">
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" placeholder="enter" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <br>
  <div class="col-md-6">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" placeholder="enter" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Mobile</label>
    <input type="number" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a number.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Room-type</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid room.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Cost</label>
    <input type="number" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid cost.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Address</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid Dr.no.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom05" class="form-label">Pin Code</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" onclick="fun()" type="submit">Submit form</button>
  </div>
</form>
</div>
</section>

<script src="main.js"></script>
  <script>
    function fun(){
        alert("Details has been submitted!!");

}
  </script>

 
</body>
</html>

<?php 
}else{
     header("Location: index1.php");
     exit();
}
 ?>