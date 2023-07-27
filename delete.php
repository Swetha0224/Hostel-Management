<?php 
include 'db_conn.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `users6` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        // 0echo "Deleted successfully";
        header('location:index3.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>