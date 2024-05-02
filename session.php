<?php
session_start();
require 'assets/php/connect.php';
$user=$_SESSION['email'];
$stmt=$conn->prepare("SELECT * FROM users WHERE email=?");
$stmt->bind_param("s", $user);
$stmt->execute();
$result=$stmt->get_result();
$row=$result->fetch_array(MYSQLI_ASSOC);
$name=$row['name'];
$email=$row['email'];
$created_dt=$row['created_dt'];

if(!isset($user)){
    header("location:index.php");
}

?>