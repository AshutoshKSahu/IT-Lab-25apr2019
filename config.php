<?php
$servername="localhost";
$username="ashu";
$password="root";
$dbname="2016cse399";
$conn=mysqli_connect($servername,$username,$password,$dbname)
or die("Could not connect to database.");
mysqli_select_db($conn,$dbname)
or die("Could not select database.");
?>
