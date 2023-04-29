<?php
$server='localhost';
$dbname='user_management_db';
$username='root';
$password='myPassword!!!';

$conn=new mysqli($server,$username,$password,$dbname);
if(!$conn){
    echo 'Connection failed';
}else{
    //echo 'Connected successfully'; 
    echo '<br>';
}
?>