<?php 
include 'db_conn.php'
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="container">
        <button class="btn btn-primary my-5"><a href="dash.php" class="text-light">ADD USER</a></button>
        <div class="row my-5">
                    <h3 class="fs-4 mb-3">Student Details</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <!-- <th scope="col" width="50">#</th> -->
                                    <th scope="col" width="50">ID</th>
                                    <th scope="col">NAME</th>
                                    <th scope="col">User Name</th>
                                    <!-- <th scope="col">Email</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql="Select * from `users6`";
                                $result=mysqli_query($conn,$sql);
                                if($result){
                                    while($row=mysqli_fetch_assoc($result)){
                                        $id=$row['id'];
                                        $name=$row['name'];
                                        $user_name=$row['user_name'];
                                        echo '<tr>
                                        <th scope="row">'.$id.'</th>
                                        <td>'.$name.'</td>
                                        <td>'.$user_name.'</td>
                                    </tr>';
                                    }
                                }
                                ?>
                          
                                <!-- <tr>
                                    <th scope="row">1</th>
                                    <td>10</td>
                                    <td>Swetha</td>
                                    <td>Takasi Swetha Surya</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>11</td>
                                    <td>Mohana</td>
                                    <td>Takasi Mohana Sathvika</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>12</td>
                                    <td>Ambica</td>
                                    <td>Takasi Nookambica</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>13</td>
                                    <td>Sravya</td>
                                    <td>Takasi Sravya</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>14</td>
                                    <td>VIGNAN</td>
                                    <td>VIIT</td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
    </div>
    
</body>
</html>