<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['user_name']) && isset($_POST['password']))
 {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$user_name = validate($_POST['user_name']);
	$pass = validate($_POST['password']);

	if(empty($user_name)) {
		header("Location: index1.php?error=User Name is required");
	    exit();
	}
	else if(empty($pass)){
        header("Location: index1.php?error=Password is required");
	    exit();
	}
	else{

        $pass = md5($pass);

        
		$sql = "SELECT * FROM users6 WHERE user_name='$user_name' AND password='$pass'";

		$result = mysqli_query($conn,$sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['user_name'] === $user_name && $row['password'] === $pass && $user_name=="VIGNAN") {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: index3.php");
		        exit();
			}
            else if ($row['user_name'] === $user_name && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: index2.php");
		        exit();
            }
			else{
				header("Location: index1.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index1.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index1.php");
	exit();
}