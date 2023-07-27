<?php
include 'db_conn.php';
if(isset($_POST['submit'])){
   
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    $name=$_POST['name'];
    $sql="insert into `users6` (user_name,password,name)
    values('$user_name','$password','$name')";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "Data inserted successfully";
        header('location:index3.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="image/favicon-32x32.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
      
        <link href="style.css" rel="stylesheet">
        <link href="style1.css" rel="stylesheet">
    <title>VIIT</title>
  </head>
  <body>
  <!-- <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
    <img class="logo me-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Vignan_logo.png/903px-Vignan_logo.png?20170727094359" width="70" height="70">
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="dash.php" class="active">Dashboard</a></li>
          <li><a href="about.html">About-Us</a></li> 
          <li><a href="admesh.php">Mesh</a></li>
          <li><a href="comp.php">Complaints</a></li>
     </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header> -->
  <div class="main">
  <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
      
              <div class="d-flex justify-content-between align-items-center">
                <h2>DASHBOARD</h2>
                <ol>
                  <li><a href="index3.php">Home</a></li>
                  <li>Dashboard</li>
                </ol>
              </div>
      
            </div>
          </section>
    <section id="f">
    <div class="container">
    <form method="post">
    <div class="form-group">
  <label for="exampleInputPassword1">ID</label>
    <input type="number" class="form-control" placeholder="Enter id" name="id" autocomplete="off">
</div>
  <div class="form-group">
  <label for="exampleInputPassword1">Name</label>
    <input type="text" class="form-control" placeholder="Enter name" name="name" autocomplete="off">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" autocomplete="off">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Username</label>
    <input type="text" class="form-control" id="email" name="user_name" aria-describedby="emailHelp" placeholder="Enter email" autocomplete="off">
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="re_password" id="password" placeholder="Re_Password" autocomplete="off">
    
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
</section>
</div>
</body>
</html>