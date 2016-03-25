<?php
include('connection.php');
session_start();
$user_check=$_SESSION['username'];

$ses_sql = mysqli_query($db,"SELECT * FROM users WHERE username='$user_check' ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
extract($row);

$login_user=$row['username'];
$login_id =$row['userID'];

if(!isset($user_check))
{
header("Location: register.php");
}


?>