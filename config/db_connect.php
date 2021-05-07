<?php 
//connect to the database
$conn = mysqli_connect('localhost:8889','root','root','didi-pizza');

//check connection
if(!$conn){
	echo 'database connection error:' . mysqli_connect_error();
}


 ?>