<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="shiksha_sangam";

$conn=new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if($conn->connect_error){
    die("cannot connect to database" .$conn->connect_error);
}
?>