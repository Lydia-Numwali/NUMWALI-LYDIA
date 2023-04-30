<?php
include "connection.php";
$user_id=$_GET['id'];
$sql="DELETE FROM `users` WHERE id=$user_id";
$result=mysqli_query($conn,$sql);

if($result){
    header("Location:index.php?msg=Record deleted successfully");
}
else{
    echo "Failed:" .mysqli_error($conn);
}

?>
